<?php 
require_once("../admin/includes/config.php");
require_once("../admin/includes/functions.php");
require_once("../admin/includes/translate.php");

// get viewed page from pages folder \\
if( isset($_GET["v"]) && searchFile("views","blade{$_GET["v"]}.php") ){
	require_once(searchFile("views","blade{$_GET["v"]}.php"));
}else{
	require_once("bladeHome.php");
}
?>