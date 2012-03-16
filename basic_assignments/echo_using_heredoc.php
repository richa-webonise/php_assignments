<?php
$first_given_string = <<<FIRST
PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.
FIRST;

$second_given_string = <<<SECOND
PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.
SECOND;

print_r($first_given_string);
print_r($second_given_string);
?>
