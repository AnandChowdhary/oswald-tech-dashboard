<?php

	session_start();
	require_once "../../class.php";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];

	DB::$user = "anand";
	DB::$password = "";
	DB::$dbName = "agastya";

	DB::update("users", array(
		"name" => $name,
		"email" => $email,
		"phone" => $phone
	), "username=%s", $_SESSION["username"]);

	$_SESSION["name"] = $name;
	$_SESSION["email"] = $email;
	$_SESSION["phone"] = $phone;

	if (isset($_POST["password"])) {
		$account = DB::queryFirstRow("SELECT * FROM users WHERE username=%s", $_SESSION["username"]);
		if ($account["password"] == md5($password)) {
			DB::update("users", array(
				"password" => md5($password2)
			), "username=%s", $_SESSION["username"]);
		}
	}

	header("Location: ../../?page=settings&updated=1");

?>