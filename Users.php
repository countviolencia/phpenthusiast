<?php

//Your practice code
 class User {
     public $firstName;
     public $lastName;
     public $emailAddress;
     
     public function hello($firstName, $lastName){
         return "Hello $firstName $lastName welcome to life";
     }
     
     public function register(){
         echo $this->firstName . " " . $this->lastName ." registered";
         
         return $this;
     }
     
     public function mail(){
         echo " emailed";
         
     }
     
     public function verifyEmail(){
         
         return "Is <b>".$this -> emailAddress ."</b> your valid email address?";
     }
     
 }
 
 $user = new User();
 $welcome =  $user -> hello('Hezzy', 'Okello');
 echo $welcome;
 echo "<br />";
$user->emailAddress = "ronnixo@gmail.com";
echo $user->verifyEmail();
echo "<hr />";

$user1 = new User();
$user1 -> firstName = "Jane";
$user1 -> lastName = "Roe";
 
 echo $user1 ->register()->mail();
 ?>