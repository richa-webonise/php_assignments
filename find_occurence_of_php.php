<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$string_to_search = "PHP";
$total_occurences = substr_count($given_string,$string_to_search);
print_r("Total '$total_occurences' words as '$string_to_search' are found in the given string...");
?>

