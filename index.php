<?php

	session_start();

	if (isset($_SESSION["username"])) {
		include "dashboard.php";
	} else {
		include "login.html";
	}

?>