<?php
   session_start();
	//If sessionID is 1 then user has logged-in
	if(@$_SESSION[@'sessionID'] == 1){
		require_once("../view-comp/header-login.php");
	}
	//If sessionID is 1 then user has logged-in
	else {
		require_once("../view-comp/header-logout.php");
	}

 ?>
	<!-- CONTENT HERE -->
  <?php
  
   ?>
</body>
</html>
