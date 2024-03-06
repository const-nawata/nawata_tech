<?php

$json_val = json_encode([
    'host' => $_GET['host'],
    'int' => 88,
    'dbl' => 88.525,
]);

//print_r('KKKKKKKKKKKKKKKKKKK');

file_put_contents('images.json', json_encode($json_val));
//file_put_contents('images.json', json_encode(["h"=>$_GET['h']]));


