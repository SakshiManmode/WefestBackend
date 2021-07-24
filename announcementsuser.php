<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

$sql = "select * from announcement";

	$result = mysqli_query($con, $sql);

	$num = mysqli_num_rows($result);
	echo $num;
	echo "<br>";

	if($num > 0){

		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['Name'] . $row['Award'] . $row['Date'];
		echo "<br>";

		}
	}
header('location:AnnouncementsScreen.js');	
?>