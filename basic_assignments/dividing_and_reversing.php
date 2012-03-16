<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$search_string = ".";
$string_length = strlen($given_string);
$start_position = 0;
;
while(($position = strpos(($given_string), $search_string, $start_position)) !== false)
{
	print_r("\nFound $search_string at position $position\n");
	print_r(strrev(substr($given_string, $start_position, $position)));
	$start_position = $position + 1;
}
?>
