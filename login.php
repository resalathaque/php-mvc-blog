<?php

include 'model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	try {

		if (empty($_POST['email'])) throw new Exception("Please submit your email");
		if (empty($_POST['password'])) throw new Exception("Please submit your password");
		


	} catch (Exception $e) {
		$error_msg = $e->getMessage();
	}
}

include 'views/login_form.php';

?>