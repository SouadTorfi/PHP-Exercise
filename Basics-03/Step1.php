<?php
// for($row=1;$row<=8;$row++)
// {
//    for ($star=1;$star<=$row;$star++)
//     {
//      echo "*";
//      }
//      echo "\n";
// }

function stars($n){
    $x = 0;
    while ($x < $n) {
        for ($i=0; $i <= $x ; $i++) { 
            echo "*";
        };
        echo "\n";
        $x ++;
    }
}

stars(8)

?>