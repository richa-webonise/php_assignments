<?php
//$given_string = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$validMimes = array(
    'image/png' => '.png',
    'image/x-png' => '.png',
    'image/gif' => '.gif',
    'image/jpeg' => '.jpg',
    'image/pjpeg' => '.jpg'
);

$image = $_FILES['image'];

if(!array_key_exists($image['type'], $validMimes)) {
    die('Sorry, but the file type you tried to upload is invalid; only images are allowed.');
}

// Get the filename minus the file extension:
$filename = substr($image['name'], 0, strrpos($image['name'], '.'));

// Append the appropriate extension
$filename .= $validMimes[$image['type']];
echo $filename;
// Do something with the uploaded file

?>
