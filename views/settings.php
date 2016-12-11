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
					<?php
						if (isset($_GET["updated"])) {
							echo '<div class="alert alert-success">Your settings have been updated.</div>';
						}
					?>
					<form action="./api/backend/settings.php" method="post" class="card card-block">
						<h4 class="card-title">Settings</h4>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" value="<?php echo $_SESSION["username"] ?>" disabled>
						</div>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" value="<?php echo $_SESSION["name"] ?>">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" value="<?php echo $_SESSION["email"] ?>">
						</div>
						<div class="form-group">
							<label for="phone">Contact No.</label>
							<input type="tel" name="phone" class="form-control" id="phone" value="<?php echo $_SESSION["phone"] ?>">
						</div>
						<h5 style="margin-top: 20px">Products</h5>
						<div class="form-group">
							<label for="agastyaPlan">Agastya Plan</label>
							<select name="agastyaPlan" id="agastyaPlan" class="custom-select form-control"> 
								<option data-cost="39">Startup ($39)</option>
								<option data-cost="99">Business ($99)</option>
								<option data-cost="199">Professional ($199)</option>
								<option data-cost="999">Ultimate ($999)</option>
							</select>
							<small class="form-text text-muted">Deducted monthly from your OswaldWallet.</small>
						</div>
						<div class="form-group">
							<label for="hostPlan">Oswald Host Plan</label>
							<select name="hostPlan" id="hostPlan" class="custom-select form-control"> 
								<option data-cost="0">Global CDN (Free)</option>
							</select>
							<small class="form-text text-muted">Deducted monthly from your OswaldWallet.</small>
						</div>
						<p>Your total monthly cost is <strong>$39</strong>.</p>
						<h5 style="margin-top: 20px">Change Password</h5>
						<div class="form-group">
							<label for="password">Current Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Enter your current password">
						</div>
						<div class="form-group">
							<label for="password2">New Password</label>
							<input type="password" name="password2" class="form-control" id="password2" placeholder="Enter a new password">
						</div>
						<button type="submit" class="btn btn-primary">Update Settings</button>
					</form>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</body>
</html>