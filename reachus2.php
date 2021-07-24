<?php


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

    $email = $_POST["email"];
    $name = $_POST["name"];
	$contact = $_POST["contact"];
	$eventIdea = $_POST["eventIdea"];

	
$query = "insert into reachus2(email,name,contact,eventIdea) 
          values ('$email','$name',$contact','$eventIdea')"; 

echo "$query";
mysqli_query($con,$query);

header('location:ReachUs2Screen.js');

?>