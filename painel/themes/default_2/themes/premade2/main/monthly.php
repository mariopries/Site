<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php
//SQL Connection
function Connection()
{
$db_host="localhost"; //insert the IP Address of your website
$db_name=""; //insert your database name insid the 2 double quotes
$username=""; //insert the username of your phpmyadmin (SQL username)
$password=""; //insert the password of your phpmyadmin (SQL password)
$con=mysql_connect($db_host,$username,$password);
mysql_select_db($db_name, $con);

if(!$con)
{
echo "Connection failed!"; 
}
}

Connection();

$sql = mysql_query("SELECT * FROM pvpladder ORDER BY kills DESC LIMIT 1");
$row = mysql_fetch_array($sql);


$sql1 = mysql_query("SELECT * FROM ownladder ORDER BY currentown DESC LIMIT 1");
$row1 = mysql_fetch_array($sql1);
?>

<div style="padding: 15px;">
	
<script>
$(document).ready(function(){
  $("#tabs").tabs();
  $("#imgpvp").attr('src',"<?php echo $this->themePath('img/llg/pvp_h.png')  ?>");
  
  $('#imgpvp').click(function(){
    $("#imgpvp").attr('src',"<?php echo $this->themePath('img/llg/pvp_h.png')  ?>");
	$("#imgwoe").attr('src',"<?php echo $this->themePath('img/llg/woe.png')  ?>");
  });
  
  $('#imgwoe').click(function(){
    $("#imgpvp").attr('src',"<?php echo $this->themePath('img/llg/pvp.png')  ?>");
	$("#imgwoe").attr('src',"<?php echo $this->themePath('img/llg/woe_h.png')  ?>");
  });
  
  

});

</script>
<div id="tabs">

<ul>
<li><a href="#ppvp"><img src="<?php echo $this->themePath('img/llg/pvp_h.png')  ?>" id="imgpvp"></a></li>
<li><a href="#pwoe"><img src="<?php echo $this->themePath('img/llg/woe.png')  ?>" id="imgwoe"></a></li>
</ul>

<center>

  <div id="ppvp">
     <img src="<?php echo $this->themePath('img/llg/pvp_char.png')  ?>"><br />
    	<div id="m_temp">
        	Name : <?php echo $row['name']; ?>
		</div>
        
        <div id="m_temp">
        	Kills/Death : <?php echo $row['kills']; ?> / <?php echo $row['deaths']; ?>
		</div>
  </div>
  
  
  <div id="pwoe">
    <img src="<?php echo $this->themePath('img/llg/woe_flag.png')  ?>"><br />
    	<div id="m_temp">
        	Name : <?php echo $row1['name']; ?>
		</div>
        
        <div id="m_temp">
        	Castles : <?php echo $row1['currentown']; ?>
		</div>
  </div>
  
</center>
  
  
  





</div>



</div>