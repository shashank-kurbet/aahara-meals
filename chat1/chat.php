<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<head>
  <style>
    header{
    display:flex;
    justify-content: space-between;
    z-index:2000;
    
}
.display
{
    display:flex;
    align-items: center;
    width:30px;
    height: 30px;
}
ul {
  background-color: #0e738a;
  margin: 0;
  padding: 0;
  overflow: hidden;
  list-style-type: none;
}
li {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  font-weight: 500;
  color: rgb(8, 8, 8);
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
  background-color: #0e738a;
}
li a {
  display: block;
  color: rgb(9, 8, 8);
  text-align: center;
  padding: 16px;
  text-decoration: none;
}
  </style>
</head>
<body>
<header>
      <div class="display">
        <img
          class="logo"
          src="logo.png"
          alt="logo"
          height="90px"
          width="100px"
        />
        <a class="title">AAHARA MEALS</a>
      </div>
      <nav background-color="#0E738A">
        <ul>
          <li>
            <b
              ><button><a href="#home">Sign In</a></button></b
            >
          </li>
          <li>
            <b
              ><button><a href="#news">Create Account</a></button></b
            >
          </li>
        </ul>
      </nav>
    </header>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
