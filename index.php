<?php
session_start();

include 'model/db.php';
include 'model/user.php';
include 'model/post.php';

$posts = all_post();

include 'views/post_list.php';

?>