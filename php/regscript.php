<?php
include('dbscript.php');

if(isset($_POST['username']) || isset($_POST['userpwd'])){

$username = $_POST['username'];
$userpwd = $_POST['userpwd'];

$query1 = "INSERT INTO users(username,password) VALUES('".$username."','".$userpwd."')";

if(!mysqli_query($condb,$query1)){
	die('Error: '.mysqli_error($condb));
}

echo "sucesso!";

}


?>