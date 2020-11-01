<?php


$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];
$phone = $_POST['phone'];

$date = date('Y-m-d-H:i:s', time());


$final_file_name = $date . "|" . $name . "|" . $phone . "|" . $_FILES["fileToUpload"]["name"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($final_file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
// } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
// }
// }

// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}

// Check file size
// 500 MB files size limit
$file_size = 500*1000*1000;
if ($_FILES["fileToUpload"]["size"] > $file_size) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
// echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
// $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h2>" . $name . " thanks your file is uploaded. </h2>";
    echo "<br><br>";
    echo "The file ". htmlspecialchars( basename( $final_file_name)). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
}

?>