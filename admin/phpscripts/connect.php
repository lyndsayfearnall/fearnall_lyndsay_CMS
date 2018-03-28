<?php
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_movies_cms";

	$link = mysqli_connect($url, $user, $pass, $db);

	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
