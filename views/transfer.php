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
					<form action="./api/backend/transfer.php" method="post" class="card card-block">
						<h4 class="card-title">Transfer Money</h4>
						<div class="form-group">
							<label for="receiver">Username to send money to</label>
							<input type="text" name="receiver" class="form-control" id="receiver" placeholder="Enter the username of receiver" required>
						</div>
						<div class="btn-group values-btn" style="margin-bottom: 20px">
							<button type="button" class="btn btn-secondary">$30</button>
							<button type="button" class="btn btn-secondary">$50</button>
							<button type="button" class="btn btn-secondary">$100</button>
							<button type="button" class="btn btn-secondary">$250</button>
							<button type="button" class="btn btn-secondary">$500</button>
							<button type="button" class="btn btn-secondary">$1000</button>
						</div>
						<div class="form-group">
							<label for="value">Or enter a custom value</label>
							<input type="text" name="value" class="form-control" id="value" placeholder="Enter the value to add" required>
						</div>
						<button type="submit" class="btn btn-primary">Transfer Money</button>
					</form>
					<p>This page uses a 256-bit encrypted secure socket layer.</p>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script>
			$(".values-btn .btn").click(function() {
				$("#value").val($(this).html().replace("$", ""));
				$(".btn-primary").click();
			});
		</script>
	</body>
</html>