<!-- CALLING REQUIRED CLASSES -->
<?php
  //
  include ('../services/DB_Operations.php');

 ?>
 <!-- REGISTER CLASS HERE -->
<?php


    //Initialize
    $userName = "";
    $email = "";
    $password = "";
    $confirmPassword = "";
    $firstName = "";
    $lastName = "";
    $middleName = "";
    //
    // if(isset($_POST['register'])){

    $errors = array();


    if(isset($_POST['register'])){


      $userName = mysqli_real_escape_string($conn,$_POST['username']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);
      $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
      $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
      $middleName = mysqli_real_escape_string($conn,$_POST['middleName']);

      if (empty($userName)){
              array_push($errors , "Username is required");
      }

      if (empty($email)){
             array_push($errors , "Email is required");
      }

      if (empty($password)){
       array_push($errors , "Password is requred");
      }


      if(count($errors) == 0){
        $sql = "insert into useraccount (username, email, password, firstname, lastname, middlename) VALUES
        ('$userName','$email','$password','$firstName','$lastName','$middleName')";

        $result = mysqli_query($conn,$sql);
        $_SESSION['username'] = $userName;
        $_SESSION['success'] = "You are now logged in";
        header('location: Landing-page.php');
      }


    }

    //
    //       // CHECK IF EMPTY
    //       if (empty($username)){
    //         array_push($errors , "Username is required");
    //       }
    //
    //       if (empty($email)){
    //         array_push($errors , "Email is required");
    //       }
    //
    //       if (empty($password)){
    //         array_push($errors , "Password is requred");
    //       }
    //
    //       // CHECK IF PASSWORD AND CONFIRM PASSWORD NOT SAME
    //       if (empty($password != $confirmPassword)){
    //         array_push($errors , "Passwords do not Match");
    //       }
    //
    //       if (empty($firstName)){
    //         array_push($errors , "Firstname is required");
    //       }
    //
    //       if (empty($lastName)){
    //         array_push($errors , "Lastname is required");
    //       }
    //
    //       if (empty($middleName)){
    //         array_push($errors , "Middlename is required");
    //       }
    //
    //
    //       //If there ar eno errors
    //       if($count($errors== 0)){
            //Save to database




 ?>
