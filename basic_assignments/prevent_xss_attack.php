<?php
$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$prevent_xss = strip_tags($given_string);
print_r("The data is now XSS secure...\n<br/>$prevent_xss");
?>
