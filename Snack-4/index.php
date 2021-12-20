<?php

$myNewInt = rand(1, 100);

function getRandomArray($min, $max, $nItems){

  $newArray = [];

  if(($max - $min) < $nItems){
    $nItems = $max - $min;
  }

  while(count($newArray) <  $nItems){
    $number = rand($min,$max);
    if(!in_array($number,$newArray)){
      $newArray[] = $number;
    }
  }

  return $newArray;

}

var_dump(getRandomArray(1,100,15));


?>