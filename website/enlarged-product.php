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
			<!-- Calls the productImage-enlarge.php -->
			<?php include ('../services/processes/process-productImage-enlarge.php') ?>

    </div>
  </div>
</div>

</body>
</html>
