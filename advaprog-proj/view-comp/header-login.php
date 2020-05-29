<!DOCTYPE html>
<?php
  // Calls Navbar processes
  include ('../services/processes/process-navbar.php');
 ?>
<html>
<head>
	<title>Landing Page</title>


  <link rel="stylesheet" href="../css/browse.css">
  <link rel="stylesheet" href="../css/stylesheet.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  <script>

  // Img enlarge on click
  $(document).ready(function(){
      $('.enlarge').click(function(){
           $(this).css('width', function(_ , cur){
                return cur === '100px' ? '100%' : '100px'
          });
      });
  });

  </script>


</head>
<body>

<!-- START OF NAVBAR -->
  <nav class="navbar navbar bg-dark">
      <a class="navbar-brand" href="#" style="color: white;"><b>I-am-speed</b></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>


    <!-- <div> -->
      <!-- LINK TO LOGIN PAGE -->
  		<!-- <a href="login.php">
    		<button class="btn btn-light">
        	<span class="button_text">Login</span>
        </button>
  		</a>
    </div> -->

    <!-- <div> -->
      <!-- LINK TO REGISTER PAGE -->
      <!-- <a href="Register.php">
  		<button class="btn btn-light">
  	    <span class="button_text">Register</span>
      </button>
  		</a>
    </div> -->

    <div>
      <a href="browse.php">
      <button class="btn btn-light">
        <span class="button_text">Browse</span>
      </button>
      </a>
    </div>

    <div>
      <a href="search.php">
      <button class="btn btn-light">
        <span class="button_text">Search</span>
      </button>
      </a>
    </div>

    <div>
      <!-- CHECKING -->
       <!-- JUST FOR CHECKING -->
       <button class="btn btn-light">
         <span class="button_text"><?php echo $_SESSION['username'] ?></span>
       </button>
    </div>

    <div>
      <form method="POST" action="../services/processes/process-logout.php">
          <input type="submit" value="logout" class="btn btn-light" name="logout"></input>
      </form>
    </div>

	</nav>
  <!-- END OF NAVBAR -->