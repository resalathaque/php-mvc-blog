<?php



function insert_new_post($user_id, $title, $post) {

	$pdo = dbconnect();
	$stmt = $pdo->prepare('INSERT INTO posts (user_id, title, post) VALUES(:user_id, :title, :post)');
	return $stmt->execute([':user_id' => $user_id, ':title' => $title, ':post' => $post]);
}


function all_post() {
	$pdo = dbconnect();
	$q = $pdo->query('SELECT * FROM posts');
	return $q->fetchAll();
}

function get_post_by_id($id) {
	$pdo = dbconnect();

	$stmt = $pdo->prepare('SELECT * FROM posts WHERE id =  :id');
	$stmt->execute([':id' => $id]);

	return $stmt->fetch();


}



?>