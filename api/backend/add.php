<?php

	$value = $_POST["value"];
	header("Location: ../../?page=pay&value=" . base64_encode($value));

?>