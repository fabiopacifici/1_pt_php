<?php


/* 
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/
$list = [];

while (count($list) < 15) {

  // generate a random nunber
  $randomNumber = rand(1, 100);

  // check if the generated number is not in_array $List
  if (!in_array($randomNumber, $list)) {
    //$list[] = $randomNumber;
    array_push($list, $randomNumber);
  }
  // - push it

}

var_dump($list);
