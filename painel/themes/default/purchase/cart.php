<?php if (!defined('FLUX_ROOT')) exit; ?>
<br />
<h2>Meu Carrinho</h2>
<p class="cart-info-text">Você possui <span class="cart-item-count"><?php echo number_format(count($items)) ?></span> item(s) no seu carrinho.</p>
<p class="cart-total-text">Seu subtotal atual é <span class="cart-sub-total"><?php echo number_format($total=$server->cart->getTotal()) ?></span> crédito(s).</p>
<br />
<form action="<?php echo $this->url('purchase', 'remove') ?>" method="post">
	<table class="vertical-table cart">
		<?php foreach ($items as $num => $item): ?>
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
				<h4>
					<label>
						<input type="checkbox" name="num[]" value="<?php echo $num ?>" />
						<?php echo htmlspecialchars($item->shop_item_name) ?>
					</label>
				</h4>
				<?php if ($item->shop_item_qty > 1): ?>
				<p class="shop-item-qty">Quantidade: <span class="qty"><?php echo number_format($item->shop_item_qty) ?></span></p>
				<?php endif ?>
				<p class="shop-item-cost"><span class="cost"><?php echo number_format($item->shop_item_cost) ?></span> créditos</p>
				<p class="shop-item-action">
					<a href="<?php echo $this->url('purchase', 'remove', array('num' => $num)) ?>">Remover do Carrinho</a> /
					<a href="<?php echo $this->url('purchase', 'add', array('id' => $item->shop_item_id, 'cart' => true)) ?>">Adicionar outro item igual ao carrinho</a>
				</p>
				<p><?php echo nl2br(htmlspecialchars($item->shop_item_info)) ?></p>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
    <table border="0" style="margin-top:30px;" width="100%">
    <tr>
    <td width="75%">
    <p><a style=" color:#CCC; text-transform:uppercase; font:Verdana, Geneva, sans-serif; border: #393 solid 10px; border-radius: 3px; background-color:#393;" href="<?php echo $this->url('purchase', 'checkout') ?>">Finalizar Compra Já</a></p>
    </td>
    <td>
    	<p class="remove-from-cart">
		<input style=" font-size:12px; margin-top:-10px; color:#CCC; text-transform:uppercase; font:Verdana, Geneva, sans-serif; border:#366 solid 10px; border-radius: 3px; background-color:#366;" type="submit" value="Remover Itens Selecionados" />
	</p>
    </td>
    
    <td>
    <p class="remove-from-cart"><a style=" color:#CCC; text-transform:uppercase; font:Verdana, Geneva, sans-serif; border:#366 solid 10px; border-radius: 3px; background-color:#366;" href="<?php echo $this->url('purchase', 'clear') ?>">Esvaziar carrinho</a></p>
    </td>
    </tr>
    </table>
        


