<?php

 class building {

    public  $windowscount;
    public $wallcolor;
    public $roomscount;

    public function __construct($windowscount,$wallcolor,$roomscount)
    {
        $this -> windowscount=$windowscount;
        $this -> wallcolor =$wallcolor;
        $this -> roomscount =$roomscount;

    }

 }
 $windowscount=10;
  $wallcolor="white";
 $roomscount=3;


  $obj= new building($windowscount,$wallcolor,$roomscount);
$obj= new building(10,"white",3);   
  print_r($obj);

 ?>