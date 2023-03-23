<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>
    <link rel="stylesheet" href="./notificationstyle.css" />
    <!-- / <link rel="stylesheet" href="./post-icon.css" /> -->

    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />-->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');



body{
  background-color:#e3e1e1;
  
}

header{
    display:flex;
    justify-content: space-between;
    
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
  z-index:2000;
}
li a {
  display: block;
  color:rgb(14, 115, 138);
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

.Request
{
    width:300px;
    height:425px;
    background-color: #D9D9D9;
    margin-left:30px;
    margin-top:140px;
    box-shadow: 10px 10px 5px #878585;
    
}
.up_req
{
    width:300px;
    height:55px;
    background-color: #0E738A;
    margin-left:0px;
    margin-top:0px;
    display:flex;
    align-items:center;
    justify-content: center;
}

.up_req h3 {
  color:white;

}
.down_req
{
    width:285px;
    height:45px;
    background-color: #fffbfb ;
    margin-top:7px;
    margin-left:7px;
    display: flex;
    justify-content:space-between;

   

}


.notif
{
  background-color: #d9d9d9;
  text-align: center;
  width:500px;
  height: 600px;
  margin-top: 115px;
  box-shadow: 10px 10px 5px #878585;

 
}

.notif h3
{
   color:white;
}

.notif-content
{
    /* font-family: 'Rajdhani', sans-serif; */
    background-color: rgb(255, 255, 255);
    width:485px;
    height:45px;
    margin-top: 5px;
    text-align: left;
    margin-left: 5px;
    margin-right: 5px;
    display: flex;
    justify-content: space-between;
}


.notif p
{
    margin-left:45px;
}
.notifup
{
  width:500px;
  height:55px;
  background-color: #0E738A;
  margin-left:0px;
  margin-top:0px;
  display:flex;
  align-items:center;
  justify-content: center;

}

.row{
    display:flex;
    justify-content: space-evenly;
}

.new_event
{
    width:300px;
    height:425px;
    background-color: #D9D9D9;
    margin-left:30px;
    margin-top:140px;
    box-shadow: 10px 10px 5px #878585;

}
.new_event h3
{
  color:white;
}
.up_event
{
    width:300px;
    height:55px;
    background-color: #0E738A;
    margin-left:0px;
    margin-top:0px;
    display:flex;
    align-items:center;
    justify-content: center;
}

.down_event
{
    width:285px;
    height:45px;
    background-color: #fffbfb ;
    margin-top:-9px;
    margin-left:7px;
   
}
.row img{
    position: absolute;
    height:35px;
    width:35px;
    border-radius: 50%;
    margin-top: 6px;
    margin-left:5px;
}
.Request p{
    margin-left:45px;
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

    <div id="notif-container">
      <div class="row">
        <div class="Request">
          <div class="up_req">
            <h3>Requests</h3>
          </div>
          <div class="down_req">
            <img src="profpic.jpg" />
            <p>Shreya requested to follow you.</p>
          </div>
          <div class="down_req">
            <img src="profilepic1.jpg" />
            <p>You accepted Rohit's request</p>
          </div>
          <div class="down_req">
            <img src="profilepic2.webp" />
            <p>You started following Helping hands</p>
          </div>
          <div class="down_req">
            <img src="profilepic3.jpg" />
            <p>You started following Sunshine</p>
          </div>
          <div class="down_req">
            <img src="profilepic4.jpg.crdownload" />
            <p>Rahul sent you a request</p>
          </div>
          <div class="down_req">
            <img src="profilepic5.jpg" />
            <p>Saloni sent you a request</p>
          </div>
          <div class="down_req">
            <img src="profilepic6.jpg" />
            <p>You joined the Aahara community</p>
          </div>
        </div>

        <div class="notif">
          <div class="notifup">
            <h3>Notifications</h3>
          </div>
          <div class="notif-content">
            <img src="mainprof1.webp" />
            <p>Helping hands is starting a new event</p>
          </div>
          <div class="notif-content">
            <img src="mainprof2.jpg" />
            <p>Joy and Hopes is starting a new event</p>
          </div>
          <div class="notif-content">
            <img src="mainprof3.jpg" />
            <p>5 volunteers needed by Sunshine NGO</p>
          </div>
          <div class="notif-content">
            <img src="mainprof4.jpg" />
            <p>You got a message from Saloni</p>
          </div>
          <div class="notif-content">
            <img src="mainprof5.jpg" />
            <p>Sunshine is starting a new event</p>
          </div>
          <div class="notif-content">
            <img src="mainprog6.jpg" />
            <p>Your contacts joined the community</p>
          </div>
        </div>

        <div class="new_event">
          <div class="up_event">
            <h3>New Events</h3>
          </div>
          <div class="down_event">
            <p><b>2/10/22:</b>National food drive</p>
          </div>
          <div class="down_event">
            <p><b>12/10/22:</b> Helping Hands</p>
          </div>
          <div class="down_event">
            <p><b>23/10/22:</b> Food Aid Camp</p>
          </div>
          <div class="down_event">
            <p><b>30/10/22:</b> Donation drive</p>
          </div>
          <div class="down_event">
            <p><b>12/11/22:</b> Sunshine</p>
          </div>
          <div class="down_event">
            <p><b>16/11/22:</b> All goa food drive</p>
          </div>
          <div class="down_event">
            <p><b>25/11/22: </b>Helping Hands</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
