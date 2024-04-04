<?php



//Write a program to generate the Fibonacci sequence up to 100.


// Function to generate Fibonacci using linit as the Parameter

function generateFibonacci($limit) {

    // Initialize variables for the first two Fibonacci numbers

    $num1 = 0;
    $num2 = 1;

    // Output the first two Fibonacci numbers
    echo "$num1, $num2, ";

    // Generate subsequent Fibonacci numbers until reaching the limit
    while (($nextTerm = $num1 + $num2) <= $limit) {
        echo "$nextTerm, "; // Output  next Fibonacci number

        // Update variables for the next iteration

        $num1 = $num2;
        $num2 = $nextTerm;
    }
}

// Call the function wiiith limit as the parameter
generateFibonacci(100);

