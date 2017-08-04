<?php

$some_int = 5535145436935;
$desired_number = 9;

function get_quantity($numb, $desired){
    $count = 0;
    $numb_length = strlen($numb);
    $numb = strval($numb);
    $desired = strval($desired);
    for ($i = 0; $i < $numb_length; $i++){
        if ($numb[$i] === $desired){
            $count++;
        }
    }
    return $count;
}
