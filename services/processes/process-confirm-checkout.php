<?php
  include ('../services/DB_Operations.php');

?>

<!-- To be revised depending on circumstances -->


<?php
//SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
$sql = "SELECT * FROM product_list";
// puts it on the result var and connects the sql query to the db
$result = $conn->query($sql);


$resultCount =  $result->num_rows;

// Sets the value of the imgEnlarge depending what prouct was clicked


  echo "<p>Hello ".$_SESSION['username']." <br></p>";
  echo "<p>Your order is as follows</p>";


  // Iterate throughout the whole product List
for ($ctr = 0; $ctr < $resultCount; $ctr++){
    $row = $result -> fetch_assoc();
?>
<div class="container">
   <?php  if($row['productID'] == $_SESSION['selectedProductBuy']){ ?>
       <?php echo "<h2>{$row['productName']}</h2>"; ?>
       <?php echo "<img src='{$row['imgPath']}' class='singleProductImg'>" ;  ?>
       <?php echo "Product Price: {$row['productPrice']}"; ?>
     <br><br>
   <?php  } ?>
<?php } ?>
<!-- Shipping and payment print -->
<?php
  $address = $_SESSION['inputAddress'];
  $method = $_SESSION['inputPaymentMethod'];
  echo "<p>Shipping Address: ".$address."</p>";
  echo "<p>Payment Method: ".$method."</p>";
 ?>
<!-- Buy Button -->
<?php
 echo "<form method='POST' action=''>";
 echo "<button type='submit' class='btn btn-success'>Buy</button>";
 echo "</form>";
 ?>
 <!-- Cancel/Return Button -->
 <br>
<?php
 unset($_SESSION['selectedProductBuy']);
 unset($_SESSION['inputAddress']);
 unset($_SESSION['inputPaymentMethod']);
 echo "<a href= '../website/browse.php'>";
 echo "<button type='button' class='btn btn-danger'>Cancel</button>";
 echo "</a>";
 ?>
</div>
