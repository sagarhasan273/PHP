<?php
$car = array("BMW", "TOYOTA", "VOLVO", "FORD");

echo "I like $car[0], $car[1], $car[2] and $car[3]";

foreach ($car as $cr){
    echo $cr."\n";
}

// ----------------Associative Array------------
$fruits = array();
$fruits["summer"] = "mangos";
$fruits["winter"] = "apples";
$fruits["spring"] = "oranges";
$fruits[3] = "kiwi";


foreach ($fruits as $fts => $ft){
    echo $fts." => $ft\n";
    echo $fruits[$fts];
    echo "\n";
}

