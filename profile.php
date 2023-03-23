<?php
include('function.php');
user_session();
user_check("");
?>
<!DOCTYPE html>
<html>
<head>
<meta  content='text/html;  charset=UTF-8'  http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<script src="asset/js/jquery.2.1.3.min.js" type="text/javascript"> </script>
<script src="script.js" type="text/javascript"> </script>
</head>
<body>
<div class="tp-container">
<div class="tp-boxwrap">
<header>
<div class="tp-logo">7topics Demo</div>
</header>
<nav class="tp-nav">
<!-- <ul>
	<li><a href="http://7topics.com">Home</a></li>
	<li><a href="https://7topics.com/display-users-profile-with-image-on-search-in-php.html">Tutorial</a></li>
</ul>--> 
</nav>
<div class="tp-content">
	<div class="left tp-content">
	<div class="wt_99 center">
	 <div class="navigator left">
		<ul>
		<li><a href="home.php">HOME</a></li>
		<span> &raquo; </span>
		<li>Display user image on search in php.</li>
		</ul>
	 </div>
	</div>
	<div class="wt_99 center left">
	 <div class="right search_form">
		<form action="search.php" method="post">
			<input type="text" name="user" placeholder="Search.."/>
			<input type="submit" name="submit" value="Search"/>
		</form>
	 </div>
	</div>
	<div class="tp-contentbox">
	<div class="tp-infostrip">
		<nav>
		<ul>
			<li class="left"><a href="welcome.php">Profile</a></li>
			<li class="left"><a href="logout.php">Logout</a></li>
			<li class="right"><a href="welcome.php">Hello <?php  echo  session_value("username");  ?></a></li>
		<ul>
		</nav>			
	</div>
	<div class="tp-contentwrap1">
		<div class="left wt_25 side_1">
			
			<div class="image_block">
			<img src="<?php echo user_info(session_value("id"),"image_url");?>"/>
			</div>
			<div class="menu_list">
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="deleteac.php">Delete Account</a></li>				
			</div>
		</div>
		<div class="right wt_75">
			<?php
					$id=$_GET['id'];
					$sql="SELECT  *  FROM  members  where mem_id='$id'";
					$result=mysqli_query($con,$sql);
					$rows=mysqli_fetch_array($result);
			?>
			<div class="tp-contentwrap2">
			<div class="strip-profile"><?php echo $rows['username']."'s";?> Profile</div>
			<table>
			<?php 
				$id=$rows['mem_id'];
			?>
			<tr>
				<th class="td_1" colspan="2">
					<center><?php $image=user_info($id,"image_thumb");?>	
					<a href="" target="_blank"><img src="<?php echo $image;?>" width=""/></a></center>
				</th>
			</tr>
			<tr>
				<td class="td_1">Username :</td>
				<td  class="left"><?php  echo  $rows['username'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Name :</td>
				<td  class="left"><?php  echo  $rows['name'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Email id :</td>
				<td  class="left"><?php  echo  $rows['email'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Date Of Birth :</td>
				<td  class="left"><?php  echo  $rows['dob'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Gender :</td>
				<td  class="left"><?php  echo  $rows['gender'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Profession :</td>
				<td  class="left"><?php  echo  $rows['profession'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Location :</td>
				<td  class="left"><?php  echo  $rows['location'];  ?></td>
			</tr>
			<tr>
				<td class="td_1">Website :</td>
				<td  class="left"><?php  echo  $rows['website'];  ?></td>
			</tr>
			</table>
			<div class="wt_99 left">
			<span  class="td_1">About me</span>
			<span  class="left about"><?php  echo  $rows['about_me'];  ?></span>
			</div>
			</div>
			</div>
		</div>
			
</div>

</div>
</div>
<footer class="left" id="tp-footer">
	<div class="">&copy; Copyright 7topics.com 2015-20.</div>
</footer>
</div>
</div>

</body>
</html>
