<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Comprar</h2>
<p>Itens nessa loja são comprados usando <span class="keyword">Gift Points</span> e não dinheiro de verdade.  Gift Points são dados para players que <a href="<?php echo $this->url('donate') ?>">fazem uma doação para o nosso servidor</a>, nos ajudando a cobrir com os custos de hospedagem e manutenção do servidor.</p>
<h2>Loja de Itens <span class="shop-server-name"><?php echo htmlspecialchars(Flux::config("ConquerServerName")) ?></span></h2>
<p class="action">
	<a href="<?php echo $this->url('purchase', 'index') ?>"<?php if (is_null($category)) echo ' class="current-shop-category"' ?>>
		<?php echo htmlspecialchars(Flux::message('AllLabel')) ?> (<?php echo number_format($total) ?>)
	</a>
<?php foreach ($categories as $catID => $catName): ?>
	/
	<a href="<?php echo $this->url('purchase', 'index', array('category' => $catID)) ?>"<?php if (!is_null($category) && $category === (string)$catID) echo ' class="current-shop-category"' ?>>
		<?php echo htmlspecialchars($catName) ?> (<?php echo number_format($categoryCount[$catID]) ?>)
	</a>
<?php endforeach ?>
</p>
<?php if ($categoryName): ?>
<h3>Categoria: <?php echo htmlspecialchars($categoryName) ?></h3>
<?php endif ?>
<?php if ($items): ?>
<?php if ($session->isLoggedIn()): ?><br />
	<?php if ($cartItems=$server->cart->getCartItemNames()): ?><p class="cart-items-text">Itens no seu carrinho: <span class="cart-item-name"><?php echo implode('</span>, <span class="cart-item-name">', array_map('htmlspecialchars', $cartItems)) ?></span>.</p><br /><?php endif ?>
	<p class="cart-info-text">Você possui <span class="cart-item-count"><?php echo number_format(count($cartItems)) ?></span> item(s) no seu carrinho.</p>
	<p class="cart-total-text">O seu subtotal atual é <span class="cart-sub-total"><?php echo number_format($server->cart->getTotal()) ?></span> crédito(s).</p>
<?php endif ?>
<?php echo $paginator->infoText() ?>
<table class="shop-table">
	<?php foreach ($items as $item): ?>
	<tr>
		<td class="shop-item-image">
		<?php if(1==0){ ?>
			<!-- backup para posterior implementação para ragnarok -->
			<?php if (($item->shop_item_use_existing && ($image=$this->itemImage($item->shop_item_nameid))) || ($image=$this->shopItemImage($item->shop_item_id))): ?>
				<img src="<?php echo $image ?>?nocache=<?php echo rand() ?>" />
			<?php endif ?>
		<?php } ?>
		<?php
			$serverName       = $server->loginAthenaGroup->serverName;
			$athenaServerName = Flux::config("ConquerServerName");//$this->server->serverName;
			$dir              = FLUX_DATA_DIR."/itemshop/$serverName/$athenaServerName";
			$image_view 	  = $dir.'/'.$item->shop_item_nameid.'.png';
			?>
			<img src="<?php echo htmlspecialchars($image_view); ?>" />

			
		</td>
		<td>
			<h4 class="shop-item-name">
				<?php if ($item->shop_item_qty > 1): ?>
				<span class="qty"><?php echo number_format($item->shop_item_qty) ?>x</span>
				<?php endif ?>
				<?php echo $item->shop_item_name ?>
			</h4>
			<p class="shop-item-info"><?php echo Markdown($item->shop_item_info) ?></p>
		</td>
		<td class="shop-item-cost-qty">
			<p><span class="cost"><?php echo number_format($item->shop_item_cost) ?></span> GiftPoints.</p>
			<p class="shop-item-action"><br />
				<?php if ($auth->actionAllowed('purchase', 'add')): ?>
				<a href="<?php echo $this->url('purchase', 'add', array('id' => $item->shop_item_id)) ?>"><img style=" display:block;" src="<?php echo $this->themePath('img/BotCarrinho.png') ?>" id="Comprar" /></a>
				<?php endif ?>
			</p>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>Não há itens a venda.</p>
<?php endif ?>
