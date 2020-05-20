<?php

  class Product{

    private $productName;
    private $productID;
    private $productPrice;
    private $productDescription;
    private $picturePath;

    public function __construct(){

    }

    function instantiate($productName,$productID,$productPrice,$productDescription,$picturePath){
      $this->productName = $productName;
      $this->productID = $productID;
      $this->productPrice = $productPrice;
      $this->productDescription = $productDescription;
      $this->picturePath = $picturePath;
    }



    public function __get($fieldName){
        return $this->$fieldName;
    }


    public function __set($fieldName,$fieldValue){
      $this->$fieldName = $fieldValue;
    }



  }



 ?>
