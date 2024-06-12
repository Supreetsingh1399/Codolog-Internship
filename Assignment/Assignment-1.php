<!-- Title: php echo and print statements
 Definition: echo and print are used to get output in php. echo is faster than print. echo can take multiple parameters, print can take only one parameter. echo does not return any value, print returns 1.
 echo is a language construct, print is a function. echo can be used with or without parentheses, print requires parentheses -->
<!-- Code -->
<?php
echo "Hello, This is my first"; // This will output "Hello, This is my first"
print "\n Assignment"; // This will output "assignment"

// $var = echo "Codolog Internship"; // This will result in a syntax error because echo is language construct and does not return any value

$var2 = print "\n Codolog Internship"; // This will output "Codolog Internship"  because print returns 1
?>