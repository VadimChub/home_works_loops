<?php

$array = array(4, 2, 5, 19, 13, 0, 10);
$flag = 0;
foreach ($array as $e) {
    if ($e == 2 || $e == 3 || $e == 4){
       $flag = 1;
    }
}
if ($flag == 1) {
    echo "Eсть!";
}
else {
    echo "Нет!";
}