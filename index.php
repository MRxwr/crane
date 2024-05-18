<?php require_once("template/header.php") ?>

<div class="content-fluid" style="height:100vh">
	<div class="row m-0" style="height:100vh">
		<div class="col-12">
			<div class="row" style="height:100vh">
				<div class="col-md-3 d-flex p-2"><?php require("template/leftSide.php");?></div>
				<div class="col-md-9 d-flex p-2" id="rightSide"><?php require("rightSide.php")?></div>
			</div>
		</div>
	</div>
</div>

<?php require_once("template/modals.php") ?>
<?php require_once("template/footer.php") ?>