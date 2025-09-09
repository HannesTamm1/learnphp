<?php

for( $i = 10; $i > 0; $i-- ){
    var_dump( $i );
}

for( $i = 10; $i < 1_000_000; $i*= 10){
    var_dump( $i );
}
$time = time();
$i = 0;


while(time()< $time+10){
    var_dump(time());
    $i++;
}
var_dump( $i );

while($i < 10){
    var_dump('WHILE');
}
do {
    var_dump('DO');

}while($i < 10);



$array = [1, 2, 3];
foreach( $array as $k => $v ){ 
    var_dump( $value );
}

$a = 1;
$b = &$a;
$b = 2;
var_dump( $a );

foreach($array as $v ){
    $value *= 2;
}

var_dump( $value );