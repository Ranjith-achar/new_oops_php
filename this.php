<?php

class student{


private $name;


public function setdata($sname){

  $this->name=$sname;


}
public function showdata(){

echo "$this->name</br>";


}



}

//creating object
$ramesh=new student;
$suresh=new student;

$ramesh->setdata("ramesh");
$ramesh->showdata();
$suresh->setdata("suresh");
$suresh->showdata();

?>
