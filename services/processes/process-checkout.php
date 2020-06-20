<script src="../js/checkout.js"/></script>
<style>
<?php include '../css/stylesheet.css'; ?>
</style>
<?php
    include ('../services/DB_Operations.php');
    include ('../services/utilities/bought-items.php');
 ?>

<div class="container">
  <form action="../website/confirm-checkout.php" method="POST">
    <!-- Text input box for delivery Address -->
    <div class="form-group">
      <label for="formGroupExampleInput">Delivery Address</label>
      <input type="text"  class="form-control" name="address" placeholder="Enter Address" required>
    </div>

     <select name="paymentMethod" class="form-control" name="orderPaymentSelect" id="orderPaymentSelect" onchange="checkIfSelectionIsNull(), onSelectCreditCard()">
       <option value="null">---Please select your payment---</option>
       <option value="COD" id="COD">COD</option>
       <option value="Credit Card" id="creditCard">Credit Card</option>
     </select>
    <br><br>


    <div id="creditcard-form">
        <div class="form-group">
          <label for="formGroupExampleInput">Credit Card Number</label>
          <input type="text" class="form-control" name="creditCard" placeholder="Enter Credit Card Number">
        </div>
        <div class="form-group">
          <select name="typeOfCard" class="form-control" id="typeOfCard" onchange="checkIfSelectionIsNull()">
            <option value="null">---Please select your type of Card---</option>
            <option value="Visa" id="visa">Visa</option>
            <option value="Master Card" id="masterCard">Master Card</option>
          </select>
        </div>
    </div>

    <p>Test</p>

    <br>
    <!-- Button for submit -->
    <input type='submit' disabled class='btn btn-success' name='' value='Submit' id="requestCheckoutButton" >
  </form>
</div>
