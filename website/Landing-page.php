<?php
	// include ('../model/Beans/ProductBean.php');
	// include ('../model/Beans/ProductListing.php');
	session_start();
	$_SESSION['sessionID'] == 0;


	if(@$_SESSION['sessionID'] == 1){
		require_once("../view-comp/header-login.php");
	}
	else{
		require_once("../view-comp/header-logout.php");
	}

 ?>

	<!-- CONTENT HERE -->



</body>
</html>
