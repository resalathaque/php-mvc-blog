<?php



function insert_new_user($name, $email, $password) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
	return $stmt->execute([':name' => $name, ':email' => $email, ':password' => $password]);
}

function get_user_by_email_password($email, $password) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
	$stmt->execute([':email' => $email, ':password' => $password]);

	return $stmt->fetch();
}

function get_user_by_id($user_id) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
	$stmt->execute([':id' => $user_id]);

	return $stmt->fetch();
}

function update_user_password($id, $new_password) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('UPDATE users SET password = :password WHERE id = :id');
	return $stmt->execute([':password' => $new_password, ':id' => $id]);
}

function update_user_name($id, $new_name) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('UPDATE users SET name = :name WHERE id = :id');
	return $stmt->execute([':name' => $new_name, ':id' => $id]);
}


?>