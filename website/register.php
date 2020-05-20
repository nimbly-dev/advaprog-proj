<?php

  include ("../services/processes/process-registration.php");

 ?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/registration/registration.css">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="../css/registration/registration.css">
	</head>
	<body>

		<!-- -->
	<div class="container">

            <!-- INCLUDE THE ERROR PHP CLASS -->
						<form method="POST" action="register.php">
							<div class="header">
								<h2>Register</h2>
							</div>
              <!-- ERROR HANDLER HERE -->
              <?php  include ('../services/handlers/credential_validators.php') ?>
							<div class="input-group">
								<label>Username:</label>
								<input type="text" name="username" placeholder="Enter username " id="username"></input>
							</div>
							<div class="input-group">
								<label>Email:</label>
								<input type="text" name="email"  placeholder="Enter email " id="email"></input>
							</div>
							<div class="input-group">
								<label>Password:</label>
								<input type="text" name="password" id="password"  placeholder="Enter password"></input>
							</div>
							<div class="input-group">
								<label>Confirm Password:</label>
								<input type="text" name="confirmPassword" id="confirmPassword"  placeholder="Confirm Password"></input>
							</div>
							<div class="input-group">
								<label>First name:</label>
								<input type="text" name="firstName" id="firstName"  placeholder="Enter First Name"></input>
							</div>
							<div class="input-group">
								<label>Last Name:</label>
								<input type="text" name="lastName" id="lastName"  placeholder="Enter Last Name"></input>
							</div>
							<div class="input-group">
								<label>Middle Name:</label>
								<input type="text" name="middleName" id="middleName"  placeholder="Enter Middle Name"></input>
							</div>

							<div>
								<input type="submit" value="Register" class="btn" name="register"></input>
							</div>

              <div>
                <a href="login.php"> Already a member? </a>
              </div>

						</form>

    </div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>

</html>
