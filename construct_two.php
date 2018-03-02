<?php
class example {

function sayhello(){

echo "hello saying in simple way";

}
//if we want to call without a constructor then we must call function with obect
/*function __construct(){

echo "hello saying inside constructor";

//it ill call first without acces method with object

}*/
}
/*if we want to acces sayhello methd then

we mush call the function with the object like this

$sample_obj = new classname;

then

$sample-obj->methodname();

*/
$sampleobj=new example;
?>
