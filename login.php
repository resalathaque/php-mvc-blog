<?php

session_start();

include 'model/db.php';
include 'model/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	try {

		if (empty($_POST['email'])) throw new Exception("Please submit your email");
		if (empty($_POST['password'])) throw new Exception("Please submit your password");
		

		$user = get_user_by_email_password($_POST['email'], $_POST['password']);
		if (!$user) throw new Exception('Email or password does not matched!');

		$_SESSION['user'] = $user;

		header('Location: /');

	} catch (Exception $e) {
		$error_msg = $e->getMessage();
	}
}

include 'views/login_form.php';

?>