<?php
ob_start();
echo "starting\n";
header("location: http://www.facebook.com");
echo "send data\n";
header("location: http://google.com");
echo "sent data";
ob_end_flush(); //now the headers are sent
echo "\nflushed data";
?>
