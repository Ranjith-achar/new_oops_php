<?php


class car{


 function starting(){


  echo "car started with normal";


 }



}

class sportscar extends car{

//now creatinga a function with the same name as parebnt class


function starting(){

  echo"sports car is starting with self start";
//now create object of child class and check method
}


}

//now create a object of car

//object of car parent class

$carobject=new sportscar;

$carobject->starting();






?>
