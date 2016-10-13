<?php

include('dbscript.php');

if(isset($_POST['usertxt']) || isset($_POST['userpwd'])){

// translates the variables to php variables through the POST method. we use isset to find if the variables are empty or not
	$username = (isset($_POST['usertxt'])) ? $_POST['usertxt'] : '';
	$password = (isset($_POST['userpwd'])) ? $_POST['userpwd'] : '';

	$username = htmlentities($username);
	$password = htmlentities($password);
	$result = mysqli_query($condb , "SELECT * FROM users WHERE username = '".$username."' AND password ='".$password."'");
	
	while($row = mysqli_fetch_array($result)){

					if (empty($row)){
						//echo "nada encontrado";
						echo 0;
					}else{
						$_SESSION['userid'] = $row['username'];
						$_SESSION['pwd'] = $row['password'];
						echo 1;
					}
	}
	


}

function protectPage(){

		if(!isset($_SESSION['userid']) && !isset($_SESSION['pwd'])){
			header('Location: ./login.php');
		}
	}

?>