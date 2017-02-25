<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>CoAloud Site Oficial</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="'-'"/>
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <link rel="SHORTCUT ICON" href="../../favicon.ico"/>
<style>
body{ 
	margin:0 auto;
	color: #FFF;
	text-align:center;
	font-size:14px; 
	font-family: Georgia, "Times New Roman", Times, serif;
	background:none;
	}
a{
	color: #666;
	text-decoration:none;
	margin:0 0px;
}
a:hover{ 
	color:#F60;
	text-decoration:underline;
	}
</style>
<body>
<div style="margin-left:12px;" align="left">
<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
require_once ('../config/config.php');
$conn = mysql_connect("$hostdb", "$dbuser", "$dbpass");
$db = mysql_select_db("$dbpainel");

	$moahmed = mysql_query('SELECT count(userid) FROM login;');
    $moahmed1 = mysql_fetch_array($moahmed);
	
	if ($moahmed1 >= 1) {
		echo '<center><table border="0" width="175" align="left"><tr><td align="left" width="110">Game Server:</td><td align="justify">';
		echo('<font style="color: #B"><font style="color: lime"><b>Online</b></font><br />');
		echo '</td></tr>';
		echo '</table></center><br>';
		
    }    
	else {
		echo '<center><table border="0" width="175" align="left"><tr><td align="left" width="110">Game Server:</td><td align="justify">';
		echo('<font style="color: #B"><font style="color: red"><b>Offline</b></font><br />');
		echo '</td></tr>';
		echo '</table></center><br>';
		
    }
	echo '<br /><center><table border="0" width="175" align="left"><tr><td align="left"><font>Total Accounts:</td><td align="center"><a>'.$moahmed1[0].'</a></td></tr>';
	mysql_close($conn);
	
$conn = mysql_connect("$hostdb", "$dbuser", "$dbpass");
$db = mysql_select_db("$dbname");
	
	$moahmed = mysql_query('SELECT count(Name) FROM characters;');
    $moahmed1 = mysql_fetch_array($moahmed);    
echo '<tr><td align="left" width="110">Total Players:</td><td align="center"><a>'.$moahmed1[0].'</a></td></tr>';
    $moahmed = mysql_query('SELECT count(Online) FROM characters WHERE Online = 1;');
    $moahmed1 = mysql_fetch_array($moahmed);    
echo '<tr><td align="left">Total Online:</td><td align="center"><a>'.$moahmed1[0].'</a></td></tr></table></center>';
mysql_close($conn);
	
?>

</div>
</body>
</html>