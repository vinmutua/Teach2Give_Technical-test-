<?php
//Write a program that counts the number of vowels in a sentence.

for ($i = 1; $i <= 100; $i++) {
  // Check for divisibility by 3 and 5
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "FizzBuzz" . PHP_EOL;
  } else if ($i % 3 === 0) {
    echo "Fizz" . PHP_EOL;
  } else if ($i % 5 === 0) {
    echo "Buzz" . PHP_EOL;
  } else {
    echo $i . PHP_EOL;
  }
}









