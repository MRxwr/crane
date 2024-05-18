<?php 
require_once("../../admin/includes/config.php");
require_once("../../admin/includes/functions.php");
require_once("../../admin/includes/translate.php");

// get viewed page from pages folder \\
if( isset($_GET["v"]) && searchFile("template/rightSide","blade{$_GET["v"]}.php") ){
	require_once("template/rightSide/".searchFile("template/rightSide","blade{$_GET["v"]}.php"));
}else{
	require_once("template/rightSide/bladeHome.php");
}
?>