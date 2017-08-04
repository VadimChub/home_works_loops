<?php

for ($i = 0; $i < 10; $i++){
    $arr [] = rand();
}
$maximum = max($arr);
$minimum = min($arr);


foreach($arr as $key => $value){
    if ($value == $maximum) {
        $max_position = $key;
    }
    elseif ($value == $minimum) {
        $min_position = $key;
    }
}

$arr[$min_position] = $maximum;
$arr[$max_position] = $minimum;

