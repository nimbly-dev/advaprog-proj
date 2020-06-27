<script src="../js/checkout.js"/></script>
<style>
<?php include '../css/stylesheet.css'; ?>
</style>
<?php
    include ('../services/DB_Operations.php');
 ?>

 <form action="../website/confirm-checkout.php?" method="POST">
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
   <br>
   <!-- CREATION OF COD ID WOAH -->
   <input type="text" hidden value="1" name="payMethod">
   <!-- Button for submit -->
   <input type='submit'  class='btn btn-success' name="requestCheckoutButton" value='Proceed' id="requestCheckoutButton" >
   <a href="../website/browse.php"> <button type="button" class="btn btn-secondary">Go Back</button> </a>
 </form>
