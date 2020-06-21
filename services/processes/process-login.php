<?php
  if ($_SERVER['HTTPS'] != 'on') {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    exit;
  }
?>

<?php
  // Calls the DB-Operations Class
  include ("../services/DB_Operations.php");
  include ("../services/utilities/log-utility.php");

 ?>
<?php
  session_start();
  //Initialize variables
  $userName = "";
  $password = "";

  // Error arrays
  $errors = array();



if(isset($_POST['login'])){
    //Calls values from the text fields
    $userName = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $passHash = hash('sha512', $password);
    //If empty then push/add it to error array
    if(empty($userName)){
      array_push($errors,"Username is required");
    }

    //If empty then push/add it to error array
    if(empty($password)){
      array_push($errors,"Password is required");
    }

    //If there are no errors then proceed to login process
    if(count($errors) == 0) {
      // sql statement for finding matches of username and pasword
      $sql = "Select * from useraccount
        WHERE username ='$userName' AND password = '$passHash' ";


      // puts on result var and runs the query
      $result = mysqli_query($conn,$sql);
        // If return one then a username and password was matched from the useraccount table
        if(mysqli_num_rows($result) == 1){
          // Set sessionID to 1 which means a user has been logged in
          $_SESSION['sessionID'] = 1;
          // Calls the username value on table to be used by the website for printing
          $_SESSION['username'] = $userName;
          $ipAddress = $_SERVER['REMOTE_ADDR'];
          $message = "User: ".$userName." with IP ADDRESS: ".$ipAddress."";

          logUserLogin($message);
          // Redirect to Landing-page
          header ('location: ../website/Landing-page.php');
          // echo $userName;
          // Write on the log file

        }else{
          // No username and password matched, pushed to errors array
          array_push($errors, "Wrong credentials");
        }
    }

  }




 ?>
