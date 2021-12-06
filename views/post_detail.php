<?php include 'header.php' ?>


<div class="container">

	<h3><?php echo $post['title'] ?></h3>
	<div><?php echo $post['post'] ?></div>
	<p>Submited by <?php echo get_user_by_id($post['user_id'])['name'] ?></p>


	<a href="/">Back Home</a>
</div>

<br>


<?php include 'footer.php' ?>