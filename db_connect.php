<?php

//$ini_array = parse_ini_file("/etc/meetingkaro.ini",true);
$host = "localhost"; //$ini_array["admin_database_section"]["host"];
$dbname = "savvyconference"; //$ini_array["admin_database_section"]["database"];
$user = "root"; //$ini_array["admin_database_section"]["user"];
$password = ""; //$ini_array["admin_database_section"]["password"];
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;unix_socket=/tmp/mysql.sock", $user, $password, array(
    PDO::ATTR_PERSISTENT => true
));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	die();
}

?>
