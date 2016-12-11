<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Agastya</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

			<nav class="navbar navbar-full navbar-light bg-faded">
			<div class="container">
				<a class="navbar-brand" href="#">Oswald Tech</a>
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						 <a class="nav-link" href="#">Dashboard<span class="sr-only"> (current)</span></a>
					</li>
					<li class="nav-item">
						 <a class="nav-link" href="#">Agastya</a>
					</li>
					<li class="nav-item">
						 <a class="nav-link" href="#">Oswald Host</a>
					</li>
					<li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Wallet ($<?php echo $_SESSION["funds"]; ?>)</a>
						 <div class="dropdown-menu">
						 	<a class="dropdown-item" href="./add">Add Funds</a>
						 	<a class="dropdown-item" href="./transfer">Transfer Funds</a>
						 	<a class="dropdown-item" href="./history">Payment History</a>
						 </div>
					</li>
				</ul>
			</div>
		</nav>