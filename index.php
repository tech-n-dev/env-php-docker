<?php
$host = "postgres";
$db = "postgres";
$user = $db;
$password = $db;

try {
	$dsn = "pgsql:host=$host;port=5432;dbname=$db;";
	// make a database connection
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	die($e->getMessage());
} finally {
	if ($pdo) {
		$pdo = null;
	}
}
