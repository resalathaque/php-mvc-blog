<?php include 'header.php' ?>


<div class="container">
	
	<?php foreach($posts as $post): ?>

		<h3><?php echo $post['title'] ?></h3>
		<div><?php echo $post['post'] ?></div>
		<p>Submited by <?php echo get_user_by_id($post['user_id'])['name'] ?></p>

	<?php endforeach ?>

</div>


<?php include 'footer.php' ?>