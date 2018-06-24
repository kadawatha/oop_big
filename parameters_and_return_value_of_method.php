<?php

class Dress{

    public $color="red";
    public $fabric="linen";
    public $design="slim fit";

    public function displayinfo(){

      echo "the info about the dress";
       echo $this->color;
       echo $this->fabric;
       echo $this->design;


    }

    public function helloworld($number1,$number2){

        return $number1+$number2;


    }





}


$dressobject= new Dress();
echo $dressobject->helloworld(20,30);













































