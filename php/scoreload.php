<?php

include('dbscript.php');

if(isset($_POST['vardif'])){

$vardif = $_POST['vardif'];
$query1 = "SELECT username,score FROM topscores WHERE valdif=".$vardif." ORDER BY score";
$result = mysqli_query($condb,$query1);

echo "<label id='tblscores' for='table_scores'> Difficulty ".$vardif." </label>";
echo "<table>";
echo "<tr>
		<th> Username </th>
		<th> Highest Score </th>
	</tr>";

while($row = mysqli_fetch_array($result)){


echo "<td>".$row['username']."</td>";
echo "<td>".$row['score']."</td>";

};

echo "</table>";
/*
print_r($row);
echo "isto é abc";
*/



}

?>



