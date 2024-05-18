<?php
require_once("admin/includes/config.php");
require_once("admin/includes/functions.php");
require_once("admin/includes/translate.php");
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
    <div class="content-fluid" style="height:100vh">
		<div class="row m-0" style="height:100vh">
			<div class="col-12">
				<div class="row" style="height:100vh">
					<div class="col-md-3 d-flex p-2">
							<?php require("template/leftSide.php");?>
					</div>
					<div class="col-md-9 d-flex p-2" id="rightSide">
							<?php require("views/bladeHome.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="fullscreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-full" role="document">
			<div class="modal-content">
				<div class="modal-body" style="background-color:black;">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: white;">&times;</span>
					</button>
					<div class="sides">
						<div class="row">
							<div class="col-12 pt-3 pb-3 text-center" style="font-size:50px;font-weight:600">Crane<span class="craneDot">.</span></div>
							<div class="col-3"></div>
							<div class="col-9">
								<ul>
									<li id="home"><?php echo direction("Home","الرئيسية") ?></li>
									<li id="how"><?php echo direction("How it works","كيف نعمل") ?></li>
									<li id="services"><?php echo direction("Services","خدامتنا") ?></li>
									<li id="contact"><?php echo direction("Contact","تواصل معنا") ?></li>
									<li id="privacy"><?php echo direction("Privacy & Policy","سياسة الخصوصية") ?></li>
								</ul>
							</div>
							<div class="col-12 text-center"><label class='joinBtn p-2' id="join" ><?php echo direction("Join Crane","إلتحق بكرين") ?><label></div>
							<div class="col-12 text-center p-4">
								<div class="row m-0">
									<div class="col-6">
										<div class="lang" id="english"><a href="?Lang=EN" style="text-decoration: none;color: white;">English</a></div>
									</div>
									<div class="col-6">
										<div class="lang" id="arabic"><a href="?Lang=AR" style="text-decoration: none;color: white;">العربية</a></div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center p-4">
								<div class="row m-0">
									<div class="col-4">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class='socialMediaIcon'><path d="M496.9 366.6c-3.4-9.2-9.8-14.1-17.1-18.2-1.4-.8-2.6-1.5-3.7-1.9-2.2-1.1-4.4-2.2-6.6-3.4-22.8-12.1-40.6-27.3-53-45.4a102.9 102.9 0 0 1 -9.1-16.1c-1.1-3-1-4.7-.2-6.3a10.2 10.2 0 0 1 2.9-3c3.9-2.6 8-5.2 10.7-7 4.9-3.2 8.8-5.7 11.2-7.4 9.4-6.5 15.9-13.5 20-21.3a42.4 42.4 0 0 0 2.1-35.2c-6.2-16.3-21.6-26.4-40.3-26.4a55.5 55.5 0 0 0 -11.7 1.2c-1 .2-2.1 .5-3.1 .7 .2-11.2-.1-22.9-1.1-34.5-3.5-40.8-17.8-62.1-32.7-79.2A130.2 130.2 0 0 0 332.1 36.4C309.5 23.5 283.9 17 256 17S202.6 23.5 180 36.4a129.7 129.7 0 0 0 -33.3 26.8c-14.9 17-29.2 38.4-32.7 79.2-1 11.6-1.2 23.4-1.1 34.5-1-.3-2-.5-3.1-.7a55.5 55.5 0 0 0 -11.7-1.2c-18.7 0-34.1 10.1-40.3 26.4a42.4 42.4 0 0 0 2 35.2c4.1 7.8 10.7 14.7 20 21.3 2.5 1.7 6.4 4.2 11.2 7.4 2.6 1.7 6.5 4.2 10.3 6.7a11.1 11.1 0 0 1 3.3 3.3c.8 1.6 .8 3.4-.4 6.6a102 102 0 0 1 -8.9 15.8c-12.1 17.7-29.4 32.6-51.4 44.6C32.4 348.6 20.2 352.8 15.1 366.7c-3.9 10.5-1.3 22.5 8.5 32.6a49.1 49.1 0 0 0 12.4 9.4 134.3 134.3 0 0 0 30.3 12.1 20 20 0 0 1 6.1 2.7c3.6 3.1 3.1 7.9 7.8 14.8a34.5 34.5 0 0 0 9 9.1c10 6.9 21.3 7.4 33.2 7.8 10.8 .4 23 .9 36.9 5.5 5.8 1.9 11.8 5.6 18.7 9.9C194.8 481 217.7 495 256 495s61.3-14.1 78.1-24.4c6.9-4.2 12.9-7.9 18.5-9.8 13.9-4.6 26.2-5.1 36.9-5.5 11.9-.5 23.2-.9 33.2-7.8a34.6 34.6 0 0 0 10.2-11.2c3.4-5.8 3.3-9.9 6.6-12.8a19 19 0 0 1 5.8-2.6A134.9 134.9 0 0 0 476 408.7a48.3 48.3 0 0 0 13-10.2l.1-.1C498.4 388.5 500.7 376.9 496.9 366.6zm-34 18.3c-20.7 11.5-34.5 10.2-45.3 17.1-9.1 5.9-3.7 18.5-10.3 23.1-8.1 5.6-32.2-.4-63.2 9.9-25.6 8.5-42 32.8-88 32.8s-62-24.3-88.1-32.9c-31-10.3-55.1-4.2-63.2-9.9-6.6-4.6-1.2-17.2-10.3-23.1-10.7-6.9-24.5-5.7-45.3-17.1-13.2-7.3-5.7-11.8-1.3-13.9 75.1-36.4 87.1-92.6 87.7-96.7 .6-5 1.4-9-4.2-14.1-5.4-5-29.2-19.7-35.8-24.3-10.9-7.6-15.7-15.3-12.2-24.6 2.5-6.5 8.5-8.9 14.9-8.9a27.6 27.6 0 0 1 6 .7c12 2.6 23.7 8.6 30.4 10.2a10.7 10.7 0 0 0 2.5 .3c3.6 0 4.9-1.8 4.6-5.9-.8-13.1-2.6-38.7-.6-62.6 2.8-32.9 13.4-49.2 26-63.6 6.1-6.9 34.5-37 88.9-37s82.9 29.9 88.9 36.8c12.6 14.4 23.2 30.7 26 63.6 2.1 23.9 .3 49.5-.6 62.6-.3 4.3 1 5.9 4.6 5.9a10.6 10.6 0 0 0 2.5-.3c6.7-1.6 18.4-7.6 30.4-10.2a27.6 27.6 0 0 1 6-.7c6.4 0 12.4 2.5 14.9 8.9 3.5 9.4-1.2 17-12.2 24.6-6.6 4.6-30.4 19.3-35.8 24.3-5.6 5.1-4.8 9.1-4.2 14.1 .5 4.2 12.5 60.4 87.7 96.7C468.6 373 476.1 377.5 462.9 384.9z"/></svg>
									</div>
									<div class="col-4">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class='socialMediaIcon'><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
									</div>
									<div class="col-4">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class='socialMediaIcon'><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
									</div>
								</div>
							</div>
							<div class="col-12 text-center pb-5">
								<a href="https://createkuwait.com" target="_blank" class="btn btn-outline-secondary" style="width:90%">Made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:red;width:20px;height:20px"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg> by Create.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script>
		$(function() {
			$(document).ready(function() {
				$("li[id=home]").addClass("liActive");
				$.get('rightSide?v=Home', function(data) {
					$('#rightSide').html('').fadeOut(function() {
						$('#rightSide').html(data).fadeIn();
					});
				});
				$(document).on('click', '#how', function() {
					$("li").removeClass("liActive");
					$("li[id=how]").addClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=How', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
				$(document).on('click', '#home', function() {
					$("li").removeClass("liActive");
					$("li[id=home]").addClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=Home', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
				$(document).on('click', '#services', function() {
					$("li").removeClass("liActive");
					$("li[id=services]").addClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=Services', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
				$(document).on('click', '#contact', function() {
					$("li").removeClass("liActive");
					$("li[id=contact]").addClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=Contact', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
				$(document).on('click', '#privacy', function() {
					$("li").removeClass("liActive");
					$("li[id=privacy]").addClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=Privacy', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
				$(document).on('click', '#join', function() {
					$("li").removeClass("liActive");
					$('#fullscreenModal').modal('hide');
					$.get('rightSide?v=Join', function(data) {
						$('#rightSide').html('').fadeOut(function() {
							$('#rightSide').html(data).fadeIn();
						});
					});
				});
			});
		});
	</script>
  </body>
</html>