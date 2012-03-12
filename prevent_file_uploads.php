<form enctype="multipart/form-data"  method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
    <br/>Choose a file to upload <input name="userfile" type="file"/><br/>    
    <input type="submit" value="Upload File"/><br/>
</form>

<?php

	print_r($_FILES['userfile']['error']);
	print_r("<br/>");
	print_r($_FILES['userfile']['name']);
	print_r("<br/>");
	print_r($_FILES['userfile']['type']);
	print_r("<br/>");
	print_r($_FILES['userfile']['size']);
	print_r("<br/>");
	print_r($_FILES['userfile']['tmp_name']);
	print_r("<br/>");
	$max_filesize = 100000;
	$allowed =  array('.jpg','.gif','.bmp','.png');
	$upload_location = "./files/";
    $file_name = $_FILES['userfile']['name'];
    $file_ext = substr($file_name, strpos($file_name, "."), strlen($file_name)-1);
    if(!in_array($file_ext, $allowed))
        die("The file you attempt to upload is not allowed...");
	if(filesize($_FILES['userfile']['tmp_name']) < $max_filesize);
	    die("The file is too large to be uploaded...");
	if(is_writable($upload_location))
	    die("You cannot upload the file in the specified directory..! Permission denied...");
	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_location . $file_name))
	    echo "Your file is uploaded successfully...";
	else
	    echo "There is an error while uploading the file...! Please try again...";
?>
