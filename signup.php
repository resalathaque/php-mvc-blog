<?php

include 'model/db.php';
include 'model/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	try {
		if (empty($_POST['name'])) throw new Exception("Please submit your name");
		if (empty($_POST['email'])) throw new Exception("Please submit your email");
		if (empty($_POST['password'])) throw new Exception("Please submit your password");
		if (empty($_POST['password_confirm'])) throw new Exception("Please confirm your password");
		

		if ($_POST['password'] != $_POST['password_confirm']) throw new Exception('Confirm password does not matched!');

		insert_new_user($_POST['name'], $_POST['email'], $_POST['password']);

	} catch (Exception $e) {
		$error_msg = $e->getMessage();
	}
	
}

include 'views/signup_form.php';

?>