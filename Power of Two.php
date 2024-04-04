<?php


//Write a program that takes an integer as input and returns true if the input is a power of two.


//function
function is_power_of_two($number) {

  // code for negative numbers
  if ($number <= 0) {
    return false;
  }

  // Efficiently check if only one bit is set using bitwise AND with number - 1
  return ($number & ($number - 1)) === 0;
}

// Get user input with validation
do {

  $input = readline("Enter an integer: ");

} 

while (!is_numeric($input));

$number = (int) $input;

$result = is_power_of_two($number);

if ($result) {
    //if the result is true
  echo "$number is a power of two." . PHP_EOL;
} else {
  echo "$number is not a power of two." . PHP_EOL;
}

