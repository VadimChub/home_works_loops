<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$ru = array();
$en = array();

foreach ($arr as $rus => $eng) {
    $ru[] = $rus;
    $en[] = $eng;
}

var_dump($ru);
var_dump($en);