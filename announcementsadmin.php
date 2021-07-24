<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

    $Name = $_POST["Name"];
	$Award = $_POST["Award"];
	$Date = $_POST["Date"];

	
$query = "insert into announcement (Name,Award,Date) 
          values ('$Name',$Award','$Date')"; 

echo "$query";
mysqli_query($con,$query);

header('location:AnnouncementsScreen.js');	

?>