<?php

$array = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($array as $number){
    $result += ($number*$number);
}
echo $result;