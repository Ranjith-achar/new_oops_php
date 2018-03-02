<?php
class one{
//upper claas 1

public function a(){

  echo "inside first class";
}


}

interface two{
//upper claas 2
//we can only declare a function not possible to define
//it can hold only constant variables
public function b();

}

class three extends one implements two{

//defining a interface function inssi8de this class

function b(){

  echo "this is a function defenation of interface ";

}




}

$objthree=new three;
$objthree->a();
echo "</br>";
$objthree->b();


?>
