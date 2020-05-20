<!-- Template for crendial-validators -->
<?php if(count($errors) > 0):  ?>
  <!-- Calls Error class on registration.css -->
  <div class="error">
    <!-- Foreach error it will print this -->
    <?php foreach ( $errors as $error): ?>
      <p> <?php echo $error; ?> </p>
    <?php endforeach ?>
  </div>
  <!-- End if there are no errors to be printed -->
<?php endif?>
