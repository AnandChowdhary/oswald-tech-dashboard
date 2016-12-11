<?php

	if (!isset($_SESSION["username"])) {
		header("Location: ./");
	} else {
		include "views/parts/header.php";
		if (!isset($_GET["page"])) {
			include "views/home.php";
		} else {
			if (file_exists("views/" . $_GET["page"] . ".php")) {
				include "views/" . $_GET["page"] . ".php";
			} else {
				echo "<h1>404</h1>";
			}
		}
		include "views/parts/footer.php";
	}

?>