<?php 
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ideathon";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
	include("functions.php");

	$user_data = check_login($con);
    $msg = "";
    $u_id=$user_data['u_id'];
    // If upload button is clicked ...
    if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $image_text = mysqli_real_escape_string($con, $_POST['posttext']);
  
        // image file directory
        $target = "posts/".basename($image);
  
        $sql = "INSERT INTO posts (image, us_id,image_text) VALUES ('$image', '$u_id' , '$image_text')";
        // execute query
        mysqli_query($con, $sql);
  
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
            header("Location: home.php");
        }else{
            $msg = "Failed to upload image";
            header("Location: home.php");
        }
    }
?>