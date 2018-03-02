<?php
class food{


public $fname;

function printfoodname(){

   echo "the food name is returning ".$this->fname."</br>";



}





}

//accesing $fname outside the cllass but still its acceing


$foodobj= new food;
$foodobj->fname="ranjith";
$foodobj->printfoodname();




?>
