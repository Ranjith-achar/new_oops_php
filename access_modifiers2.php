<?php

class food{

  private $fname;

  function setprintnme($frname){

     $this->fname=$frname;
}
function getprintname(){

echo $this->fname;

}
}

$foodobj= new food;
$foodobj->setprintnme("rajith");
$foodobj->getprintname();

/*

insted of private variale

it was public
acees it as directly

objject->propertynam
e="value ";//assigng value
 during execution

*/


?>
