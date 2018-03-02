<?php
class myclass{

public $property1="property 1 value";

public function method1(){

return $this->property1;


public function method2($new){

$this->property1=$new;

}


}



}

$obj1=new myclass;
echo $obj1->method1();
echo $obj1->method2("new valuie added");

?>
