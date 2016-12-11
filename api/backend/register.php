<?php

	require_once "../../class.php";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$phone = $_POST["phone"];
	if (isset($_POST["code"])) {
		$code = $_POST["code"];
	} else {
		$code = "none";
	}

	DB::$user = "anand";
	DB::$password = "";
	DB::$dbName = "agastya";

	DB::query("SELECT * FROM users WHERE username=%s", $username);
	$counter = DB::count();
	if ($counter > 0) {
		echo "Username already exists";
	} else {
		if ($code == "1abc9c") {
			DB::insert("users", array(
				"username" => $username,
				"password" => md5($password),
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"funds" => 100.0
			));
		} else {
			DB::insert("users", array(
				"username" => $username,
				"password" => md5($password),
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"funds" => 0.0
			));
		}
	}

	header("Location: ../../?registered");

?>