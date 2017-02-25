<?php

///////////////////////////////////
//      Designed By UnderWorld-CO     //
//      midowesa@yahoo.com      //
//          01278734949         //
///////////////////////////////////

$hostdb="localhost";   
$dbname="cobrasil";
$dbpainel="painel";
$dbuser="root";  
$dbpass="kBMjARB4fb94K8kaabY5Bv8rktQmH8GqGUPaEjNJqDF3rymEg3tX6qBHdPPnzSvC";
$servername="CoBrasil";
$serverip="cobrasil.ddns.net";
$site="cobrasil.net";
$port="5816";


//Função de classes
  function prof ($val) { //params> int_proffesion   returns>string_proffesion  //made for prof and old_prof
    if ($val>9 && $val<16) return '<img src="../img/fundos/trojan.png" title="Trojan" />';
    if ($val>19 && $val<26) return '<img src="../img/fundos/warrior.png" title="Warrior" />';
    if ($val>39 && $val<46) return '<img src="../img/fundos/archer.png" title="Archer" />';
    if ($val>99 && $val<102) return 'Taoist';
    if ($val>130 && $val<136) return '<img src="../img/fundos/watertao.png" title="WaterTaoist" />';
   	if ($val>140 && $val<146) return '<img src="../img/fundos/firetao.png" title="FireTaoist" />';
   	if ($val>49 && $val<56) return '<img src="../img/fundos/ninja.png" title="Ninja" />'; 
    if ($val>59 && $val<66) return '<img src="../img/fundos/monk.png" title="Monk/Saint" />'; 
    if ($val>0) return 'ERROR';
  	return (Empty($val) ? '' : 'Error'); //  when old prof is not set print nothing in table
    }

//Função de status
  function status ($val) { 
    if ($val == 0)  return '<font color="#900202">Offline</font>';
    if ($val == 1)  return '<font color="#47c701">Online</font>';
	return (Empty($val) ? '' : 'Error');
    }

//Função de nobresa
  function nobles ($val) {  //params> int_nobleNr. int_donated   returns>string_nobleRank
    if ($val<6) return '<img src="../img/fundos/king.png" title="King/Queen" />';
    if ($val<16) return '<img src="../img/fundos/prince.png" title="Prince/Princess" />';
    if ($val<51)  return '<img src="../img/fundos/duke.png" title="Duke" />';
    
    if ($cash>200000000)  return 'Earl';
    if ($cash>100000000)  return 'Baron';
    if ($cash>30000000)   return 'Knight';
    
    return 'Error';  //I know ... lets say ... STANDART dot
    }
//Função de transação
 function transacao ($val) {	
	if ($val == Aprovado) return 'Earl';
	
	return 'Error';  //I know ... lets say ... STANDART dot
 }
?>