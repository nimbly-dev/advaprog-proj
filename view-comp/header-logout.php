<!DOCTYPE html>
<?php

    // Calls Navbar processes
  include ('../services/processes/process-navbar.php');

 ?>
<html>
<head>
	<title>Trust</title>
  <style>
   <?php include '../css/stylesheet.css'; ?>
   <?php include '../css/navbar.css' ?>
  </style>
  <link rel="stylesheet" href="../css/browse.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<!-- START OF NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#" style="color: white;"><b>Trust</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav mr-auto">
      <div>
        <li class="nav-item">
          <a class="nav-link" href="Landing-page.php">Home</a>
        </li>
      </div>
      <div>
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Browse</a>
        </li>
      </div>
      </ul>

    <div class="col-sm-5 col-sm-offset-3">
      <form action="search-results.php" method="POST">
         <div>
            <div class="input-group stylish-input-group">
                <input type="text" class="form-control" placeholder="Search Products"
                id="searchTerm" name="searchTerm" >
                &nbsp;
                <div>
                 <button type="submit" class="btn btn-success " id="submit">Search</button>
                </div>
            </div>
        </div>
      </form>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle bg-success"
              type="button" id="user" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
      Account
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <a class="dropdown-item" href="login.php">
            Log-in
        </a>
        <a class="dropdown-item" href="register.php">
            Register
        </a>
      </div>
    </div>



	</nav>
  <!-- END OF NAVBAR -->
