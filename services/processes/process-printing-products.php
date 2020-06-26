<?php
  include ('../services/DB_Operations.php');
 ?>
 <!-- START -->
 <?php
//SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
$sql = "SELECT * FROM product_list";
//SQL STATEMENT FOR PRINTING ALL LAPTOPS
$sqlLaptop = "SELECT * FROM product_list WHERE productType ='laptop' ";
//SQL STATEMENT FOR PRINTING ALL SMART PHONE
$sqlSmartPhone = "SELECT * FROM product_list WHERE productType = 'smartphone' ";
//SQL STATEMENT FOR PRINTING ALL PLAY STATION
$sqlPlayStation = "SELECT * FROM product_list WHERE productType = 'playStation' ";
// puts it on the result var and connects the sql query to the db


if(@$_GET['browseCategory'] == 'all'){
  //Iterates until there are no more product inputs to be printed
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    // Div class for wrap content
    echo "<div class='d-flex flex-xl-wrap'>";
    echo "<br>";
    while($row = $result->fetch_assoc()) {
      // Here is where a template is created for every item
     ?>
     <div class="card col-4 mx-10">
       <div class="card-body">
          <?php
          echo "<img src='{$row['imgPath']}' class='enlarge'>";
          ?>
          <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
           <?php echo
            // Prints product Price
             "Product Price : ₱ {$row['productPrice']} <br> ";
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
                echo "<form action='../website/choosing-payment.php' method='POST'>";
                echo "<input type='hidden' name='buy' value='{$row['productID']}'>";
                echo "<input type='submit' class='btn btn-success' name='' value='Buy'>";
                echo "</form>";
             }//Else disble the button
             else {
                echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
             }
            ?>
      </div>
     </div>
     <!-- Increment counter to 1 -->
     <?php
    }
    echo "</div>";
   }
   // END
}
// Prints Laptop
else if(@$_GET['browseCategory'] == 'laptop'){
  //Iterates until there are no more product inputs to be printed
  $result = $conn->query($sqlLaptop);
  if ($result->num_rows > 0) {
   // output data of each row
   // Div class for wrap content
   echo "<div class='d-flex flex-xl-wrap'>";
   echo "<br>";
   while($row = $result->fetch_assoc()) {
     // Here is where a template is created for every item
    ?>
    <div class="card col-4 mx-10">
      <div class="card-body">
         <?php
         echo "<img src='{$row['imgPath']}' class='enlarge'>";
         ?>
         <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
          <?php echo
           // Prints product Price
            "Product Price : ₱ {$row['productPrice']} <br> ";
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
               echo "<form action='../website/choosing-payment.php' method='POST'>";
               echo "<input type='hidden' name='buy' value='{$row['productID']}'>";
               echo "<input type='submit' class='btn btn-success' name='' value='Buy'>";
               echo "</form>";
            }//Else disble the button
            else {
               echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
            }
           ?>
     </div>
    </div>
    <!-- Increment counter to 1 -->
    <?php
   }
   echo "</div>";
  }
  // END
}
else if(@$_GET['browseCategory'] == 'smartPhones'){
    $result = $conn->query($sqlSmartPhone);
    if ($result->num_rows > 0) {
     // output data of each row
     // Div class for wrap content
     echo "<div class='d-flex flex-xl-wrap'>";
     echo "<br>";
     while($row = $result->fetch_assoc()) {
       // Here is where a template is created for every item
      ?>
      <div class="card col-4 mx-10">
        <div class="card-body">
           <?php
           echo "<img src='{$row['imgPath']}' class='enlarge'>";
           ?>
           <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
            <?php echo
             // Prints product Price
              "Product Price : ₱ {$row['productPrice']} <br> ";
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
                 echo "<form action='../website/choosing-payment.php' method='POST'>";
                 echo "<input type='hidden' name='buy' value='{$row['productID']}'>";
                 echo "<input type='submit' class='btn btn-success' name='' value='Buy'>";
                 echo "</form>";
              }//Else disble the button
              else {
                 echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
              }
             ?>
       </div>
      </div>
      <!-- Increment counter to 1 -->
      <?php
     }
     echo "</div>";
    }
    // END
  }
else if(@$_GET['browseCategory'] == 'playStations'){
  $result = $conn->query($sqlPlayStation);
  if ($result->num_rows > 0) {
   // output data of each row
   // Div class for wrap content
   echo "<div class='d-flex flex-xl-wrap'>";
   echo "<br>";
   while($row = $result->fetch_assoc()) {
     // Here is where a template is created for every item
    ?>
    <div class="card col-4 mx-10">
      <div class="card-body">
         <?php
         echo "<img src='{$row['imgPath']}' class='enlarge'>";
         ?>
         <div class="product-title"> <?php  echo " {$row['productName']}  <br> "; ?> </div>
          <?php echo
           // Prints product Price
            "Product Price : ₱ {$row['productPrice']} <br> ";
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
               echo "<form action='../website/choosing-payment.php' method='POST'>";
               echo "<input type='hidden' name='buy' value='{$row['productID']}'>";
               echo "<input type='submit' class='btn btn-success' name='' value='Buy'>";
               echo "</form>";
            }//Else disble the button
            else {
               echo "<button type='button' class='btn btn-success buy' disabled>Buy</button> ";
            }
           ?>
     </div>
    </div>
    <!-- Increment counter to 1 -->
    <?php
   }
   echo "</div>";
  }
  // END
}
?>
