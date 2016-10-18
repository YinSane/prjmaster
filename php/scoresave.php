<?php
include('dbscript.php');

if(isset($_POST['tries']) || isset($_POST['digits'])){

$ntries = $_POST['tries'];
$valdif = $_POST['digits'];
$correctNum = $_POST['guessNumber'];
$score = $valdif * 1000;

$discount = 0;
if($ntries == 1){

}else{
	if($valdif < 7){
		$discount = $score * 0.05;
	}else{
		$discount = $score * 0.07;
	}

	for($i = 0; $i<$ntries; $i++){
			$score = $score - $discount;
			if($score == 0){
				break;
			}
		}
}

/*
echo $_SESSION['userid']." ".$ntries." ".$valdif." ".$score." ".$correctNum;
*/
$query1 = "INSERT INTO topscores(username,ntries,valdif,score,num) VALUES('".$_SESSION['userid']."',".$ntries.",".$valdif.",".$score.",".$correctNum.")";

if(!mysqli_query($condb,$query1)){
	die('Error: '.mysqli_error($condb));
}else{
	echo "saved!";
}

}

?>