<?php

class Car {
    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    public $tank;
    
    //methods
    public function hello (){
        return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color."</i>";
    }
    
    // Add gallons of fuel to the tank when we fill it.
    public function fill($float){
        $this->tank +=$float;
        
        return $this;
    }
    
    
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride ($float){
        $miles = $float;
        $gallons = $miles/50;
        $this->tank-=$gallons;
        
        return $this;
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

echo "<hr />";

// Add 10 gallons of fuel, then ride 40 miles, 
// and get the number of gallons in the tank. 
$tank = $bmw -> fill(10) -> ride(40) -> tank;
 
// Print the results to the screen.
echo "The number of gallons left in the tank: " . $tank . " gal.";