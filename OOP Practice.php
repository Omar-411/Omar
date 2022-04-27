<?php

class mobile {
    public $brand;
    public $color = "black";

    function setBrand($brand){
        $this->brand = $brand;
    }

    function getBrand(){
        return $this->brand;
    }

    public function turnOn()
    {
        return "Welcome From {$this->brand}";
    }
    public function printMessage()
    {
        echo $this->turnOn();
    }
    public function specs()
    {
        print_r($this);
    }   
}


$samsung = new mobile;
// $samsung->brand = 'samsung';
$samsung->setBrand('samsung');
// echo $samsung->brand;
$samsung->getBrand();

// echo $samsung->turnOn();

// $samsung->printMessage();

$samsung->specs();