<?php

class Box {
    public $width;
    protected $length;
    private $height;

    public function __construct($width, $length, $height) {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }
    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'Metal';
    public $massPerUnit = 2;

    public function changeWidth(){
        $this->width = 123 ;
    }
    public function mass(){
        return $this->volume() * $this->massPerUnit;
    }
}

$metalBox = new MetalBox(2, 3, 4);
$metalBox->width = 123;
var_dump($metalBox->width);
var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->mass());

