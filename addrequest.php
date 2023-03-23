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
  $u_id=$user_data['u_id'];
  $result = mysqli_query($con, "select * from images where us_id='".$u_id."' ORDER BY us_id DESC LIMIT 1 ");
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $writeareq = $_POST['writeareq'];
		$quantity = $_POST['quantity'];
		$food = $_POST['food'];
		$expiry = $_POST['expiry'];
		$novol = $_POST['novol'];
    $u_id=$user_data['u_id'];
    $descr = $_POST['desc'];
    if(!empty($writeareq)  && !empty($descr)){
      mysqli_query($con, "INSERT INTO addrequest (writeareq,quantity,food,expiry,novol,descr,us_id) VALUES (' $writeareq ','$quantity', '$food', '$expiry', '$novol','$descr',$u_id)");
      header("Location: home.php");
    }
    else{
      echo "enter valid data";
    }

  }
  
  else{
    echo "not valid data";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>
    <link rel="stylesheet" href="./addrequest.css" />
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
            <b><a href="about_me.php">Profile</a></b>
          </li>
          <li>
            <b><a href="messages.php">Messages</a></b>
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
    <div class="displayblock">
      <div class="displayblock-header">
      <?php 
          if($row = mysqli_fetch_array($result)){
            if($row['image']!=""){
              echo "<img src='images/".$row['image']."' >";
            }
            else{
              echo "<img src='logo.png'>";
            }
          
      }
      ?>
        <p><?php echo $user_data['name']?></p>
        <br /><br /><br />
      </div>
      <br />
      <div class="Req">
      <form  method="POST">
          <input
            type="text"
            class="writereq"
            placeholder="Write a request"
            style="text-align: start"
            name="writeareq"
          />
      </div>  
        <table class="requestform" cellspacing="20px">
          <tr>
            <td><a href="https://www.google.com/maps"> Add Location</a></td>
          </tr>

          <tr>
            <td>Quantity :</td>
            <td>
              <input
                type="text"
                placeholder="Enter as per person serving"
                id="quan"
                name="quantity"
              />
            </td>
          </tr>
          <br />
          <tr>
            <td>
              Type:&nbsp;&nbsp;&nbsp;
              <input type="radio" name="food" value="veg"/>Veg
            </td>
            <td><input type="radio" name="food" value="non-veg"/>Non-Veg<br /></td>
          </tr>
          <tr>
            <td>Expiry period :</td>
            <td><input type="text" placeholder="Enter expiry period" name="expiry" /></td>
          </tr>
          <tr>
            <td>No of volunteers needed:</td>
            <td><input type="number" name="novol"/></td>
          </tr>
          <tr>
            <td>Description:</td>
            <td>
              <textarea rows="5" cols="50" name="desc" placeholder="enter Description"></textarea>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" class="submit" name="submit"/></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
