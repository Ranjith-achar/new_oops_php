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







?>
