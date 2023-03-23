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
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$ttl = $_POST['ttl'];
		$aboutme = $_POST['aboutme'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
        $u_id=$user_data['u_id'];


		if(!empty($name)  && !empty($phone) && !empty($address)  && !empty($ttl))
		{
            if($aboutme==""){
                $query = "update users set name = '".$name."', phone='".$phone."',address='".$address."',ttl='".$ttl."' where u_id='".$u_id."'";

			mysqli_query($con, $query);

			header("Location: about_me.php");
			die;
            }
			//save to database
			$query = "update users set name = '".$name."', phone='".$phone."',address='".$address."',aboutme='".$aboutme."',ttl='".$ttl."' where u_id='".$u_id."'";

			mysqli_query($con, $query);

			header("Location: about_me.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

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
          src="brandnewlogo.png"
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
            <b><a href="profile.php">Profile</a></b>
          </li>
          <li>
            <b><a href="#home">Messages</a></b>
          </li>
          <li>
            <b><a href="Notification.php">Notifications</a></b>
          </li>
          <li>
            <b><a href="#news">Explore</a></b>
          </li>
          <li>
            <b><a href="#news">Home</a></b>
          </li>
        </ul>
      </nav>
    </header>
   
    <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to" action="">
                            <form method="post">
                            <h3 class="dark-color">About Me</h3>
                            <h6 class="theme-color lead"><p><input type="text" value="<?php echo $user_data['ttl']; ?>" name="ttl"></p></h6>
                            <textarea rows="5" cols="60" value="<?php echo $user_data['aboutme']; ?>" name="aboutme" ></textarea>
                            <div class="row about-list">
                              <div class="col-md-6">
                                <div class="media">
                                    <label>Name</label>
                                    <p><input type="text" value="<?php echo $user_data['name']; ?>" name="name"></p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p><input type="text" value="<?php echo $user_data['phone']; ?>" name="phone"></p>
                                </div>
                                <div class="media">
                                    <label>address</label>
                                    <p><input type="text" value="<?php echo $user_data['address']; ?>" name="address"></p>
                                </div>
                                <div class="media">
                                <button type="submit" >submit</button>
                                </div>
                            </div>
                            </div>
                            </form>
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


</style>

<script type="text/javascript">

</script>
</body>
</html>