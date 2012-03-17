<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$string_length = strlen($given_string);
$equal_length = 0;
print_r("\n$given_string\n");
while($equal_length < $string_length)
{
	$parted_string = substr($given_string, $equal_length, round($string_length/4));
	$equal_length += round($string_length/4);
	print_r("\n  The parts of the given string are : $parted_string\n  ");
}
?>
