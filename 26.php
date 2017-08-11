<?php

for ($i = 0; $i < 20; $i++){
    $arr [] = rand(1,100);
}

$sum = 1;
for ($i = 1; $i < sizeof($arr); $i++) {
    if ($arr[$i] > 0 && $i%2 == 0) {
        $sum = $sum * $arr[$i];
    }
}


for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] > 0 && $i%2 !== 0){
        echo "$arr[$i] </br>";
    }
}