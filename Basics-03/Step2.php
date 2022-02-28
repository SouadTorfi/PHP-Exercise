<?php
function factorial($n){
    $x = $n;
    $total = 1;
    while ($x > 1){
        $total = $total * $x;
        $x --;
    }
    return $total;
}
echo "\n".factorial(6)."\n";
echo factorial(3)."\n";

?>