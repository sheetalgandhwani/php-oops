<?php

class user{

    public $name;

public function __construct($name)
{
    $this-> name = $name;
}
}
$obj=new user ("sheetal");
echo $obj->name;
?>