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

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
for ($row = 0; $row < 4; $row++) {
    echo "Row number $row";
    echo "\n";
    for ($col = 0; $col < 3; $col++) {
      echo "".$cars[$row][$col]."\n";
    }
    echo "\n";
  }
  