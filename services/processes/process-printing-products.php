<?php
  // INCLUDE ALL USED FILES
  include ('../services/DB_Operations.php');
  // include ('../model/services/handlers/print_products.php');

 ?>

 <!-- START -->
 <?php

//SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
$sql = "SELECT * FROM product_list";
// puts it on the result var and connects the sql query to the db
$result = $conn->query($sql);

//Iterates until there are no more product inputs to be printed
 if ($result->num_rows > 0) {
  // output data of each row
  // Div class for wrap content
  echo "<div class='d-flex flex-xl-wrap'>";

  while($row = $result->fetch_assoc()) {
    // Here is where a template is created for every item
   ?>

   <div class="card col-4 mx-5">
     <div class="card-body">
        <?php echo "<img src='{$row['imgPath']}'>"; ?>
       <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
         <?php echo
           "Product Price : {$row['productPrice']} <br> ".
           "Product Description : {$row['productDescription']} <br> ".
           "";
          ?>
    </div>
   </div>

   <!-- Increment counter to 1 -->

   <?php
  }
  echo "</div>";
 }
 // END
 ?>
