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
       <!-- Printing of COD Form Here -->
			 <!-- Check first if user is logged -->
			 <?php 	if(@$_SESSION['sessionID'] == 1){ ?>
       	<?php include('../services/processes/process-payment-COD.php'); ?>
			  <?php }else{ ?>
			  <?php  echo "<div class='alert alert-danger' role='alert'>";
							 echo "<strong>Blocked Access</strong> You need to login first before accessing this website.";
							 echo "</div>";
						  } ?>
    </div>
  </div>
</div>

</body>
</html>
