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

	<Style>
		.sides{
			/*height:100vh;*/
			border-radius: 20px;
			background-color: #000000;
			color: white;
			z-index:1;
		}
		.craneDot{
			font-size:50px;
			color: #038dff;
		}
		.craneDotBig{
			font-size:50px;
			color: #038dff;
		}
		.craneBg{
			font-size:200px;
			color: #ffffff;
		}
		ul {
			list-style: none;
			padding: 0;
		}
		li {
			padding: 10px;
			font-size: 20px;

		}
		li:hover,li.selected {
			text-decoration: underline;
			color: #038dff; /* Change the color to blue */
			cursor: pointer;
		}
		.joinBtn{
			background-color: #038dff;
			color: #FFFFFF;
			font-size: 25px;
			font-weight: 500;
			width: 100%;
		}
		.lang{
			border: 1px white solid;
			font-size: 18px;
			padding: 10px
		}
		.socialMediaIcon{
			fill: white;
    		height: 30px;
		}
		.rightContentBg {
			position: absolute;
			bottom: 17px;
			left: 13px;
			width: 95%;
			height: 45%;
			background-image: url(img/bg_bg.png);
			background-size: cover;
			background-position: center;
			z-index: 0;
		}
		.rightContentDivs {
			padding: 20px; /* Add padding to keep text away from edges */
			z-index: 1; /* Bring the text content to the front */
		}
	</style>
  </head>
  <body>
    <div class="content-fluid" style="height:100vh">
		<div class="row m-0" style="height:100vh">
			<div class="col-12">
				<div class="row" style="height:100vh">
					<div class="col-md-3 d-flex p-2">
							<?php require("template/leftSide.php");?>
					</div>
					<div class="col-md-9 d-flex p-2">
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
  </body>
</html>