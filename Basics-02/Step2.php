<?php


function greaterFn($num){
  if($num>30){
      Echo $num." is greater than 30 \n";
  }
  else if($num>20){
    Echo $num." is greater than 20 \n";
  }
  else if($num>10){
    Echo $num." is greater than 10 \n";
  }
  else{
    Echo $num." is less than 10 \n";
  }
  return 'string';
}
greaterFn(40); // 40 is greater than 30
greaterFn(21); // 21 is greater than 20
greaterFn(12); // 12 is greater than 10
greaterFn(8);  // 8 is less than 10
?>