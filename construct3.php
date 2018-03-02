<?php

/*

use of constructor
ill be used in a such a situation where calling a database connection
then we no nned call that function or coninection again and agin if  we
declare inside a construct it ill calls autometicaslly whereever it want
*/


class example{

private $name;
//if we want to acces this varible erlierr we must use getter and setter

//biut now

public function __construct($argument){


//passing $name variable as a argument

echo $this->name=$argument;

}

}
//creating object
$object=new example("values is passed"); //passed value directly

?>
