<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    
   
    background-color: #BDE7F4;
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}
.logo1 img {
 
 max-width: 40px;
 width: 100%;
 margin-right: 20px;
 border-radius: 50%;
}
.logo1 {

 border-radius: 50px;
 padding: 10px;
 margin: 10px 0;
}
.logo img {
 
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}
.logo {

  border-radius: 50px;
  padding: 10px;
  margin: 10px 0;
}
.container1 {
  
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}
.container1 img {
  float: left;
  max-width: 50px;
  width: 10%;
  margin-right: 20px;
  border-radius: 50%;
}
.container {
  border: 2px solid #000000;
  background-color: rgb(14, 115, 138);
  border-radius: 50px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: rgb(8, 8, 8);
  background-color: rgb(38, 97, 115);
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.previous {
  background-color: #ffffff;
  color: black;
}
.name {
 
 max-width: 60px;
 width: 100%;
 margin-right: 20px;
 border-radius: 50%;
}
.part1
{
    float :right;
    margin: 0 auto;
    max-width: 800px;
}
.part2
{
    float :left;
    margin: 0 auto;
    max-width: 800px;
}
</style>
</head>
<body>
<div class="part1">
    <div class="logo">
        <h2>
        <img src="1.jpeg" alt="Avatar" style="width:100%;">
        NGO1</h2>
    </div>

<div class="container">
  <p>Hey</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker"> 
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey
    </p> 
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <p> so when's the food drive gonna occur</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10/12/2022
    </p>
  <span class="time-left">11:05</span>
</div>
<a href="home.php" class="previous">&laquo; Previous</a>
</div>
<div class="part2">
    <div class="logo1">
    <h4>
         <img src="2.png" alt="Avatar" style="width:500%;">
          NGO2<br>
          <br>
          <br>
    
        <img src="3.jpeg" alt="Avatar" style="width:500%;">
        NGO3<br>
        <br>
          <br>
    
        <img src="4.jpeg" alt="Avatar" style="width:500%;">
        NGO4<br>
        <br>
          <br>
  
        <img src="5.jpeg" alt="Avatar" style="width:500%;">
        NGO5<br>
        <br>
          <br>

        <img src="6.png" alt="Avatar" style="width:500%;">
         NGO6<br>
         <br>
          <br>
   </h4>
    </div>
</div>
</body>
</html>