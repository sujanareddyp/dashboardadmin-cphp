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
						echo"<td><a href='deletecontact.php?id=$row->id'><span class='glyphicon glyphicon-trash'></span></a></td>";
						echo"<td><a href='editcontact.php?id=$row->id'><span class='glyphicon glyphicon-pencil'></span></a></td>";
					echo"</tr>";
				}
			?>
			
			</tbody>
		</table>
	</div>
	<div class="col-sm-1">
	</div>
</div>