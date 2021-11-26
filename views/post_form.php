<?php include 'header.php' ?>


<div class="row justify-content-md-center">
	<div class="col-md-6">
		<div class="card mt-4">
			<div class="card-body">

				<?php if (isset($error_msg)): ?>
					<div class="alert alert-danger">
						<?php echo $error_msg ?>
					</div>
				<?php endif ?>
				
				<form method="POST">
					<h1>Submit Post</h1>
					<div class="form-group">
						<label>Title</label>
						<input value="<?php @$_POST['title'] ?>" type="text" name="title" class="form-control" placeholder="Title">
					</div>
					<div class="form-group">
						<label>Post</label>
						<textarea value="<?php @$_POST['post'] ?>" name="post" placeholder="Submit your post" class="form-control"></textarea>
					</div>

					<input type="submit" value="Submit" class="btn btn-primary mt-2">
					
				</form>

			</div>
		</div>
	</div>
</div>


<?php include 'footer.php' ?>