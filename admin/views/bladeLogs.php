<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
	<div class="pull-left"><h6 class="panel-title txt-dark"><?php echo direction("List of Logs","قائمة السجلات") ?></h6></div>
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
		<th><?php echo direction("Username","اسم المستخدم") ?></th>
		<th><?php echo direction("Module","الوحدة") ?></th>
		<th><?php echo direction("Action","الإجراء") ?></th>
		<th><?php echo direction("Query","الأستعلام") ?></th>
		</tr>
		</thead>
		
		<tbody>
		<?php 
		if( $logs = selectDB("logs","`status` = '0' AND `hidden` = '0' ORDER BY `date` DESC") ){
			for( $i = 0; $i < sizeof($logs); $i++ ){
				?>
				<tr>
				<td><?php echo $vouchers[$i]["date"] ?></td>
				<td><?php echo $vouchers[$i]["username"] ?></td>
				<td><?php echo $vouchers[$i]["module"] ?></td>
				<td><?php echo $vouchers[$i]["action"] ?></td>
				<td><?php echo $vouchers[$i]["sqlQuery"] ?></td>
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