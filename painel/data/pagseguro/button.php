<?php
if (!defined('FLUX_ROOT')) exit;

if (empty($amount)) {
	return false;
}
?>

<form method="post" action="<?php echo $this->url('doa', 'process')?>"> 
	<input type="hidden" name="itemAmount1" value="<?php echo $amount ?>">
	<input type="hidden" name="payment_type" value="PagSeguro">
	<input type="hidden" name="payment_game" value="<?php echo $this->params->get('payment_game') ?>">
	<p style="text-align: center"><input type="image" name="submit" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/209x48-doar-assina.gif" alt="Pague com PagSeguro - � r�pido, gr�tis e seguro!"></p>   
</form> 