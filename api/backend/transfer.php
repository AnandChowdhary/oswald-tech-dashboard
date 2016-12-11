<?php

	$receiver = $_POST["receiver"];
	$value = $_POST["value"];

	header("Location: ../../?page=send&value=" . base64_encode($value) . "&to=" . base64_encode($receiver));

?>