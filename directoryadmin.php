<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

	$username = $_POST["username"];
  $userRole = $_POST["userRole"];
	$mail = $_POST["mail"];
	$phone = $_POST["phone"];

	
$query = "insert into directorydata(username,userRole,mail,phone) 
          values ('$username','$userRole',$mail','$phone')"; 

echo "$query";
mysqli_query($con,$query);

?>