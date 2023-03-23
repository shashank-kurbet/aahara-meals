<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ideathon";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

  die("failed to connect!");
}
include("functions.php");

$user_data = check_login($con);
$u_id = $user_data['u_id'];
$result = mysqli_query($con, "select * from images where us_id='" . $u_id . "' ORDER BY us_id DESC LIMIT 1 ");
$result1 = mysqli_query($con, "select * from explore  order by posts_id DESC");
$result2 = mysqli_query($con,"select * from addrequest  order by req_id DESC LIMIT 0,4");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>
    <!-- <link rel="stylesheet" href="./explore.css" /> -->
    <!-- / <link rel="stylesheet" href="./post-icon.css" /> -->

    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />-->

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');

.icon {
      background-color: #f6f9fa;

      color: black;
      list-style-type: none;
      margin-top: 23px;
      margin-left: 1px;

      display: flex;
      /* justify-content: space-evenly; */
    }

    .icon .photos .icon1 img {
      margin-left: 1px;
      width: 20px;
      height: 20px;
      background-color: rgb(0, 0, 0);

    }

    .icon .Videos .icon1 img {
      width: 20px;
      height: 20px;
    }

    .icon .document .icon1 img {
      width: 20px;
      height: 20px;
    }

    .icon .Location .icon1 img {
      width: 20px;
      height: 20px;
    }

    .icon1 {

      font-size: 18px;
      color: rgb(0, 0, 0);
    }

    .post img {
      position: absolute;




    }

    body {
      background-color: #e3e1e1;

    }

    header {
      display: flex;
      justify-content: space-between;
      z-index: 2000;
    }

    .display img {

      /* display:flex;
    align-items: center;
    color: grey; */
      margin-left: 30px;

    }

    a {

      display: flex;
      justify-content: space-between;
    }

    button {
      font-size: 15px;
      color: #0E738A;
    }

    button {
      border: 0;
      border-radius: 50px;
      width: 500px;
      height: 50px;
    }

    #button-post {
      margin-left: 120px;
      margin-top: 15px;
      font-size: 15px;
      color: #0E738A;
      border: 0;
      border-radius: 50px;
      width: 500px;
      height: 50px;
    }

    ul {
      background-color: #BDE7F4;
      margin: 0;
      padding: 0;
      overflow: hidden;
      list-style-type: none;
    }

    li {
      font-family: "Roboto", sans-serif;
      font-size: 20px;
      font-weight: 500;
      color: rgb(230, 226, 226);
    }

    .title {
      font-family: "Oswald", sans-serif;
      font-size: 19px;
      font-weight: 500;
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
      color: rgb(14, 115, 138);
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }

    .request {
      font-family: 'Ubuntu', sans-serif;
      position: absolute;
      width: 400px;
      height: 600px;
      left: 70%;
      top: 110px;
      background: #0E738A;
      text-align: center;
      color: #ffffff;
      font-size: 30px;
      border: 10px solid #ffffff;
      box-shadow: 10px 10px 10px 10px #878585;
    }


    .board_content {
      margin-top: 10px;
      list-style-type: square;
      text-align: left;
    }

    .RQB {
      background-color: #0E738A;
      margin-right: 60px;
      padding: 0;
      overflow: hidden;
      list-style-type: square;
      align-items: left;
      display: inline-block;
    }

    .post {
      margin-top: 110px;
      margin-left: 240px;
      width: 700px;
      height: 200px;
      background-color: #f6f9fa;
      box-shadow:1px 1px 5px #d9d9d9

    }

    .post .pimg button {

      border-radius: 50px;
      width: 550px;
      height: 60px;
      margin-top: 23px;
      margin-left: 130px;
      display: flex;
      align-items: center;
    }

    .post .pimg img {
      position: absolute;
      height: 60px;
      width: 60px;
      border-radius: 50%;
      margin-top: 15px;
      margin-left: 50px;
      display: flex;
      justify-content: space-between;

    }
    .post
    {
      border: 2px solid #d9d9d9;
    }

    .upost {
      border: 2px solid #d9d9d9;
    }

    .twopost {
      border: 2px solid #d9d9d9;
    }

    .RQB li {
      margin-left: 20%;
    }

    .upost {
      margin-top: 50px;
      margin-left: 240px;
      width: 700px;
      height: 500px;
      background-color: #f6f9fa;
      /* box-shadow:1px 1px 5px  #878585 */

    }

    .upost .uimg {

      border-radius: 50px;
      width: 550px;
      height: 60px;
      margin-top: 15px;
      display: flex;
      align-items: left;
    }

    .upost .pimg {
      margin-top: 5px;
      margin-left: 140px;
    }

    .upost .uimg img {
      position: absolute;
      height: 60px;
      width: 60px;
      border-radius: 50%;
      margin-top: 15px;
      margin-left: 50px;
      display: flex;
      align-items: left;


    }

    .upost .secondpost img {
      width: 700px;
      height: 300px;
    }

    input {
      border-radius: 15px;
    }

    .req-button {
      border-radius: 0%;
      width: 120px;
      height: 40px;
      margin-left: 60px;
      box-shadow: #97c8d3;
    }

    .req-button a {
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
      color: black;
    }

    .post {
      border: 2px solid #d9d9d9;

    }

    .likeshare img {
      width: 20px;
      height: 20px;
    }

    .likeshare {
      display: flex;
      justify-content: space-evenly;
      margin-top: 10px
    }

    .twopost {
      margin-top: 50px;
      margin-left: 240px;
      width: 700px;
      height: 480px;
      background-color: #f6f9fa;
    }

    .secondpost .twopost {
      margin-top: 50px;
      margin-left: 240px;
      width: 700px;
      height: 400px;
      background-color: #f6f9fa;
      box-shadow:1px 1px 5px #040404

    }


    .twopost .twoimg {

      border-radius: 50px;
      width: 550px;
      height: 60px;
      margin-top: 15px;
      display: flex;
      align-items: left;
    }

    .twopost .twoimg img {
      position: absolute;
      height: 60px;
      width: 60px;
      border-radius: 50%;
      margin-top: 15px;
      margin-left: 0px;
      display: flex;
      align-items: left;


    }

    .twopost .secondpost img {
      width: 700px;
      height: 300px;
    }

    .twopost .twoimg {
      margin-top: 5px;
      margin-left: 60px
    }

    .twopost .twoimg p {
      margin-left: 90px;
    }

    .like p {
      margin-left: -8px;
    }

    .share p {
      margin-left: -10px;

    }

    .comment p {
      margin-left: -18px;
    }

    .postsshiz img {
      width: 700px;
      height: 300px;
      margin-top: 20px;
    }

    .upost .uimg .pro img {

      margin-top: -8px;

    }

    .pimg p {
      margin-top: 4px;
      margin-left: -4px;
    }

    .pimg #aayush {
      margin-top: 25px;
    }

    .text {
      margin-left: 45px;
    }

    .Writeapost {
      display: flex;
      justify-content: space-evenly;
    }

    button #dofe {
      width: 10px;
      height: 10px;
      margin-top: 30px;
      margin: 0;

    }

    #dofe {
      margin-top: 30px;
    }

    .post-butt {
      width: 150px;
      height: 32px;
      outline: none;
      color: #f7f7f7;
      font-weight: bold;
      border: 0.5px solid rgb(180, 234, 237);
      text-shadow: 0px 0.5px 0.5px #fff;
      border-radius: 2px;
      font-weight: 600;
      color: #15748b;
      letter-spacing: 1px;
      font-size: 14px;
      background-color: #ffffff;
      -webkit-transition: 1s;
      -moz-transition: 1s;
      transition: 1s;
    }

    .post-butt:hover {
      background-color: #a3d6e9;
      outline: none;
      border-radius: 2px;
      color: #f1f1f1;
      border: 1px solid #f1f1f1;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
      transition: 0.5s;
    }


    .post-butt {

      border-radius: 0px;
      width: 80px;
      height: 50px;
      margin-top: 20px;
      margin-left: 300px;
      border: 2px solid #d9d9d9;

    }
   
    label {
  display: inline-block;
  background-color: #97c8d3;
  color: white;
  padding: 0.5rem;
  font-family: sans-serif;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}

.fileinput {
  display: flex;
  justify-content: space-between;
  margin-left:600px;
}
.post-butt {
  margin-top: -20px;
}

    </style>
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
    <div class="request">
      <u>Request Board</u>
      <div class="board_content">
      <ul class="RQB">
        <?php
        while ($row5 = mysqli_fetch_assoc($result2)) {
        ?>
        <li style="text-align:left"><?php echo $row5['writeareq']?></li>
        <?php } ?>
        <li>5 volunteers needed by Helping Hands</li>
        <!-- <li>Access food pick up at Vasco at 12</li>
        <li>Urgent meals needed at these locations</li>
        <li>2 volunteers needed by Sunshine NGO</li> -->
      </ul>
    </div>
      <div class="req-button">
        <button class="req-button">
          <a href="addrequest.php">Add request</a>
        </button>
      </div>
    </div>

    <br><br>
  <?php
  while ($row1 = mysqli_fetch_assoc($result1)) {
  ?>
    <div class="upost">
      <div class="uimg">
        <div class="pro">
          <?php
          $u2_id = $row1['us_id'];
          $result2 = mysqli_query($con, "select * from images where us_id='" . $u2_id . "' ORDER BY us_id DESC LIMIT 1 ");
          $row2 = mysqli_fetch_array($result2);
          if ($row2['image'] != "") {
            echo "<img src='images/" . $row2['image'] . "' >";
          } else {
            echo "<img src='logo.png'>";
          }
          ?>
        </div>
        <!-- <img src="profpic.jpg" /> -->
        <div class="pimg">
          <p>
            <?php
            $u2_id = $row1['us_id'];
            $result2 = mysqli_query($con, "select * from users where u_id='" . $u2_id . "'");
            $row2 = mysqli_fetch_array($result2);
            echo $row2['name'];
            ?>

          </p>
        </div>
      </div>

      <div class="secondpost">
        <div class="text">
          <?php
          if ($row1['image_text'] != "") {
            echo $row1['image_text'];
          } else {
            echo "";
          }

          ?>

        </div>
        <div class="postsshiz">
          <?php
          echo "<img src='posts/" . $row1['image'] . "' > ";

          ?>
        </div>
        <!-- <img src="background_pic.jpeg" alt="post2" /> -->
      </div>

      <div class="likeshare">
        <div class="like">
          <img src="like.png" alt="like" />
          <p>Like</p>
        </div>
        <div class="share">
          <img src="share.png" alt="share" />
          <p>Share</p>
        </div>
        <div class="comment">
          <img src="comment.png" alt="comment" />
          <p>Comment</p>
        </div>
      </div>
    </div>
  <?php } ?>
    <div class="twopost">
      <div class="twoimg">
        <img src="1.jpeg" />
        <div class="pimg">
          <p>
            Aayush Mehra<br />
            Founder of ...<br />
            4h
          </p>
        </div>
      </div>
      <br /><br />
      <div class="secondpost">
        <img src="backpic2.jpg" alt="post2" />
      </div>
      <div class="likeshare">
        <div class="like">
          <img src="like.png" alt="like" />
          <p>Like</p>
        </div>
        <div class="share">
          <img src="share.png" alt="share" />
          <p>Share</p>
        </div>
        <div class="comment">
          <img src="comment.png" alt="comment" />
          <p>Comment</p>
        </div>
      </div>
    </div>
    <div class="twopost">
      <div class="twoimg">
        <img src="2.png" />
        <div class="pimg">
          <p>
            Gunjan Saxena<br />
            Active volunteer<br />
            4h
          </p>
        </div>
      </div>
      <br /><br />
      <div class="secondpost">
        <img src="backpic new.jpg" alt="post2" />
      </div>
      <div class="likeshare">
        <div class="like">
          <img src="like.png" alt="like" />
          <p>Like</p>
        </div>
        <div class="share">
          <img src="share.png" alt="share" />
          <p>Share</p>
        </div>
        <div class="comment">
          <img src="comment.png" alt="comment" />
          <p>Comment</p>
        </div>
      </div>
    </div>
  </body>
</html>
