<?php
include('dbscript.php');

if(isset($_POST['tries']) || isset($_POST['digits'])){

$ntries = $_POST['tries'];
$valdif = $_POST['digits'];

$query1 = "INSERT INTO topscores(username,ntries,valdif) VALUES('".$_SESSION['userid']."',".$ntries.",".$valdif.")";

if(!mysqli_query($condb,$query1)){
	die('Error: '.mysqli_error($condb));
}else{
	echo "saved!";
}


}

?>