<?php if (!defined('ALLOW_PAGSEGURO_CONFIG')) {
	die('No direct script access allowed');
}
if (!defined('FLUX_ROOT')) exit;
/*
 ************************************************************************
 PagSeguro Config File
 ************************************************************************
 */

if(!Flux::config('PagSeguroSandbox')){
	$environment = "production";
}else{
	$environment = "sandbox";
}
	 
$PagSeguroConfig = array();

$PagSeguroConfig['environment'] = Array();
$PagSeguroConfig['environment']['environment'] = $environment;

$PagSeguroConfig['credentials'] = Array();
$PagSeguroConfig['credentials']['email'] = "your@email.com";
$PagSeguroConfig['credentials']['token'] = "your_token_here";

$PagSeguroConfig['application'] = Array();
$PagSeguroConfig['application']['charset'] = "UTF-8"; // UTF-8, ISO-8859-1

$PagSeguroConfig['log'] = Array();
$PagSeguroConfig['log']['active'] = FALSE;
$PagSeguroConfig['log']['fileLocation'] = "";
?>