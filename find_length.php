<?php
$first_given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$second_given_string = "PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";
$first_length = strlen($first_given_string);
$second_length = strlen($second_given_string);
print_r("The length of the first given string is : $first_length ");
print_r("The length of the second given string is : $second_length");
?>
