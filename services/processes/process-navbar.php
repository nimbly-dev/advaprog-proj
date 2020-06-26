<?php
  //Function to get username after log-in
  function getUserName(){
    if($_SESSION('sessionID') == 1){
      echo "".$_SESSION['username']."";
    }
    else{
      echo "";
    }
  }
  //Function for logout
  function logout(){
    // Unsert and remove session variables that was used
    // unset($_SESSION['sessionID']);
    // unset($_SESSION["username"]);
    session_destroy();

  }

  if(isset($_POST['logout'])){
     logout();
     header ('location: Landing-page.php');
  }

?>
