<?php

$json_val = json_encode([
    'posts' => 'image',
    'int' => 88,
    'dbl' => 88.525,
]);

file_put_contents('images.json', json_encode($json_val));
