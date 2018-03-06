<?php

class food{


private $fname;


//to acces private members

public function setName($frname){

$this->fname=$frname;

}
public function getName(){

echo $this->fname;

}



//creating obect

}




class junkfood extends food{

private $newjunkie="gobi";

/*have to acces this variable
 while calling method
getname while creating object of
child class junkfood*/

//we cannot acces private
//variables direcly while creating
/* objects so wwe need to create one function
 then acces the fumction of parent class and
 pass the thiss calss variable as arument*/

function passvaluse(){

    echo $this->getName($this->newjunkie);

}

}
/*$obj=new food;
$obj->setName("newvalue");
$obj->getName();*/

$obj=new junkfood;
$obj->passvaluse();
$obj->getName();

?>
