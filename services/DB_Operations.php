<?php


 ?>
<?php

  // $db = "";
  //
  // $username = '';
  // $password = '';
  // //
  // // INITIALIZE
  //   $INSERT_ACCOUNT = "insert into useraccount (username, email, password, firstname, lastname, middlename) VALUES
  //   ('$userName','$email','$password','$firstName','$lastName','$middleName')";

  //
  // // $query = sprintf("SELECT firstname, lastname, address, age FROM friends
  //   WHERE firstname='%s' AND lastname='%s'",
  //   mysql_real_escape_string($firstname),
  //   mysql_real_escape_string($lastname));
//
//
//
  $host="localhost";
  $user="root";
  $pass="";
  $db = 'e-commerce-db';

  $conn = mysqli_connect($host,$user,$pass,$db);

  // // LOCALHOST
  // function create_connection(){
  //   $host="localhost";
  //   $user="root";
  //   $pass="";
  //   $db = 'e-commerce-db';
  //
  //   $db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
  // }


  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }


 ?>
