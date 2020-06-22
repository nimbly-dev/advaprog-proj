
<script src="../js/checkout.js"/></script>
<style>
<?php include '../css/stylesheet.css'; ?>
</style>
<?php
    include ('../services/DB_Operations.php');

 ?>
 <form action="../website/confirm-checkout.php" method="POST">
   <!-- Text input box for delivery Address -->
   <div class="form-group">
     <label for="formGroupExampleInput">Delivery Address</label>
     <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Address" required>
   </div>
   <br>
   <!-- CREATION OF COD ID WOAH -->
   <input type="text" hidden value="1" name="payMethod">
   <!-- Button for submit -->
   <input type='submit'  class='btn btn-success' name="requestCheckoutButton" value='Proceed' id="requestCheckoutButton" >
 </form>
