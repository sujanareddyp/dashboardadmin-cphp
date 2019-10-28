<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h4 class="alert alert-success"><?php echo $this->session->flashdata("msg"); ?></h4>
		<form action="saveblogs.php" method="Post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" />
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Upload Image</label>
				<input type="file" name="blogimage" />
			</div>
			<div class="form-group">
				
				<button type="submit" class="btn btn-primary btn-block">Add blog</button>
			</div>
		</form>
	
	
	</div>
	<div class="col-sm-3"></div>
</div>