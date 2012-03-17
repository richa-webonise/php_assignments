<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$file_name = "/home/webonise/Richa/php_assignments/first_file.txt";
$file_write = fopen($file_name, "+a");
fwrite($file_write, $given_string);
fclose($file_write);
$file_read = fopen($file_name, "r");
$file_data = fread($file_read, filesize("first_file.txt"));	
fclose($file_read);
echo "\n\n$file_data";
?>
