<?php
session_start();

include 'model/db.php';
include 'model/user.php';
include 'model/post.php';

$post = get_post_by_id($_GET['id']);


include 'views/post_detail.php';

?>