<?php include 'header.php' ?>


<div class="row justify-content-md-center">
	<div class="col-md-4">
		<div class="card mt-4">
			<div class="card-body">
				<h1>Login</h1>

				<?php if (isset($error_msg)): ?>
					<div class="alert alert-danger">
						<?php echo $error_msg ?>
					</div>
				<?php endif ?>


				<form method="post" class="mb-3">
					<div class="form-group">
						<label>Email</label>
						<input value="<?php echo @$_POST['email'] ?>" type="email" placeholder="Email" name="email" class="form-control" />
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" />
					</div>

					<input type="submit" value="Login" class="btn btn-primary">
				</form>

				<p>Doesn't have an account? <a href="/signup.php">Signup</a></p>

			</div>
		</div>
	</div>
</div>


<?php include 'footer.php' ?>