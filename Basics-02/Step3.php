<?php
$var1 = 32; 
$var2 = 45;
 
echo "\nThe number before swapping is:\n";
echo "Number a = ".$var1." and b = ".$var2;

$temp = $var1;
$var1 = $var2;
$var2 = $temp;
 
echo "\nThe number after swapping is: \n";
echo "Number a = ".$var1." and b = ".$var2 ."\n";
?>