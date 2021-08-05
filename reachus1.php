<?php


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

    $name = $_POST["name"];
	$eventname = $_POST["eventname"];
	$feedback = $_POST["feedback"];

	
$query = "insert into reachus2(email,name,contact,eventname,feedback) 
          values ('$email','$name',$contact','$eventname','$feedback')"; 

echo "$query";
mysqli_query($con,$query);

header('location:ReachUs1Screen.js');

?>