<?php
class food{

protected $fname;


public function setName($firstname){

$this->fname=$firstname;

}
public function getName(){

echo $this->fname;

}
}


class junkfood extends food{
/*if we make parent class variables as private
then it would be difficult to acces and do operations in
chils class so if we make its as protected we can use this
member as a private in child class(extended class)*/

private $newjunkie="gobi munchoori";

public function showinchidclass(){

      $this->getName($this->newjunkie);

}
}
/*$obj1=new food;
$obj1->setName("value is set");
$obj1->getName();*/
$junkobj= new junkfood;
$junkobj->showinchidclass();
$junkobj->getName();

?>
