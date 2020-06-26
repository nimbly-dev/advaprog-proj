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
			<!-- PRODUCT TYPE DROPDOWN -->
			<form action="browse.php" method="GET">
				<select class="custom-select" onchange="this.form.submit()" name="browseCategory">
				  <option disabled selected="selected">Browse Category</option>
				  <option value="all" <?php if(@$result['browseCategory'] == 'all'): ?> selected="selected"<?php endif; ?>>Show All</option>
				  <option value="laptop" <?php if(@$result['browseCategory'] == 'laptop'): ?> selected="selected"<?php endif; ?>>Laptops</option>
				  <option value="smartPhones">Smart Phones</option>
					<option value="playStations">Play Stations</option>
				</select>
			</form>
			<br><br>
			<!-- Product Printing Here -->
			<?php include('../services/processes/process-printing-products.php'); ?>
	  </div>
	</div>
</div>

</body>
</html>
