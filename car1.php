<?php
/**
 * 
 */
class Car
{
    private $model = '';
    
    //a constuctor method
    public function __construct($model = null)
    {
        // Only if the model value is passed it will be assigned
        if ($model){
            $this -> model = $model;
        }
    }
    
    public function getCarModel()
      {  
        return "The <b>" .__CLASS__. "</b> Model is: " . $this -> model;
    }
}
//pass the value of the variable once we create the object
$car1 = new Car("Bugatti");

echo $car1 -> getCarModel();
?>