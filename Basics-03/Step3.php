<?php

$string = "hello my name souad souad is my name";

function countword($str, $word){
    $arr = explode(" ", $str);
    $counter = 0;
    $results = 0;
    while($counter < count($arr)){
        if($arr[$counter] == $word){
            $results +=1;
        }
        $counter++;
    }
    echo "\n".$results."\n";
}

countword("\n".$string, "souad");