<?php include 'header.php' ?>


<div class="container">

	<h3><?php echo $post['title'] ?></h3>
	<div><?php echo $post['post'] ?></div>

	<?php $user = get_user_by_id($post['user_id']); ?>

	<p>Submited by <a href="/profile.php?id=<?php echo $user['id'] ?>">
		<?php echo $user['name'] ?>
		</a></p>
		
	<a href="/">Back Home</a>
</div>

<br>


<?php include 'footer.php' ?>