<?php
$user_name = "root";
$password = "webonise6186";
$name = "Richa";
try{
	$db_create = new PDO("mysql:host=localhost; dbname=pdo_db",$user_name,$password);
	print_r("Connection to the server is esatblished...");
	$stmt = $db_create->prepare("select * from pdo_test where name = ?");
	$stmt->execute(array($name));
	$stmt->setFetchMode(PDO::FETCH_BOTH);
	while($result = $stmt->fetch())
	{
	    print_r($result);
	}
}catch(PDOException $e)
{
    print_r($e->getMessage());
    die();
}
?>
