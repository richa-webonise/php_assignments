<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$string_to_search = "PHP";
$first_occurence = strpos($given_string, $string_to_search);
print "The first occurence of the string '$string_to_search' is in the '$first_occurence' position...";
?>
