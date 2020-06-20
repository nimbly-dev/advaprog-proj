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
        <?php

        echo "<img src='{$row['imgPath']}' class='enlarge'>";

        ?>
        <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
         <?php echo
          // Prints product Price
           "Product Price : {$row['productPrice']} <br> ";
           "Product Description : {$row['productDescription']} <br> "."";
           ?>
           <!-- Button for calling the process-productImage-enlarge -->
           <br>
           <?php
           echo "<form action='../website/enlarged-product.php' method='POST'>";
           echo "<input type='hidden' name='imgEnlarge' value='{$row['productID']}'>";
           echo "<input type='submit' class='btn btn-info' name='' value='More Info'>";
           echo "</form>";
            ?>
          <br>
           <?php
           // If sessionID == 1 which is log in then button buy is not disabled
           if(@$_SESSION[@'sessionID'] == 1){
             // This code is not final and may see revision depending on circumstances
              echo "<form action='../website/checkout.php' method='POST'>";
              echo "<input type='hidden' name='buy' value='{$row['productID']}'>";
              echo "<input type='submit' class='btn btn-success' name='' value='Buy'>";
              echo "</form>";
           }//Else disble the button
           else {
              echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
           }
          ?>
          <?php



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