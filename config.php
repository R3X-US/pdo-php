<?php
header('Content-Type: text/html; charset=utf-8');
$server = "localhost"; #if its n 
$db_user = "";  #db user
$db_pass = "";  #db password
$database = "";   #database name(not name of the table)

try {
    $bgl = new PDO("mysql:host=$server;dbname=$database;charset=utf8", "$db_user", "$db_pass", [

     ]);
} catch ( PDOException $e ){
	echo "error";
     print $e->getMessage();
}
?>

