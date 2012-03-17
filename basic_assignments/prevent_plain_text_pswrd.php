<?php
$user_name = "root";
$password = "webonise6186";
try{
    $server_conn = mysql_connect("localhost",$user_name,$password);
    if($server_conn)
    {
	    echo "Connection to the server is established...";
	    $db_conn = mysql_select_db("security_db");
	    if($db_conn)
	    {
		    echo " Connection to the db is established... ";
		    $name = mysql_query("select * from security_issues where name = 'Richa'");
		    $record = mysql_fetch_row($name);
		    echo " $record[0] ";
		    echo " $record[1] ";
		    $secure_pass = " $record[2] ";
		    $secure_pass = md5(uniqid(rand(), true));
		    echo " $secure ";
		}
	}	
}
catch(Exception $e)
{
    echo $e->getMessage();
    die();	
}
?>
