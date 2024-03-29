<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

$title = 'Área de Confirmação';

if ($server->cart->isEmpty()) {
	$session->setMessageData('Seu carrinho está vazio.');
	$this->redirect($this->url('purchase'));
}
elseif (!$server->cart->hasFunds()) {
	$session->setMessageData('Você não tem saldo o suficiente para fazer essa transação!');
	$this->redirect($this->url('purchase'));
}

$items = $server->cart->getCartItems();

if (count($_POST) && $params->get('process')) {

	if (!Flux_Security::csrfValidate('PurchaseCheckOut', $_POST, $error)) {
		$session->setMessageData($error);
		$this->redirect($this->url('purchase','checkout'));
	}

	$redeemTable = Flux::config('FluxTables.RedemptionTable');
	$creditTable = Flux::config('FluxTables.CreditsTable');
	$deduct      = 0;
	
	$sql  = "INSERT INTO {$server->loginDatabase}.$redeemTable ";
	$sql .= "(nameid, quantity, cost, account_id, char_id, redeemed, redemption_date, purchase_date, credits_before, credits_after) ";
	$sql .= "VALUES (?, ?, ?, ?, NULL, 0, NULL, NOW(), ?, ?)";
	$sth  = $server->connection->getStatement($sql);
	
	$balance = $session->account->balance;
	
	foreach ($items as $item) {
		$creditsAfter = $balance - $item->shop_item_cost;
		
		$res = $sth->execute(array(
			$item->shop_item_nameid,
			$item->shop_item_qty,
			$item->shop_item_cost,
			$session->account->account_id,
			$balance,
			$creditsAfter
		));
		
		if ($res) {
			$deduct  += $item->shop_item_cost;
			$balance -= $item->shop_item_cost;
		}
	}
	
	//$sql = "UPDATE {$server->loginDatabase}.$creditTable SET balance = balance - ? WHERE account_id = ?";
	//$sth = $server->connection->getStatement($sql);
	//$sth->execute(array($deduct, $session->account->account_id));
	
	$session->loginServer->depositCredits($session->account->account_id, -$deduct);
	
	if ($res) {
		if (!$deduct) {
			$server->cart->clear();
			$session->setMessageData('Falha ao comprar todos os itens que estavam no seu carrinho!');
		}
		elseif ($deduct != $server->cart->getTotal()) {
			$server->cart->clear();
			$session->setMessageData('Alguns itens foram comptados, mas alguns falharam (mas não se preocupe, seus créditos ainda está lá).');
		}
		else {
			$server->cart->clear();
			$session->setMessageData('Compra realizada com sucesso. Você pode pegar os itens no NPC de Recompensa.');
		}
	}
	else {
		$session->setMessageData('A compra deu errado, contate um Administrador!');
	}
	
	$this->redirect();
}
?>