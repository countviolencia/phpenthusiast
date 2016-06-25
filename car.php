<?php

class Car {
    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    
    //methods
    public function hello (){
        return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color."</i>";
    }
}


$bmw = new Car(); //instantiation
$mercedes = new Car();

echo $bmw -> color;//get value of variable
echo "<br />";
echo $mercedes -> color;
echo "<hr />";
$bmw -> color = 'blue';//set variable value

$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;
echo "<br />";
echo $mercedes -> comp;
echo "<hr />";

echo $bmw -> hello();//call methods like how we call variables
echo "<br />";
echo $mercedes -> hello();