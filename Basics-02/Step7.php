<?php
function pythonToPhp($word){
    $php = str_replace("PHP","Python", $word);
    return $php;
}
function phptopython($word){
    $python = str_replace("Python","PHP", $word);
    return $python;
}

echo pythonToPhp("I learn PHP,and ").phptopython("Python\n");