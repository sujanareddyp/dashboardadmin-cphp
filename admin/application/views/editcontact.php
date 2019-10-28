
			

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h4 class="alert alert-success"><?php echo $this->session->flashdata("msg"); ?></h4>
		<form action="updatecontact.php" method="Post" class="form-horizontal">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="fname" class="form-control" placeholder="Enter Name" value="<?php echo $econt->name; ?>"/>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $econt->email; ?>"/>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $econt->mobile; ?>"/>
			</div>
			<div class="form-group">
				<label>id</label>
				<input type="text" name="cid" class="form-control" value="<?php echo $econt->id; ?>" readonly/>
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="msg" class="form-control" ><?php echo $econt->message; ?></textarea>
			</div>
			<div class="form-group">
				
				<button type="submit" class="btn btn-primary btn-block">Update</button>
			</div>
		</form>
	
	
	</div>
	<div class="col-sm-3"></div>
</div>