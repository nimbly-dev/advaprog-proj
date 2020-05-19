<?php

  //$_SESSION['sessionID'];

  function getUserName(){
    if($_SESSION('sessionID') == 1){
      echo "".$_SESSION['username']."";
    }
    else{
      echo "";
    }
  }


  function logout(){
    //session_start();
    unset($_SESSION['sessionID']);
    unset($_SESSION["username"]);
    session_destroy();
  }



  //LOGOUT BUTTON ACTION
  if(isset($_POST['logout'])){;
     logout();
  }

?>
