<?php
$first_given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$second_given_string = "PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";
$first_removed_html = strip_tags($first_given_string);
$second_removed_html = strip_tags($second_given_string);
print_r("The first given string after removing the html tags is : $first_removed_html");
print_r("The second given string after removing the html tags is : $second_removed_html");
?>
