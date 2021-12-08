<?php include 'header.php' ?>


<div class="row justify-content-md-center">
	<div class="col-md-8">
		<div class="card mt-4">
			<div class="card-body">
				<h1>Settings</h1>

				<?php if (isset($error_msg)): ?>
					<div class="alert alert-danger">
						<?php echo $error_msg ?>
					</div>
				<?php endif ?>


				<form method="post" class="mb-3">

					<div class="form-group">
						<label>Current Password</label>
						<input type="password" name="password" class="form-control" />
					</div>

					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="new_password" class="form-control" />
					</div>

					<div class="form-group">
						<label>Confirm New Password</label>
						<input type="password" name="new_password_confirm" class="form-control" />
					</div>

					<input type="submit" value="Update Settings" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php' ?>