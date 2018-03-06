<?php

class car {


public $model;
public $color='red';




public function hello(){//claass own methods and properties

return $this -> model." ".$this -> color;

/*The $this keyword indicates that we use
the class's /%own methods and properties,
and allows us to have access%/ to them withi
n the class's scope.*/


}


/*
we can use this keyword acces current class


members within the class scope only

*/

//craeting objects






}


$obj = new car();

//we can pass variable value by accesing object only
//we cannot assian directly to variable

$obj -> model='hyndai';

$obj -> color;

echo $obj -> hello();


?>
