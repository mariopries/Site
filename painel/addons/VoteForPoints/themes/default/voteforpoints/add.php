<?php if (!defined('FLUX_ROOT')) exit; ?>
<br/>
<h2>Administração - Adicione novo Site para Voto</h2>
<?php if(count($error)>0): ?>
<h3>Error:</h3>
<ul>
	<?php foreach($error as $err){ ?>
		<li><?php echo $err; ?></li>
	<?php } ?>
</ul>
<?php endif; ?>
<form action="<?php echo $this->url ?>&return=add_site"  method="post" enctype="multipart/form-data" class="generic-form">
<table class="vertical-table" width="100%">
	<tr>
		<th align="left">
		<?php echo Flux::message('SITE_NAME_LABEL'); ?>						
		</th>
		<td>
			<input type="text" name="site_name" id="id_site_name" value="<?php echo $params->get('site_name'); ?>" placeholder="Nome do Site" required="required" />
		</td>
	</tr>
	<tr>
		<th align="left">
		<?php echo Flux::message('ADDRESS_LABEL'); ?>						
		</th>
		<td>
			<input type="text" name="site_address" id="id_site_address"  value="<?php echo $params->get('site_address'); ?>" placeholder="Link de Voto" required="required" />
		</td>
	</tr>
	<tr>
		<th align="left">
		<?php echo Flux::message('BANNER_LABEL'); ?>		
		</th>
		<td>
			<input type="file" name="banner_upload" id="id_banner_upload" value="<?php echo $params->get('banner_upload'); ?>" />
			<input type="checkbox" name="cbox_banner_url" id="id_cbox_banner_url" <?php if($params->get('cbox_banner_url')) echo "CHECKED"; ?>/><i>URL Banner:</i>
			<input type="text" name="banner_url" id="id_banner_url" value="<?php echo $params->get('banner_url'); ?>" placeholder="Link do Banner" <?php if($params->get('cbox_banner_url')) echo "ENABLED"; else echo "DISABLED"; ?>/>
			<br/>
			<i style="color:red">Tipos de formatos permitidos para upload de arquivos: <?php echo $file_types; ?></i>			
		</td>
	</tr>
	<tr>
		<th align="left">
		<?php echo Flux::message('BLOCK_TIME_LABEL'); ?>				
		</th>
		<td>
			<select name="blocking_hours" id="id_blocking_hours">
				<?php for($i = 1; $i<=24; $i++){ ?>
				<option value="<?php echo $i; ?>" <?php if($params->get('blocking_hours')==$i){ echo "SELECTED"; } ?>><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>hr(s).</i>
			<select name="blocking_minutes" id="id_blocking_minutes">
				<?php for($i = 0; $i<=59; $i++){ ?>
				<option value="<?php echo $i; ?>" <?php if($params->get('blocking_minutes')==$i){ echo "SELECTED"; } ?>><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>min(s).</i>
		</td>
	</tr>
	<tr>
		<th align="left">
		<?php echo Flux::message('POINTS_LABEL'); ?>						
		</th>
		<td>
			<input type="text" name="points" id="id_points"  value="<?php echo $params->get('points'); ?>" placeholder="Pontos" required="required" />
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<input type="reset" value="Limpar"/>
			<input type="submit" name="Add" id="Add" value="Enviar"/>
		</td>
	</tr>
</table>
</form>
<script type="text/javascript" language="javascript">
	$('#id_cbox_banner_url').change(function(){
		var checked = $(this).attr('CHECKED');
			$('#id_banner_url').attr('DISABLED',!checked);
			$('#id_banner_upload').attr('DISABLED',!!checked);			
	});
</script>
