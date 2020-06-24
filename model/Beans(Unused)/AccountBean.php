<?php

  class AccountBean{

    private $username;
    private $password;
    private $email;
    private $firstName;
    private $lastName;
    private $middleName;

    public function __construct(){

    }

    function instantiate($username,$password,$email,$firstName,$lastName,$middleName){
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->middleName = $middleName;
    }



    public function __get($fieldName){
        return $this->$fieldName;
    }


    public function __set($fieldName,$fieldValue){
      $this->$fieldName = $fieldValue;
    }



  }



 ?>
