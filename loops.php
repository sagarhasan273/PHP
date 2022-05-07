<?php
$x = 0;

while ($x < 5){
    echo "$x\n";
    $x++;
}

do{
    echo "$x\n";
    $x--;
}while($x > 0);

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x \n";
}

$colors = array("red", "green", "blue", "yellow");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($colors as $clr){
    echo "Color is $clr\n";
}

foreach($age as $x => $ag){
    echo "$x => $ag\n";
    continue;
}