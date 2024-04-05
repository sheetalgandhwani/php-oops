
                             

<?php

interface A
{

    public function area($l,$w);
}

interface B
{

    public function volume($r);
}



class rectangle implements A
{
    
    public $area;

    public function area($length,$width)
    {
     $area=$length*$width;
    echo"area of rectangle is:$area"."\n";
    }
}
class sphere implements B
{
    public function volume($radius)
    {
        $vol=(4/3)*M_PI*pow($radius,3);
        echo"volume of sphere is: $vol";

    }

 }

 $rect=new rectangle();      
 $rect-> area(25,25);


 $sph=new sphere();       
 $sph->volume(5);

?>