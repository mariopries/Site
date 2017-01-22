<?php if (!defined('FLUX_ROOT')) exit; ?>
<div>
<?php
$title = Flux::message('ServerStatusTitle');
$cache = FLUX_DATA_DIR.'/tmp/ServerStatus.cache';

if (file_exists($cache) && (time() - filemtime($cache)) < (Flux::config('ServerStatusCache') * 60)) {
	$serverStatus = unserialize(file_get_contents($cache));
}
else {
	$serverStatus = array();
	foreach (Flux::$loginAthenaGroupRegistry as $groupName => $loginAthenaGroup) {
		if (!array_key_exists($groupName, $serverStatus)) {
			$serverStatus[$groupName] = array();
		}

		$loginServerUp = $loginAthenaGroup->loginServer->isUp();

		foreach ($loginAthenaGroup->athenaServers as $athenaServer) {
			$serverName = $athenaServer->serverName;

			$sql = "SELECT COUNT(char_id) AS players_online FROM {$athenaServer->charMapDatabase}.char WHERE online > 0";
			$sth = $loginAthenaGroup->connection->getStatement($sql);
			$sth->execute();
			$res = $sth->fetch();

			$serverStatus[$groupName][$serverName] = array(
				'loginServerUp' => $loginServerUp,
				 'charServerUp' => $athenaServer->charServer->isUp(),
				  'mapServerUp' => $athenaServer->mapServer->isUp(),
				'playersOnline' => intval($res ? $res->players_online : 0)
			);
		}
	}
	
	$fp = fopen($cache, 'w');
	if (is_resource($fp)) {
		fwrite($fp, serialize($serverStatus));
		fclose($fp);
	}
}

$online = "<img src='".$this->themePath('img/llg/up.png')."' />";
$offline = "<img src='".$this->themePath('img/llg/down.png')."' />"
?>
<?php foreach ($serverStatus as $privServerName => $gameServers): ?>
<?php foreach ($gameServers as $serverName => $gameServer): ?>

<style type="text/css">
#cstatus{
	padding-top: 48px;
	padding-left: 67px;	
}

#cplayers{
	color: #333;
	text-align: center;
	font-size: 20px;	
	margin-top: -45px;
}

#time{
	text-align: right;
	margin-top: -13px;
	padding-right: 25px;
}
</style>

<table id="cstatus" cellpadding="0" cellspacing="0">
	<tr>
        <td width="75"><?php if ($gameServer['loginServerUp']) { echo $online; } else { echo $offline; } ?></td>
        <td width="75"><?php if ($gameServer['charServerUp']) { echo $online; } else { echo $offline; } ?></td>
		<td id="status_con"><?php if ($gameServer['mapServerUp']) { echo $online; } else { echo $offline; }  ?></td>
        
	</tr>
	
</table>
<br />

<div id="cplayers"><B><?php echo $gameServer['playersOnline'] ?></b></div>

<div id="time">
<iframe src="http://free.timeanddate.com/clock/i3qrbgoc/n145/tlph/tct/pct/th1" frameborder="0" width="58" height="18" allowTransparency="true"></iframe>
</div>




	<?php endforeach ?>
<?php endforeach ?>


</div>