<?php

class building
{
    public function __construct()
    {
        echo"this is builing class"."\n";
    }
}

class apartment extends building
{
   public function __construct()
   {
    parent:: __construct();
    echo"This is apartment class"."\n";
   }
}
$ap=new apartment();
print_r($ap);

?>