<?php

$days_arr = [1 => 'Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];

$date = getdate();
$day = $date["wday"];

foreach ($days_arr as $key => $value) {
    if ($key == $day) {
        echo "<i>$value</i></br>";
        continue;
    }
    echo "$value </br>";
}