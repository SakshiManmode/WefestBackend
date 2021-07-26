<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}

mysqli_select_db($con, 'boxinalldata');


$username = $_POST['username'];

$password  = $_POST['password'];

$s = "select * from admindata where username = '$username' && password = '$password'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1) {
        header('location:dashboardRoutes.js');
	}
	else{
	    header('location:LoginScreen.js');

	}

?>