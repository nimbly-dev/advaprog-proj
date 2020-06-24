<?php

  // include ('ProductBean.php');

  // define('TIRE_PRICE', 100);
  // define('OIL_PRICE', 50);
  // define('SPARK_PRICE', 30);
  //
  // $tires = new Product();
  // $oil = new Product();
  // $sparkPlugs = new Product();
  //
  // $tires->instantiate('Tires',TIRE_PRICE,'tireQty');
  // $oil->instantiate('Oil', OIL_PRICE,'oilQty');
  // $sparkPlugs->instantiate('Spark',SPARK_PRICE,'sparkQty');

  

  // PRICING

  define('TEST_PRICE', '100');

  define('TEST_IMG','../assets/products-picture/product-1.png');

  $Test = new Product();

  //  instantiate($productName,$productID,$productPrice,$productDescription)

  $Test->instantiate('Test','1',TEST_PRICE,'Good Test',TEST_IMG);

  // you didn't order anyting swine
  $productList = array($Test);

 ?>
