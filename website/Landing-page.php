<?php

	session_start();
	//$_SESSION['sessionID'] == 0;

	//If sessionID is 1 then user has logged-in
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
