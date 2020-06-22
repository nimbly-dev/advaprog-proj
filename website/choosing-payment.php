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

 <!-- CONTENT HERE -->
 <div class="container">
   <div class="card mt-3">
     <div class="card-body">


			 <div class="dropdown">
			   <button class="btn btn-secondary dropdown-toggle"
			           type="button" id="ChoosePayment" data-toggle="dropdown"
			           aria-haspopup="true" aria-expanded="false">
			     Choose Payment
			   </button>
			   <div class="dropdown-menu" aria-labelledby="ChoosePayment">
			     <a class="dropdown-item" href="payment-COD.php">COD</a>
			     <a class="dropdown-item" href="payment-creditCard.php">Credit Card</a>
			   </div>
			 </div>

    </div>
  </div>
</div>

</body>
</html>
