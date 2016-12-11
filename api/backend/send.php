<?php

	session_start();
	date_default_timezone_set("Asia/Kolkata");
	require_once "../../class.php";

	$value = base64_decode($_POST["value"]);
	$to = base64_decode($_POST["to"]);

	DB::$user = "anand";
	DB::$password = "";
	DB::$dbName = "agastya";

	//echo "<h1>" . $to . "</h1>";

	DB::update("users", array(
		"funds" => intval($_SESSION["funds"]) - intval(($value))
	), "username=%s", $_SESSION["username"]);

	$account = DB::queryFirstRow("SELECT * FROM users WHERE username=%s", ($to));
	$sendAmt = $account["funds"];

	DB::update("users", array(
		"funds" => intval($sendAmt) + intval(($value))
	), "username=%s", $to);

	DB::insert("transfers", array(
		"fromUser" => $_SESSION["username"],
		"toUser" => $to,
		"datetime" => date("d/m/Y h:i:sa"),
		"value" => $value
	));
	
	$_SESSION["funds"] = intval(intval($_SESSION["funds"]) - intval(($value)));

	header("Location: ../../?sent");

?>