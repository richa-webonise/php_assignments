<?php
$user_name = "root";
$password = "webonise6186";
try
{
    $db_create = new PDO("mysql:host=localhost; dbname=pdo_db",$user_name,$password);
    print_r("Connection to te server opened...");
    if ($db_create->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
        echo "Running on mysql; doing something mysql specific here\n";
    }
    $db_create->query("insert into pdo_test (name,city) values('Amin','Nagpur')");
    $data = $db_create->query("select * from pdo_test")->fetchAll(PDO::FETCH_ASSOC);
    print_r($data);
    $db_create->query("delete from pdo_test where name='Amin'");
    $data = $db_create->query("select * from pdo_test")->fetchAll(PDO::FETCH_ASSOC);
    print_r($data);
}
catch(PDOException $ex)
{
    echo $ex->getMessage();	
    die();
}
?>
