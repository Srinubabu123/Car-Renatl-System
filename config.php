<?php 
// DB credentials.
define('DB_HOST','sql313.infinityfree.com');
define('DB_USER','if0_37731249');
define('DB_PASS','Srinu2005');
define('DB_NAME','if0_37731249_carrental1');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>