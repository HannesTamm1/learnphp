<?php

class Cat {
    public function __construct() {
        var_dump('Class was created');
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __toString(){
        return 'Mjäu';
    }

    public function __destruct(){
        var_dump("The class was destored");
    }

    public function __get($name){
        var_dump($name);
        return 'Hell yeah';
    }

    public function __set($name, $value){
        var_dump($name, $value);
        
    }
    
}

function makeCat(){
    $cat = new Cat();
}

$kitty = new Cat();
var_dump($kitty);
var_dump($kitty->mood);
$kitty -> color = 'Rainbow';
$kitty->throwShit('Many', 'smelly', 'why');
echo $kitty;
$kitty = 1;
var_dump("Something");