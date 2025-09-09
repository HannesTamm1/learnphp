<?php

function hello(){
    var_dump('Hello');
}

Hello();
Hello();
Hello();


function name($name = 'Unknown'){
    var_dump('Hello ' . $name);
}

name('Hannes');
name('Brother');

function helloNameAndAge($name = 'Unknown', $age){
    var_dump("Hello $name and you are $age years old");
}

helloNameAndAge('Hannes', 18);
helloNameAndAge('Brother', 20);

function stuff(...$args){
    var_dump(...$args);
}

stuff(1, 2, 3, 4, 5);
stuff(1, 2, 3, 4, 5, 6, 6);

function sum($a, $b){
    return $a + $b;
}

$answer = sum(1, 5);
var_dump($answer);


function biggerOrSmaller($a){
    if($a > 10){
        return 'Bigger';
    }
    return 'Smaller';
}
var_dump(biggerOrSmaller(1));
var_dump(biggerOrSmaller(11));

function recursive($i){
    if($i < 10){
        var_dump($i);
        recursive($i + 1);
    }
}
recursive(0);