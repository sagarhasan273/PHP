<?php
/*
$x = 5;

// function mytext(){
//     echo "This will show us a error for Global scope $x";
// };

function mytext(){
    $x = 7; // local scope inside the function.
    echo "This will show us a error for Global scope $x\n";
};
mytext();

echo "x variable can be used outside of function.\n";
*/


// ----------------next one -----------
/*
$x = 8;
$y = 8;

function mytext(){
    global $x, $y;
    $y = $x + $y;
}
mytext();
echo $y;
*/


// --------------------next one --------------

function mytext(){
    static $x = 0;
    echo $x;
    $x++;
}
mytext();
echo "\n";
mytext();
echo "\n";
mytext();
echo "\n";
mytext();
echo "\n";
mytext();

