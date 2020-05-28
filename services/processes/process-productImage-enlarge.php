<?php

  include('../services/DB_Operations.php');
 ?>
<?php



  //SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
  $sql = "SELECT * FROM product_list";
  // puts it on the result var and connects the sql query to the db
  $result = $conn->query($sql);


  $resultCount =  $result->num_rows;

  // Sets the value of the imgEnlarge depending what prouct was clicked
  $selectedProduct = $_POST['imgEnlarge'];

  $resultCount =  $result->num_rows;

  // Iterates throughtout the product List
  for ($ctr = 0; $ctr < $resultCount; $ctr++){
    $row = $result -> fetch_assoc();
  ?>

    <?php
      // If the productID matches with the selectedProduct
      if($row['productID'] ==  $selectedProduct){
     ?>
       <div class="container">
        <center>
          <?php  echo "<h2>{$row['productName']}</h2>"; ?>
          <?php  echo "<img src='{$row['imgPath']}' class='singleProductImg'>" ;  ?>
          <br><br>
          <?php  echo "Product Description: {$row['productDescription']}";       ?>
          <br>
          <?php echo "Product Price: {$row['productPrice']}"; ?>
          <br><br><br>

          <?php
          // If sessionID == 1 which is log in then button buy is not disabled
          if(@$_SESSION[@'sessionID'] == 1){
            echo
            // This code is not final and may see revision depending on circumstances
            "<a href='../website/checkout.php'>  ".
             " <button type='button' class='btn btn-success buy'>Buy</button> ".
             "</a>";
          }//Else disble the button
          else {
             echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
          }
         ?>
         <?php
         echo "<a href= '../website/browse.php'>";
         echo "<button type='button' class='btn btn-secondary'>Return</button> ";
         echo "</a>";
         ?>
        </center>
       </div>
      <?php
      }

    }

 ?>