<?php
	$dsn = 'INSERTHERE';
	$username = 'wbslogin';
	$password = 'cloudarchpsswrd';
	$database = 'videogames';

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		exit();
	}
?>