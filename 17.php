<?php

$months_array = [1 =>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$date = getdate();
$current_month = $date['mon'];
$month = $months_array[$current_month];
foreach ($months_array as $value){
    if ($month === $value) {
        echo "<strong>$value</strong> </br>";
        continue;
    }
    echo "$value </br>";
}
