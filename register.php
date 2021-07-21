<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}

$Picture = $_FILES["Picture"]["name"];

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$password  = $_POST['password'];

$email = $_POST['email'];

$Batch_Number  = $_POST['Batch_Number'];


$sql = "select * from login_info where email = '$email'";

	$result = mysqli_query($con, $sql);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		echo "Already have an account";
	}
	else{
		$query = "insert into login_info(Picture,firstName,lastName,password,email,Batch_Number)
        values ('$Picture','$firstName','$lastName','$password','$email','$Batch_Number')";
        echo $query;
		mysqli_query($con, $query);
		echo "Registration successful";
	}

$target_dir = "uploadd/";
$target_file = $target_dir . basename($_FILES["Picture"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["Picture"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

header('location:LoginScreen.js');
?>