<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$array_of_words = str_word_count($given_string,1);
print_r("The array of the words available in the given string are : ");
print_r($array_of_words);
?>
