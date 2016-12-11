		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<?php
						if (isset($_GET["added"])) {
							echo '<div class="alert alert-success">Your account has been recharged.</div>';
						} elseif (isset($_GET["sent"])) {
							echo '<div class="alert alert-success">Your transfer is complete.</div>';
						}
					?>
					<div class="card card-block">
						<p>Hi, <?php echo explode(" ", $_SESSION["name"])[0]; ?>, you have $<?php echo $_SESSION["funds"]; ?> in your account &middot; 
						<a href="api/backend/logout.php">Logout</a></p>
						<p><a href="?page=add" class="btn btn-primary">Add Money</a>
						<a href="?page=transfer" class="btn btn-secondary">Transfer Money</a></p>
						<p><a href="?page=settings" class="btn btn-secondary">Settings</a></p>
					</div>
				</div>
			</div>
		</div>