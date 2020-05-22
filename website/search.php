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
 <br><br>
 <div class="container">
   <div class="card my-3">

     <div class="card-header">
       Search the website for your desired Products
     </div>

     	<div class="card mt-3">
     		<div class="card-body">
          <form action="search-results.php" method="POST">
            <!-- Search TextBox -->
            <div class="form-group">
              <label for="searchTerm">Search Term</label>
              <input type="text" id="searchTerm" name="searchTerm"
                class="form-control" placeholder="Search Product"/>
            </div>
            <!-- BUTTON SUBMIT -->
            <div>
             <button type="submit" class="btn btn-success">Submit</button>
            </div>
     	  </div>
     	</div>

    </div>
  </div>

 </body>
 </html>
