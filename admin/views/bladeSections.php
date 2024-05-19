<?php
if( $settings = selectDB("sections","`id` = '1'")){

}
?>
<!-- Title -->
<div class="row heading-bg">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-dark"><?php echo direction("Website Sections", "أقسام الموقع") ?></h5>
</div>
</div>
<!-- /Title -->

<!-- Row -->
<form method="post" action="" enctype="multipart/form-data">
<div class="row w-100">
<div class="col-md-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
	<h6 class="panel-title txt-dark"><?php echo direction("Sections", "الأقسام") ?></h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">

<?php
$pages = ["Home","How","Services","Contact","Join","About","Policy"];
$lang = ["English","Arabic"];
$dbCol = ["en","ar"];
for( $i = 0; $i < sizeof($pages); $i++ ){
	for( $y = 0; $y < 2; $y++ ){
		$dbPlusLang = $dbCol[$y].$pages[$i];
		echo "<div class='col-md-6'>
				<div class='panel panel-default card-view'>
					<div class='panel-heading'>
						<div class='pull-left'>
							<h6 class='panel-title txt-dark'>{$lang[$y]} {$pages[$i]}</h6>
						</div>
						<div class='clearfix'></div>
					</div>
					<div class='panel-wrapper collapse in'>
						<div class='panel-body'>
							<div class='text'>
								<textarea name='{$dbPlusLang}' class='tinymce'>{$settings[0]["$dbPlusLang"]}</textarea>
							</div>
						</div>
					</div>
				</div>
			</div>";
	}
}
?>

</div>
</div>
</div>
</div>

<div class="col-md-12">
	<div class="panel panel-default card-view">
		<div class="panel-heading">
			<div class="pull-left">
				<h6 class="panel-title txt-dark">When Done Submit</h6>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-wrapper collapse in">
			<div class="panel-body">
				<div class="text">
					<input type="hidden" name="update" value="1">
					<input class="form-control btn btn-primary txt-light" type="submit" value="Update">
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</form>