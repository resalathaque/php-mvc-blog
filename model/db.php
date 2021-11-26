<?php

include 'config/db.php';

function dbconnect() {
	global $db;

	$pdo = new PDO("mysql:host={$db['host']};dbname={$db['dbname']}", $db['user'], $db['pass']);

	return $pdo;
}



?>