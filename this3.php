<?php
class Car {

    // The properties
    //public $comp;
    public $color;
    public $model = 'maruthi';
    //public $hasSunRoof = true;

    // The method that says hello
    public function hello()
    {
      return "Beep I am a <i>" . $this -> color .
         "</i>, and I am <i>" . $this -> model;
    }
}

// We can now create an object from the class.
$bmw = new Car();
//$mercedes = new Car();

// Set the values of the class properties.
$bmw -> color = 'blue';
$bmw -> model;


//$mercedes -> comp = "Mercedes Benz";
// Call the hello method for the $bmw object.

echo $bmw -> hello();

?>
