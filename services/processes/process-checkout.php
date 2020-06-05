<?php
    include ('../services/DB_Operations.php');
    include ('../services/utilities/bought-items.php');
 ?>
<div class="container">
  <form action="../website/confirm-checkout.php" method="POST">
    <!-- Text input box for delivery Address -->
    <div class="form-group">
      <label for="formGroupExampleInput">Delivery Address</label>
      <input type="text" name="addr" class="form-control" name="address" placeholder="Enter Address" required>
    </div>

    <!-- Dropdown for Payment Method -->
    <div class="dropdown">
      <!--button class="btn btn-secondary dropdown-toggle"
              type="button"  data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" name="paymentMethod" required>
       Payment Method
     </button-->
     <select name="paymentMethod">
       <option value="Credit Card">Credit Card</option>
       <option value="COD">COD</option>
       <option value="I owe you">I owe you</option> 

    <br><br>
    </div>
    <!-- Button for submit -->
    <input type='submit'  class='btn btn-success' name='' value='Submit'>
  </form>
</div>
