<?php

session_start();

include 'model/db.php';
include 'model/user.php';


if (!isset($_SESSION['user'])) {
	header("Location: /login.php");
}

$user = get_user_by_id($_SESSION['user']['id']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	try {
		if (!empty($_POST['password'])) {

			if (empty($_POST['password'])) throw new Exception("Please submit your current password");
			if (empty($_POST['new_password'])) throw new Exception("Please submit your new password");
			if (empty($_POST['new_password_confirm'])) throw new Exception("Please confirm your new password");

			if ($_POST['new_password'] != $_POST['new_password_confirm']) throw new Exception('Confirm password does not matched!');


			if (!get_user_by_email_password($_SESSION['user']['email'], $_POST['password']))
				throw new Exception('Current password does not match');


			update_user_password($_SESSION['user']['id'], $_POST['new_password']);
		}

		if (empty($_POST['name'])) throw new Exception('Name must not be empty!');

		update_user_name($user['id'], $_POST['name']);

		header('Location: /profile.php?id='. $_SESSION['user']['id']);


	} catch (Exception $e) {
		$error_msg = $e->getMessage();
	}

}

include 'views/settings_form.php';

?>
