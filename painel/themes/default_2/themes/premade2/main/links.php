<?php if (!defined('FLUX_ROOT')) exit; ?>
<script>
$(document).ready(function() {
    $("#reg").mouseover(function() {
		$("#reg").attr('src',"<?php echo $this->themePath('img/llg/reg_h.png')  ?>");
		}).mouseout(function(){
		$("#reg").attr('src',"<?php echo $this->themePath('img/llg/reg.png')  ?>");
	});
	
	$("#don").mouseover(function() {
		$("#don").attr('src',"<?php echo $this->themePath('img/llg/don_h.png')  ?>");
		}).mouseout(function(){
		$("#don").attr('src',"<?php echo $this->themePath('img/llg/don.png')  ?>");
	});
	
	$("#dl").mouseover(function() {
		$("#dl").attr('src',"<?php echo $this->themePath('img/llg/dl_h.png')  ?>");
		}).mouseout(function(){
		$("#dl").attr('src',"<?php echo $this->themePath('img/llg/dl.png')  ?>");
	});
});

</script>
<div style="padding: 15px;">
<a href="?module=main&action=download"><img src="<?php echo $this->themePath('img/llg/dl.png') ?>" id="dl" /></a>
<br /><br />
<a href="?module=account&action=create"><img src="<?php echo $this->themePath('img/llg/reg.png') ?>" id="reg" /></a>
<br /><br />
<a href="?module=main&action=donate"><img src="<?php echo $this->themePath('img/llg/don.png') ?>" id="don" /></a>
<br />

</div>