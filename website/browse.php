<?php
// include ('../model/Beans/ProductBean.php');
// include ('../model/Beans/ProductListing.php');
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


	<!-- Product Printing Here -->
	<?php include('../services/processes/process-printing-products.php'); ?>



</body>
</html>
