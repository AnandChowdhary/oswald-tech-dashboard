<?php

	require_once "../../class.php";

	$username = $_POST["username"];
	$password = $_POST["password"];

	DB::$user = "anand";
	DB::$password = "";
	DB::$dbName = "agastya";

	$account = DB::queryFirstRow("SELECT * FROM users WHERE username=%s", $username);
	if ($account["password"] == md5($password)) {
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["name"] = $account["name"];
		$_SESSION["email"] = $account["email"];
		$_SESSION["funds"] = $account["funds"];
		$_SESSION["phone"] = $account["phone"];
		header("Location: ../../");
	} else {
		echo "not";
	}

?>