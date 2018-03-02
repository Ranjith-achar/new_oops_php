<?php

class fan{


public function parents(){

echo" speed is 80";

}


}



class UsbFan extends fan{





}



class TableFan extends fan{





}


//creating object of any child class which calls the method of parent class


 $UsbFanObj=new UsbFan;

 $UsbFanObj->parents();




?>
