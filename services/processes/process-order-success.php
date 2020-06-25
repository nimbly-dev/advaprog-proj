<center>
<?php  include ('../services/DB_Operations.php');?>
<?php
  if($_POST['successID'] == "1"){  ?>
    <div>
      <p class="text-success">Order Transaction Success</p>
      <p>Your order is as follows: </p>
      <p>
      <!-- Code for showing the product ordered -->
      <?php
      //SQL STATEMENT FOR SELECTING ALL INPUTS ON "product_list" table
      $sql = "SELECT * FROM product_list";
      // puts it on the result var and connects the sql query to the db
      $result = $conn->query($sql);

      $resultCount =  $result->num_rows;
      ?>

      <?php for ($ctr = 0; $ctr < $resultCount; $ctr++){
          $row = $result -> fetch_assoc();
      ?>
      <?php  if($row['productID'] == $_SESSION['selectedProductBuy']){ ?>
          <?php echo "<p>{$row['productName']}<p>"; ?>
          <?php echo "<p>₱{$row['productPrice']}<p>"; ?>
      <?php  } ?>
      </p>
      <?php } ?>
      <?php echo "Quantity: ".$_SESSION['qty']."<br>"; ?>
      <?php echo "Overall Cost: ₱".$_POST['overallCost']; ?>
<?php
  } else{?>
  <!-- If order transaction failed -->
    <div>
      <p class="text-danger">Order Transaction Failed</p>
    </div>
<?php } ?>
<br><br>
<a href="../website/Landing-page.php" onclick="<?php unset($_SESSION["qty"]); unset($_SESSION["selectedProductBuy"])?>">
 <button type="button" class="btn btn-primary">Return to Homepage</button>
</a>
</center>
