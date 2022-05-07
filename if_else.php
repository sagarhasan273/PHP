<?php
$x = date("d");
echo $x."\n";
if ($x < 6){
    echo "Have a good day!";
}elseif($x < 10) {
    echo "Have a busy day!";
}else{
    echo "Else";
}
