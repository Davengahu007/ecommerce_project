<?php

$number = 10;

function num(){
  global $number;
  echo $number;
}

num();
?>
