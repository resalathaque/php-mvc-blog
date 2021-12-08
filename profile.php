<?php
session_start();

include 'model/db.php';
include 'model/user.php';

if (!empty($_GET['id'])) {
	$user = get_user_by_id($_GET['id']);

	if (!$user) {

		header('HTTP/1.0 404 Not Found');
		include 'views/404.html';

	} else {
		include 'views/user_detail.php';
	}	
} else {
	header('HTTP/1.0 404 Not Found');
	include 'views/404.html';
}



?>