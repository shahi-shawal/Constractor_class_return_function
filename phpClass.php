<?php
include "constractor.php"
   
   class students{
  public $id, $name, $email, $address;
  
  function allstudent()
  {
  	echo $this->id. "<br>";
  	echo $this->name. "<br>";
  	echo $this->email. "<br>";
  	echo $this->address. "<br>";
  }
   }

$num1= new students();
$num1->id=234;
$num1->name='rahim';
$num1->email='gdgsfdf';
$num1->address='jgfgj';
$num1-> allstudent();

$num1= new students();
$num1->id=664;
$num1->name='karim';
$num1->email='gdgsfdf';
$num1->address='jgfgj';
$num1-> allstudent();








?>