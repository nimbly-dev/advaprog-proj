<?php

  include ("../services/DB_Operations.php");


 ?>
<?php


  //Initialize
  $userName = "";
  $password = "";

  // $userName = mysqli_real_escape_string($conn,$_POST['username']);
  // $password = mysqli_real_escape_string($conn,$_POST['password']);


  $errors = array();

  if(isset($_POST['login'])){
    $userName = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);


    if(empty($userName)){
      array_push($errors,"Username is required");
    }
    if(empty($password)){
      array_push($errors,"Password is required");
    }

    if(count($errors) == 0){
      $sql = "Select * from useraccount WHERE username = '$userName' AND password='$password'";
      $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
          $_SESSION['sessionID'] = 1;
          $_SESSION['username'] = $userName;
          $_SESSION['Success'] = "You are now logged In";
          header ('location: Landing-page.php');
        }else{
          array_push($errors, "Wrong credentials");
        }
    }

  }




  //
  // // $LOGIN = new DB_Operations;
  // // $LOGIN->LOGIN;
  // //Such Securities
  // $username = mysqli_real_escape_string($username);
  // $password = mysqli_real_escape_string($password);
  // // $username = mysql_real_escape_string($username);
  // // $password = mysql_real_escape_string($password);
  //
  //
  //
  // $result = mysqli_query($LOGIN)
  //   or die("Failed to query database ".mysql_error());
  //
  // $row = mysql_fetch_array($result);
  //
  // if($row['username'] == $username && $row['password'] == $password){
  //   echo "Login Success!!! Welcome ".row['username'];
  // }else{
  //   echo "Failed to login";
  // }

 ?>
