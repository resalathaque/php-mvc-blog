<?php include 'header.php' ?>


<div class="container">
	
	<?php foreach($posts as $post): ?>

		<h3><a href="/post.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h3>
		<p>Submited by <?php echo get_user_by_id($post['user_id'])['name'] ?></p>

	<?php endforeach ?>

</div>


<?php include 'footer.php' ?>