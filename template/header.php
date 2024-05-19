<?php
require_once("admin/includes/config.php");
require_once("admin/includes/functions.php");
require_once("admin/includes/translate.php");
$settings = selectDB("settings","`id` = '1'");
$socialMedia = selectDB("social_media","`id` = '1'");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/245c9398b0.js"></script>
    <title>Crane.</title>
	<style><?php echo require("css/style.css") ?></style>
  </head>
  <body>