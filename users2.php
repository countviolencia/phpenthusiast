<?php
/**
 * 
 */
class User
{
    //properties
    private $firstName;
    
    
    //methods
    public function setFirstName($str)
    {
        $this->firstName = $str;
    }
    public function getFirstName()
    {
        return "My first Name is". $this -> firstName;
    }
}

$user1 = new User();
$user1 -> setFirstName("Count");
echo $user1 -> getFirstName();

?>