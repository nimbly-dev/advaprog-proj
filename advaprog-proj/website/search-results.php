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
<!-- SEARCH RESULT HERE -->
<!-- CONTENT HERE -->
<div class="container">
	<div class="card mt-3">
		<div class="card-body">

			<!-- Product Printing Here -->
			<?php include('../services/processes/process-search.php'); ?>

      <!-- Return Button -->
      <a href="search.php"><div type="button" class="btn btn-secondary">Go back</div></a>
	  </div>
	</div>
</div>

</body>
</html>
