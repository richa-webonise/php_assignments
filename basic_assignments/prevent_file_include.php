<form enctype="multipart/form-data"  method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
    <br/>Choose a file to upload <input name="page" type="file"/><br/>    
    <input type="submit" value="Upload File"/><br/>
</form>

<?php
$page = str_replace('../', '', $_GET['page']);
echo $page;
if(isset($page))
{
   include("pages/$page");
   echo " included ";
}
else
{
   include("index.php");
   echo " not included ";
}
?>
