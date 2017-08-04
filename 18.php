<?php

$days_arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];

foreach ($days_arr as $key => $day) {
    if ($key == 5 || $key == 6) {
        echo "<strong>$day</strong></br>";
        continue;
    }
    echo "$day </br>";
}