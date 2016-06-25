<?php

//Your practice code
 class Users {
     public $firstName;
     public $lastName;
     public $emailAddress;
     
     public function hello($firstName, $lastName){
         return "Hello $firstName $lastName welcome to life";
     }
     
     public function verifyEmail(){
         
         return "Is ".$this -> emailAddress ." your valid email address?";
     }
     
 }
 
 $users = new Users();
 $welcome =  $users -> hello('Hezzy', 'Okello');
 echo $welcome;
 echo "<br />";
$users->emailAddress = "ronnixo@gmail.com";
echo $users->verifyEmail();
 
 ?>