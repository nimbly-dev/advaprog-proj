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
  require ('../services/utilities/bought-items.php');
 ?>
 <?php @$_SESSION['qty'] = $_POST['quantity'];
 ?>
 <!-- CONTENT HERE -->
 <!-- CHOOSING PAYMENT PAGE -->
 <div class="container">
   <div class="card mt-3">
     <div class="card-body">
			 <!-- Check if user is login -->
			 <?php 	if(@$_SESSION['sessionID'] == 1){ ?>
							 <div class="dropdown">
								 <button class="btn btn-secondary dropdown-toggle bg-success"
												 type="button" id="ChoosePayment" data-toggle="dropdown"
												 aria-haspopup="true" aria-expanded="false">
									 Choose Payment
								 </button>
								 <div class="dropdown-menu" aria-labelledby="ChoosePayment">
									 <?php echo "<a class='dropdown-item' href='payment-COD.php' >COD</a>"; ?>
									 <?php echo "<a class='dropdown-item' href='payment-creditCard.php' >Credit Card</a>"; ?>
								 </div>
							 </div>
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
