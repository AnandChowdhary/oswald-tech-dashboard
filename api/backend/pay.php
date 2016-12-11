<?php

	session_start();

	require_once "../../class.php";

	DB::$user = "anand";
	DB::$password = "";
	DB::$dbName = "agastya";

	if (isset($_POST["error_code"])) {
		echo "<h1>Error</h1>";
	} else {
		if (isset($_POST["razorpay_payment_id"])) {
			DB::insert("payments", array(
				"username" => $_SESSION["username"],
				"razorpay_payment_id" => $_POST["razorpay_payment_id"],
				"amount" => base64_decode($_POST["value"])
			));
			DB::update("users", array(
				"funds" => intval($_SESSION["funds"]) + intval(base64_decode($_POST["value"]))
			), "username=%s", $_SESSION["username"]);
			$_SESSION["funds"] = intval(intval($_SESSION["funds"]) + intval(base64_decode($_POST["value"])));
			header("Location: ../../?added");
		}
	}

?>