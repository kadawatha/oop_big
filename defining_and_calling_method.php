<?php


class Dress{

    public $color="Red";
    public $fabric="Linen";
    public $design="Slim Fit Blazer";

    public function displayinfo(){

        echo "The info about the dress";

    }


}



$dressobject=new Dress();
$dressobject->displayinfo();




























