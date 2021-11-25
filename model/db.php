<?php

include 'config/db.php';

function dbconnect() {
	global $db;

	$pdo = new PDO("mysql:host={$db['host']};dbname={$db['dbname']}", $db['user'], $db['pass']);

	return $pdo;
}


function insert_new_user($name, $email, $password) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
	return $stmt->execute([':name' => $name, ':email' => $email, ':password' => $password]);
}

function check_user($email, $password) {
	$pdo = dbconnect();
	$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
	
	$q = $stmt->execute([':email' => $email, ':password' => $password]);

	return $q->fetch();
}


?>