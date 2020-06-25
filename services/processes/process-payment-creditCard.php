<script src="../js/creditCardFormValidation.js"/></script>
<style>
<?php include '../css/stylesheet.css'; ?>
</style>
<?php
    include ('../services/DB_Operations.php');
 ?>
 <form action="../website/confirm-checkout.php" method="POST">
   <!-- Text input box for delivery Address -->
    <div class="d-inline">
     <div class="form-group">
       <label for="formGroupExampleInput">Delivery Address</label>
       <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Address"
        value="<?php echo "".@$_SESSION['address']; ?>" required>
     </div>
     <div class="custom-control custom-checkbox">
       <input type="checkbox" class="custom-control-input" id="rememberAddress" name="rememberAddress"
        <?php if(@$_SESSION['address'] != null){echo "checked";}?>>
       <label class="custom-control-label" for="rememberAddress">
         Remember Address</label>
     </div>
    </div>
    <div class="form-group">
       <label for="formGroupExampleInput">Credit Card Number</label>
       <input type="text" class="form-control" name="creditCardNumber" placeholder="Enter Credit Card Number" id="creditCardNumber" required>
     </div>
     <div class="form-group ">
       <label for="typeOfCard">Credit Card Type</label>
       <select name="typeOfCard" id="typeOfCard" class="form-control" onchange="checkIfSelectionIsNull()">
         <option value="null">---Please select your type of Card---</option>
         <option value="Visa" id="visa">Visa</option>
         <option value="Master Card" id="masterCard">Master Card</option>
       </select>
     </div>
     <div class="form-group">
       <label for="formGroupExampleInput">Credit Card Expiration</label>
       <input type="text" class="form-control w-50 p-3" name="creditCardExpiration" placeholder="Enter Credit Card Number" id="creditCardExpiration" required>
     </div>
     <div class="form-group">
       <label for="formGroupExampleInput">Security Code</label>
       <input type="text" class="form-control form-control-sm  w-25 p-3" name="securityCode" placeholder="Enter security Code" id="securityCode" required>
     </div>
   <!-- CREATION OF CREDITCARD ID  -->
   <input type="text" hidden value="2" name="payMethod">
   <!-- Button for submit -->
   <input type='submit' disabled class='btn btn-success' name="requestCheckoutButton" value='Proceed' id="requestCheckoutButton" >
   <a href="../website/browse.php"> <button type="button" class="btn btn-secondary">Go Back</button> </a>
 </form>
