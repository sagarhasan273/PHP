<?php declare(strict_types=0);//The strict declaration forces things to be used in the intended way.

// function addNumbers(int $a, int $b) {
//     return $a + $b;
// }
// echo addNumbers(5, "5 days");

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight \n";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

// -------------declare return type--------------

function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2);