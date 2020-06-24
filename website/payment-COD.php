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
 <?php echo "".$_SESSION['qty'] ?>
 <!-- CONTENT HERE -->
 <div class="container">
   <div class="card mt-3">
     <div class="card-body">
       <!-- Printing of COD Form Here -->
       	<?php include('../services/processes/process-payment-COD.php'); ?>
    </div>
  </div>
</div>

</body>
</html>
