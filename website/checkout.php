<?php
if (@ $_SERVER['HTTPS'] != 'on') {
 header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 exit;
}  ?>
<?php
	 session_start();


	//If sessionID is 1 then user has logged-in
	if(@$_SESSION['sessionID'] == 1){
		require_once("../view-comp/header-login.php");
	}
	// If not then user is not logged-in
	else{
		require_once("../view-comp/header-logout.php");
	}

 ?>
 <!-- CONTENT HERE -->
 <div class="container">
   <div class="card mt-3">
     <div class="card-body">

     <!-- PRINTING OF PRODUCT LIST HERE -->
    <?php include ('../services/processes/process-checkout.php') ?>



    </div>
  </div>
</div>

</body>
</html>
