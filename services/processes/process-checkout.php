<?php
    include ('../services/DB_Operations.php');
    include ('../services/utilities/bought-items.php');
 ?>
<div class="container">
  <form action="../website/confirm-checkout.php" method="POST">
    <!-- Text input box for delivery Address -->
    <div class="form-group">
      <label for="formGroupExampleInput">Delivery Address</label>
      <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
    </div>
    <!-- Dropdown for Payment Method -->
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle"
              type="button"  data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" name="paymentMethod" required>
       Payment Method
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <a class="dropdown-item" >Visa</a>
        <a class="dropdown-item" >Cod</a>
        <a class="dropdown-item" >I owe you</a>
        <a class="dropdown-item" >Credit Card Number</a>
        <a class="dropdown-item" >Foods</a>
      </div>
    <br><br>
    </div>
    <!-- Button for submit -->
    <input type='submit' class='btn btn-success' name='' value='Submit'>
  </form>
</div>
