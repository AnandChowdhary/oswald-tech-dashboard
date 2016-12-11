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
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<form action="./api/backend/pay.php" method="post" class="card card-block">
						<h4 class="card-title">Confirm Payment</h4>
						<style> .razorpay-payment-button { display: none } </style>
						<script
							src="https://checkout.razorpay.com/v1/checkout.js"
							data-key="rzp_test_rYMc3MDgdMOEhf"
							data-amount="<?php echo intval(base64_decode($_GET["value"])) * 65 * 100; ?>"
							data-buttontext="Pay with Razorpay"
							data-name="Agastya"
							data-description="Oswald Foundation"
							data-image="https://oswald.host/cdn/mR5Xr8/09194-apple-touch-icon.png"
							data-prefill.name="<?php echo $_SESSION["name"]; ?>"
							data-prefill.email="<?php echo $_SESSION["email"]; ?>"
							data-prefill.contact="<?php echo $_SESSION["phone"]; ?>"
							data-theme.color="#0275d8"
						></script>
						<p>You are paying $<?php echo number_format(base64_decode($_GET["value"])); ?> &times; 65 = &#8377;<?php echo number_format(intval(base64_decode($_GET["value"])) * 65); ?></p>
						<input type="hidden" value="<?php echo $_GET["value"]; ?>" name="value">
						<input type="hidden" value="Hidden Element" name="hidden">
						<button type="submit" class="btn btn-primary">Make Payment</button>
					</form>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</body>
</html>