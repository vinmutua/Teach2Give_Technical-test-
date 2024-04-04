<?php
//Question 5: Reverse Integer


function reverse_integer($number) {
  // Handle negative numbers
  if ($number < 0) {
    $number = abs($number); // Convert to positive for processing
    $isNegative = true; // Flag to handle negative sign later
  }

  $reversed = 0;
  $remainder = 0;

  // Extract digits and build the reversed number
  while ($number != 0) {
    $remainder = $number % 10;
    // Check for overflow (if reversed overflows INT_MAX when multiplied by 10)
    if ($reversed > PHP_INT_MAX / 10 || ($reversed == PHP_INT_MAX / 10 && $remainder > 7)) {
      return 0; // Handle overflow by returning 0
    }
    $reversed = $reversed * 10 + $remainder;
    $number = (int)($number / 10); // Ensure integer division
  }

  // Apply negative sign if necessary
  return $isNegative ? -$reversed : $reversed;
}

// Get user input with validation
do {
  $input = readline("Enter an integer: ");
} while (!is_numeric($input));

$number = (int) $input;

$reversed_number = reverse_integer($number);

if ($reversed_number === 0) {
  echo "Error: Input number caused integer overflow." . PHP_EOL;
} else {
  echo "Reversed number: $reversed_number" . PHP_EOL;
}

