<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
		<h3 class="text-center"><?php echo $this->session->flashdata("msg"); ?></h3>
		<table class="table table-bordered">
			<thead>
				<tr class="bg-primary">
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Message</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach($cont as $row)
				{
					echo"<tr>";
						echo"<td>$row->name</td>";
						echo"<td>$row->email</td>";
						echo"<td>$row->mobile</td>";
						echo"<td>$row->message</td>";
						echo"<td><a href='#' onclick='deletecontact($row->id)'><span class='glyphicon glyphicon-trash'></span></a></td>";
						echo"<td><a href='#' onclick='editcontact($row->id)'  data-toggle='modal' data-target='#mymodal'><span class='glyphicon glyphicon-pencil'></span></a></td>";
					echo"</tr>";
				}
			?>
			
			</tbody>
		</table>
	</div>
	<div class="col-sm-1">
	</div>
</div>
<div class="modal fade" id="mymodal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Please Update your contact details</h4>
				<a href="#" data-dismiss="modal" class="close">&times;</a>
			</div>
			<div class="modal-body" >
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8" id="result"></div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>