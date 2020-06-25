<?php
  include ('../services/DB_Operations.php');
?>
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
       <?php echo "<p>₱{$row['productPrice']}<p>"; ?>
       <?php $overallCost = $_SESSION['qty'] * $row['productPrice']?>
       <?php echo "<p>Overall Cost: ₱".$overallCost."</p>"; ?>
     <br><br>
   <?php  }
 }?>
<?php echo "Quantity: ".$_SESSION['qty']; ?>
<!-- Shipping and payment print -->
<?php
  echo "<p>Address : ".$_POST['address']."</p>";
  if($_POST['payMethod'] == "1"){
    echo "<p>Payment Method : COD</p>";
    // ID for transaction is a success
  }
  else if($_POST['payMethod'] == "2"){
    echo "<p>Payment Method : Credit Card</p>";
    echo "<p>Credit Card: ".$_POST['typeOfCard']."</p>";
    // ID for transaction is a success

  }else{
    // ID for transaction failed
  }
 ?>
<!-- Buy Button -->
<?php
 echo "<form method='POST' action='../website/order-success.php'>";
 echo "<button type='submit' class='btn btn-success'>Buy</button>";
 echo "<input type='text' hidden name='successID' value='1'> ";
 echo "<input type='text' hidden name='overallCost' value='$overallCost'> ";
 echo "</form>";
 ?>
 <!-- Cancel/Return Button -->
 <br>
<?php
 echo "<a href= '../website/browse.php'>";
 echo "<button type='button' class='btn btn-danger'>Cancel</button>";
 echo "</a>";
 ?>
</div>
