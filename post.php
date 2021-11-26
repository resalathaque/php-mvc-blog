<?php

session_start();

include 'model/db.php';
include 'model/post.php';


if (!isset($_SESSION['user'])) {
	header("Location: /login.php");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	try {
		
		if (empty($_POST['title'])) throw new Exception('Please submit a vaild title');
		if (empty($_POST['post'])) throw new Exception('Please submit a vaild post');


		insert_new_post($_SESSION['user']['id'], $_POST['title'], $_POST['post']);

	} catch (Exception $e) {
		$error_msg = $e->getMessage();
	}
}

include 'views/post_form.php';

?>