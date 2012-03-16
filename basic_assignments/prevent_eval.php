<?php
$string = 'Webonise';
$name = 'Lab';
$str = 'This is $string $name and I work in it.';
echo $str. "\n";
eval("\$str = \"$str\";");
echo $str. "\n";
?>
