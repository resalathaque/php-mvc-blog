<?php
session_start();

include 'model/db.php';
include 'model/user.php';
include 'model/post.php';

if (!empty($_GET['id'])) {
	$post = get_post_by_id($_GET['id']);

	if (!$post) {

		header('HTTP/1.0 404 Not Found');
		include 'views/404.html';

	} else {
		include 'views/post_detail.php';
	}	
} else {
	header('HTTP/1.0 404 Not Found');
	include 'views/404.html';
}



?>