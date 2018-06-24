<?php


class Dress{

    public $color="red";
    public $fabric="linen";
    public $design="slim fit blazer";



    public function displayinfo(){

        echo $this->color;
        echo $this->design;
        echo $this->fabric;

    }







}



$dressobject= new Dress();

$dressobject->displayinfo();















































