<?php
$user_name = "root";
$password = "webonise6186";
$name = "Richa";
$bad_name = "';delete from security_issues where 1 or name = '";
$bad_name =mysql_real_escape_string($bad_name);
try
{
    $server_connect = mysql_connect("localhost",$user_name,$password);
    if($server_connect)
    {
	    print_r("\n <br/> Connection to the server is established...\n <br/> ");
	    $db_connect = mysql_select_db("security_db");
	    if($db_connect)
	    {
			print_r("\n <br/> Connected to the database...\n <br/> ");
	        $query = "SELECT * FROM security_issues WHERE name = '$name'";
	        echo "\n <br/> Normal: " . $query . "\n <br/> ";
	        $query = "SELECT * FROM security_issues WHERE name = '$bad_name'";
	        echo "\n <br/> Injection: " . $query . "\n <br/> ";
		}
		else
		{
		    print_r("\n <br/> The database is not found...\n <br/> ");
		}	
    }
    else{
	    print_r(" <br/> \nThere is some problem to establish a connection...\n <br/> ");
    }
}
catch(PDOException $e)
{
    print_r($e->getMessage());
    die();
}
?>
