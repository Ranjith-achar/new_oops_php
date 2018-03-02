<?php
class myclass{

public $name="ranjith";

public function setproperty($new){

 $this->name=$new;

}
public function getproperty(){

 return $this->name;

}

}

$obj = new myclass;

echo $obj->getproperty();
echo $obj->setproperty("this is a new valuse");
echo "</br>";
echo $obj->getproperty();
//var_dump($obj);



?>
