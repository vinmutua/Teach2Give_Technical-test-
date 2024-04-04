<?php


//Write a program that prints the numbers from 1 to 100. For multiples of 3, print "Fizz"; for
//multiples of 5, print "Buzz"; and for numbers that are multiples of both 3 and 5, print
//"FizzBuzz".

// Loop through numbers from 1 to 100

for ($i = 1; $i <= 100; $i++) {

    // Check for multiples of both 3 and 5

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } 

    //  for multiples of 3
    else if ($i % 3 == 0) {
        echo "Fizz\n";
    } 
    // Check for multiples of 5
    else if ($i % 5 == 0) {
        echo "Buzz\n";
    } 
    // For rest of numbers, just print the number itself
    else {
        echo "$i\n";
    }
}


