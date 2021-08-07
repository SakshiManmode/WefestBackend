<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

$sql = "select * from eventdata";

	$result = mysqli_query($con, $sql);

	$num = mysqli_num_rows($result);
	echo $num;
	echo "<br>";

	if($num > 0){

		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['Add_Images'] . $row['Event_Name'] . $row['Add_Details'] ;
		echo "<br>";

		}
	}
header('location:EventsScreen.js');	
?>
