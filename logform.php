<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}

mysqli_select_db($con, 'boxinalldata');


$Picture=$_FILES["Picture"]["name"];

$First_Name = $_POST['First_Name'];

$Last_Name = $_POST['Last_Name'];

$Password  = $_POST['Password'];

$Email_ID = $_POST['Email_ID'];

$Batch_Number  = $_POST['Batch_Number'];


$target_dir = "uploads/";
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

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["Picture"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$s = "select * from login_info where Email_ID = '$Email_ID'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		echo "Already have an account";
	}
	else{
		$query = "insert into login_info (Picture,First_Name,Last_Name,Password,Email_ID,Batch_Number)
        values ('$Picture','$First_Name','$Last_Name','$Password','$Email_ID','$Batch_Number')";
		mysqli_query($con, $reg);
		echo "Registration Successful";
	}

header('location:EventsScreen.js');

?>