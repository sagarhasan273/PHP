<?php
$x = 5;
print(is_int($x)."\n");

$x = 7.5;
print(is_float($x)."\n");

$x = 11e12423;
print(var_dump(is_finite($x)));
print(is_infinite($x)."\n");

$x = 344334.34534;
print((int)$x)

?>