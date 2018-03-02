<?php

class parents{

public function parent_func(){

echo "this is a parent function";

}


}

class children extends parents{

//now u can aaces the function of parent without creating inside child


public function children(){

echo "inside of child class ";

}


}
//creating a object first whic calls only the child function

$obj_child=new children;
$obj_child->children();

//now calling the parent method inside a child class
echo "</br>";

$obj_child=new children;
echo "</br>";
$obj_child->parent_func();

?>
