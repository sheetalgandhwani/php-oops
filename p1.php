<?php

class animal {

    public function displayData()
    
       {
 
          echo"this is display data".PHP_EOL; 

       }


    public function display($name,$age)
    {

        echo"your name is : $name and age is $age years";
    }   


}

$obj=new animal();
$obj-> displayData();
$obj->display("ram",24);


?>
