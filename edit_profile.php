<?php
include('function.php');
user_session();
user_check("");
?>
<!DOCTYPE html>
<html>
<head>
<meta  content='text/html;  charset=UTF-8'  http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="edit_profile.css"/>
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
<ul>
	<li><a href="http://7topics.com">Home</a></li>
	<li><a href="https://7topics.com/display-users-profile-with-image-on-search-in-php.html">Tutorial</a></li>
</ul>
</nav>
<div class="tp-content">
	<div class="wt_99 center">
	 <div class="navigator left">
		<ul>
		<li><a href="index.php">HOME</a></li>
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
					$var=session_value("id");
					$sql="SELECT  *  FROM  members  where  mem_id=$var";
					$result=mysqli_query($con,$sql);
					$rows=mysqli_fetch_array($result);
			?>
			<div class="tp-contentwrap2">
			<div class="strip-profile">Edit Profile</div>
			<?php
					$remarks  =  isset($_GET['remark_login'])  ?  $_GET['remark_login']  :  '';
					if  ($remarks==null  and  $remarks=="")
					{}
					if  ($remarks=='invalid_email')
					{
						echo  '<span class="tp-regtext lightred">Invalid E-mail.</span>';
					}if  ($remarks=='name')
					{
						echo  '<span class="tp-regtext lightred">Enter Your Name.</span>';
					}
				?>
			<form action="updateac.php" method="post" enctype="multipart/form-data">
			<table>
			<tr>
				<td class="td_1">Image :</td>
				<td  class="right"><input type="file" name="image_file"/></td>
			</tr>
			<tr>
				<td class="td_1">Name :</td>
				<td  class="right"><input type="text" name="name" value="<?php  echo  $rows['name'];  ?>" placeholder="name"/></td>
			</tr>
			<tr>
				<td class="td_1">Email id :</td>
				<td  class="right"><input type="text" name="email" value="<?php  echo  $rows['email'];  ?>" placeholder="email"/></td>
			</tr>
			<tr>
				<td class="td_1">Date Of Birth :</td>
				<td  class="right"><input type="text" name="dob" value="<?php  echo  $rows['dob'];  ?>" placeholder="dd/mm/yyyy"/></td>
			</tr>
			<tr>
				<td class="td_1">Gender :</td>				
				<?php  $sad=$rows['gender']; if($sad=="male"){$rs="selected";}else{$rs="";}if($sad=="female"){$acer="selected";}else{$acer="";}  ?>
				<td  class="right">
				<select name="gender">
					<option value="male" <?php echo $rs;?> >Male</option>
					<option value="female" <?php echo $acer;?> >Female</option>
				</select>	
				</td>
			</tr>
			<tr>
				<td class="td_1">Profession :</td>
				<td  class="right"><input type="text" name="profession" value="<?php  echo  $rows['profession'];  ?>" placeholder="profession"/></td>
			</tr>
			<tr>
				<td class="td_1">Location :</td>
				<td  class="right">				
					<textarea name="location" placeholder="location..."><?php  echo  $rows['location']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td class="td_1">Website :</td>
				<td  class="right"><input type="text" name="website" value="<?php  echo  $rows['website'];  ?>" placeholder="website"/></td>
			</tr>
			<tr>
				<td class="td_1">About Me :</td>
				<td  class="right">
					<textarea name="about_me" placeholder="About me..."  rows="2" cols="25"><?php  echo  $rows['about_me'];?></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="submit" value="submit"/></th>
			</tr>
			</table>
			</form>
			</div>
			</div>
		</div>
			
</div>

</div>
<footer>
	<div class="">&copy; Copyright 7topics.com 2015-20.</div>
</footer>
</div>
</div>

</body>
</html>
