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
       
  
        // image file directory
        $target = "images/".basename($image);
  
        $sql = "INSERT INTO images (image, us_id) VALUES ('$image', '$u_id')";
        // execute query
        mysqli_query($con, $sql);
  
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
            header("Location: about_me.php");
        }else{
            $msg = "Failed to upload image";
            header("Location: edit2.php");
        }
    }
    $result = mysqli_query($con, "select * from images where us_id='".$u_id."' ORDER BY us_id DESC LIMIT 1 ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>
    <link rel="stylesheet" href="./homestyle.css" />
    <link rel="stylesheet" href="./post-icon.css" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
  </head>
</head>
<body>
 <header>
    <div class="display">
      <img
        class="logo"
        src="https://res.cloudinary.com/dgvqudzi2/image/upload/v1669617276/idea/brandnewlogo_tcnqk3.png"
        alt="logo"
        height="60px"
        width="60px"
      />
    </div>
    <div class="Searchbar">
      <a><button>Search</button></a>
    </div>
    <nav background-color="#0E738A">
      <ul>
        <li>
          <b><a href="about_me.php">Profile</a></b>
        </li>
        <li>
          <b><a href="chat/login.php">Messages</a></b>
        </li>
        <li>
          <b><a href="Notification.php">Notifications</a></b>
        </li>
        <li>
          <b><a href="explore.php">Explore</a></b>
        </li>
        <li>
          <b><a href="home.php">Home</a></b>
        </li>
      </ul>
    </nav>
  </header>
   
  <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <h6 class="theme-color lead"><p><?php echo $user_data['ttl']; ?></p></h6>
                            <p><?php echo $user_data['aboutme']; ?></p>
                            <div class="row about-list">
                              <div class="col-md-6">
                                <div class="media">
                                    <label>Name</label>
                                    <p><?php echo $user_data['name']; ?></p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p><?php echo $user_data['phone']; ?></p>
                                </div>
                                <div class="media">
                                    <label>address</label>
                                    <p><?php echo $user_data['address']; ?></p>
                                </div>
                                <div class="media">
                                <a href="edit1.php">Edit profile</a>
                                </div>
                                <div>
                                   <br> <a href="home.php" >HOME</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                          <?php
                          if($row = mysqli_fetch_array($result)){
                            echo "<img src='images/".$row['image']."' >";
                          }
                          else{
                            echo "no image";
                          }
                          ?>
                          <br>
                           <form method="POST" action="edit2.php" enctype="multipart/form-data">
                          <input type="hidden" name="size" value="1000000">
                          <div>
                       <input type="file" name="image">
                       </div>
                        <div>
                       <button type="submit" name="upload">POST</button>
                       </div>
                            <!-- <img src="<?php echo $user_data['image']; ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<style type="text/css">
body{
    color: #6F8BA4;
    margin-top:60px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 60%;
}
img {
    vertical-align: middle;
    border-style: none; 
    border-radius: 50%;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}
header{
    display:flex;
    justify-content: space-between;
    z-index: 2000;
}
.display img
{
    
    /* display:flex;
    align-items: center;
    color: grey; */
    margin-left:30px;

}
a{

  display:flex;
  justify-content: space-between;
}
button
{
  font-size: 15px;
  color:#0E738A;
}
button{
  border: 0;
    border-radius: 50px;
    width: 500px;
    height: 50px;
    margin-left:
}

#button-post
{
  margin-left: 120px;
  margin-top: 15px;
  font-size: 15px;
  color:#0E738A;
  border: 0;
    border-radius: 50px;
    width: 500px;
    height: 50px;
}
 ul{
  background-color: #BDE7F4;
   margin: 0;
  padding: 0; 
   overflow: hidden; 
  list-style-type: none;
} 
li {
   font-family: "Roboto", sans-serif; 
  font-size: 20px;
  font-weight: 5; 
  color: rgb(230, 226, 226);
}
.title {
   font-family: "Oswald", sans-serif; 
  font-size: 19px;
  font-weight: 5;
  color: white;
}
li {
  float: right;
  margin: 20px;
}
header {
  display: flex;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 100px;
  background-color: #BDE7F4;
}
li a {
  display: block;
  color:rgb(14, 115, 138);
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>