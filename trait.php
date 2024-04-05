
                               
<?php

trait person{
    
    public function talk()
    {
        echo"Animals can talk"."\n";
    }

    public function walk()
    {
         echo"Animals can walk"."\n";
    }

}

class Data
{
          
    use person;

}

class Driver
{
    
    use person;
}

$obj=new Data();
$obj->talk();
$obj->walk();


$obj1=new Driver();
$obj1->talk();
$obj1->walk();



?>