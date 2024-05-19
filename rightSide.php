<?php 
// get viewed page from pages folder \\
if( isset($_GET["s"]) && searchFile("views","blade{$_GET["s"]}.php") ){
	require_once("views/".searchFile("views","blade{$_GET["s"]}.php"));
}else{
	require_once("views/bladeHome.php");
}
?>