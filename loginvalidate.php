<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}

mysqli_select_db($con, 'boxinalldata');


$First_Name = $_POST['First_Name'];

$Password  = $_POST['Password'];

$s = "select * from login_info where First_Name = '$First_Name' && Password = '$Password'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1) {
        header('location:EventsScreen.js');
	}
	else{
	    header('location:LoginScreen.js');
	}

?>