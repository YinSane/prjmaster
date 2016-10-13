<?php

$sessid = session_id();
if(empty($sessid)){
	session_start();
}

$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "mysql";
$mysql_db = "prjteste";

@$condb = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

if ($condb->connect_errno) {
	printf("Connection failed: %s \n", $condb->connect_error);
	exit();
}
$condb->set_charset("utf8");

?>