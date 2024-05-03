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
    <div class="content-fluid" style="height:100vh">
		<div class="row m-0" style="height:100vh">
			<div class="col-12">
				<div class="row" style="height:100vh">
					<div class="col-md-3 d-flex p-2">
							<?php require("template/leftSide.php");?>
					</div>
					<div class="col-md-9 d-flex p-2" id="rightSide">
					<div id="result" style="display: none;">Loading...</div>
							<?php require("template/rightSideHome.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(function() {
			$('#how').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSideHow.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
			$('#home').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSideHome.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
			$('#services').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSideServices.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
			$('#contact').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSideContact.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
			$('#privacy').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSidePrivacy.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
			$('#join').on('click', function() {
				$('#rightSide').fadeOut(function() {
					$.get('template/rightSideJoin.php', function(data) {
						$('#rightSide').html(data).fadeIn();
					});
				});
			});
		});
	</script>
  </body>
</html>