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

?>