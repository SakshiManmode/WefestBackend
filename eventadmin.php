<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>";

	$Add_Images = $_FILES["Add_Images"]["name"];
	$Event_Name = $_POST["Event_Name"];
	$Add_Details = $_POST["Add_Details"];

	
$query = "insert into eventdata (Add_Images,Event_Name,Add_Details)
values ('$Add_Images',$Event_Name','$Add_Details')";

echo "$query";
mysqli_query($con,$query);

$target_dir = "uploadd/";
$target_file = $target_dir . basename($_FILES["Add_Images"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["Add_Images"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
header('location:EditEventScreen.js');
?>