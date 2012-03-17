<?php
  # parameters for connecting to the "test" database
   $driver = "mysql";
   $user = "root";
   $password = "webonise6186";
   $host = "localhost";
   $db = "security_db";
   $dsn = "$driver://$user:$password@localhost/$db";
   require_once "DB.php";
   $conn =& DB::connect($dsn);
   $result =& $conn->query ("SELECT name, city FROM security_issues");
   if (DB::isError ($result))
     die ("SELECT failed: " . $result->getMessage () . "\n");
   printf ("Result set contains %d rows and %d columns\n",$result->numRows (), $result->numCols ());
   while ($row =& $result->fetchRow ())
     printf ("%s, %s\n", $row[0], $row[1]);
   $result->free ();
?>
