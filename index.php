<?php

class Box {
    public $width;
    public $length;
    public $height;

    public function __construct($width, $length, $height) {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }
    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$box1 = new Box(10, 10, 10);

