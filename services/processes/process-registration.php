<!-- CALLING REQUIRED CLASSES -->
<?php
  //
  include ('../services/DB_Operations.php');
  include ("../services/utilities/log-utility.php");
 ?>
 <!-- REGISTER CLASS HERE -->
<?php


    //Initialize register values
    $userName = "";
    $email = "";
    $password = "";
    $confirmPassword = "";
    $firstName = "";
    $lastName = "";
    $middleName = "";

    // Error arrays
    $errors = array();

    // If btn-register is clicked
    if(isset($_POST['register'])){

      //Calls values from the text fields
      $userName = mysqli_real_escape_string($conn,$_POST['username']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);

      //takes and hashes password
      $password = $_POST['password'];
      $hashed = hash('sha512', $password);


      //$confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);
      $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
      $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
      $middleName = mysqli_real_escape_string($conn,$_POST['middleName']);



      $existingUser = "SELECT username FROM useraccount WHERE username = '$userName' ";
      $existingEmail = "SELECT email FROM useraccount WHERE email = '$email' ";
      $checkUser = $conn->query($existingUser);
      $checkEmail = $conn->query($existingEmail);

      //If empty $userName then push/add it to error array
      if (empty($userName)){
              array_push($errors , "Username is required");
      }

      //If empty $email then push/add it to error array
      if (empty($email)){
             array_push($errors , "Email is required");
      }

      //If $password and $confirmPassword does not match then push/add it to error array
      if (empty($password)){
       array_push($errors , "Password is requred");
      }

      if($checkUser->num_rows >=1){
        array_push($errors, "Existing user ");
      }

      if($checkEmail->num_rows >=1){
        array_push($errors, "Email is already used ");
      }

      //If there are no errors then proceed to register process
      if(count($errors) == 0){
        // sql statement for inserting data to the userAccount
        $sql = "insert into useraccount (username, email, password, firstname, lastname, middlename, unhashed_password) VALUES
        ('$userName','$email','$hashed','$firstName','$lastName','$middleName','$password')";

        // puts on result var and runs the query
        $result = mysqli_query($conn,$sql);
        // Set sessionID to 1 which means a user has been logged in
        $_SESSION['sessionID'] = 1;
        // Calls the username value on table to be used by the website for printing
        $_SESSION['username'] = $userName;
        $message = "NEW USER: ".$userName." ";

        $logfile='../logFiles/register-logs.log';

        write_log($message,$logfile);

        // Redirect to Landing-page
        header('location: login.php');
      }


    }




 ?>
