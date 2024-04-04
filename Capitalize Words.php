<?php
// Write a program that accepts a string as input, capitalizes the first letter of each word in the
//string, and then returns the result string.


// Get input from the user
echo "Enter a sentence: ";


$sentence = readline();

// Capitalize the first letter of each word in the sentence
$capitalizedSentence = ucwords($sentence);

  // Output the result

echo "Capitalized Sentence: $capitalizedSentence\n";







