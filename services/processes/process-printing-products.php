<?php
  // INCLUDE ALL USED FILES
  include ('../services/DB_Operations.php');
  // include ('../model/services/handlers/print_products.php');

 ?>


 <?php

//SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
$sql = "SELECT * FROM product_list";
// puts it on the result var and connects the sql query to the db
$result = $conn->query($sql);

//Iterates until there are no more product inputs to be printed
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // Here is where a template is created for every item
    echo "Product Name :{$row['productName']}  <br> ".
       "Product Price : {$row['productPrice']} <br> ".
       "Product Description : {$row['productDescription']} <br> ".
       "--------------------------------<br>";
  }
 }

 ?>
