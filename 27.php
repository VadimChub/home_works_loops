<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');

function make_table ($col, $row, $array_of_colors){

    echo "<table>";

    for ($i = 0; $i < $col; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $row; $j++) {
            $array_lenght = sizeof($array_of_colors);
            $color = $array_of_colors[rand(0, $array_lenght-1)];
            echo "<td style = 'background-color: $color' >"; echo rand(0,10000); echo "</td>";

        }

            echo "</tr>";

        }
        echo "</table>";

}


make_table(rand(0,10),rand(0,10),$colors);