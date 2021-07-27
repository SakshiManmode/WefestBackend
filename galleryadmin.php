<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'boxinalldata');

if($con){
	echo "connection successful";

}else{
	echo "No connection";
}
echo "<br>"; 

if (isset($_POST["insert"])) {
 
  $Images = $_FILES["Images"]["name"];
  
$query = "insert into gallerydata (Images) values ('$Images')";

echo "$query";
mysqli_query($con,$query);

$target_dir = "uploadd/";
$target_file = $target_dir . basename($_FILES["Images"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["Images"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  }

if (isset($_POST["delete"])) {

   $del = "delete from gallerydata where (Images) values ('$Images')";

   echo "$del";
   mysqli_query($con,$del);
}

header('location:GalleryScreen.js');

?>