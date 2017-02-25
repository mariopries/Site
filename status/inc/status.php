<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	function GetServerStatus($site, $port){

		$status = array("<font color='#66FF00'><b>Online</b></font>","<font color='C10000'><b>Offline</b></font>");
		@$fp = fsockopen($site, $port, $errno, $errstr, 1);
		
		if ($fp){
			return $status[0];
		}else{
			return $status[1];
		}

	}
?>
</body>
</html>


