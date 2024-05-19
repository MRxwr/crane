<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
	<div class="pull-left"><h6 class="panel-title txt-dark"><?php echo direction("List of Contacts","قائمة المراسلات") ?></h6></div>
	<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="table-wrap mt-40">
<div class="table-responsive">
	<table class="table display responsive product-overview mb-30" id="myTable">
		<thead>
		<tr>
		<th><?php echo direction("Date","التاريخ") ?></th>
		<th><?php echo direction("Name","الإسم") ?></th>
		<th><?php echo direction("Email","الإيميل") ?></th>
		<th><?php echo direction("Mobile","الهاتف") ?></th>
		<th><?php echo direction("Type","النوع") ?></th>
		<th><?php echo direction("Message","الرسالة") ?></th>
		<th class="text-nowrap"><?php echo direction("Actions","الخيارات") ?></th>
		</tr>
		</thead>
		
		<tbody>
		<?php 
		if( $contacts = selectDB("contact_us","`status` = '0' AND `hidden` != '2'") ){
			for( $i = 0; $i < sizeof($contacts); $i++ ){
				$counter = $i + 1;
				if ( $contacts[$i]["hidden"] == 1 ){
					$icon = "fa fa-eye success";
					$link = "?v={$_GET["v"]}&show={$contacts[$i]["id"]}";
					$hide = direction("Not seen","غير مقروءة");
				}else{
					$icon = "fa fa-eye-slash danger";
					$link = "?v={$_GET["v"]}&hide={$contacts[$i]["id"]}";
					$hide = direction("Seen","مقروءة");
				}
				
				if ( $service = selectDB("services","`id` = '{$contacts[$i]["serviceId"]}'") ){
					$type = direction($service[0]["enTitle"],$service[0]["arTitle"]);
				}else{
					$type = "Error";
				}
				
				?>
				<tr>
                    <td><?php echo substr($contacts[$i]["date"],0,10) ?></td>
                    <td><?php echo $contacts[$i]["name"] ?></td>
                    <td><?php echo $contacts[$i]["email"] ?></td>
                    <td><?php echo $contacts[$i]["phone"] ?></td>
                    <td><?php echo $type ?></td>
                    <td><?php echo $contacts[$i]["message"] ?></td>
                    
                    <td class="text-nowrap">
                        <a href="<?php echo $link ?>" class="btn btn-default" data-toggle="tooltip" data-original-title="<?php echo $hide ?>"> <i class="<?php echo $icon ?> text-inverse m-r-10"></i>
                        </a>
                        <a href="<?php echo "?v={$_GET["v"]}&delId=" . $contacts[$i]["id"] ?>" data-toggle="tooltip" data-original-title="<?php echo direction("Delete","حذف")  ?>" class="btn btn-danger"><i class="fa fa-close text-inverse"></i>
                        </a>			
                    </td>
				</tr>
				<?php
			}
		}
		?>
		</tbody>
		
	</table>
</div>
</div>
</div>
</div>
</div>
</div>

