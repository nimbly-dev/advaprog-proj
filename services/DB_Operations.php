<?php


 ?>
<?php

  // DB values
  $host="localhost";
  $user="root";
  $pass="";
  $db = 'e-commerce-db';

  // Connects to the database
  $conn = mysqli_connect($host,$user,$pass,$db);

  // If connection error
  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }


 ?>
