<?php 
$mysqli_hostname  =  "localhost";
$mysqli_user  =  "root";
$mysqli_password  =  "";
$mysqli_database  =  "ideathon";
$con = mysqli_connect($mysqli_hostname,$mysqli_user,$mysqli_password,$mysqli_database);
if(!$con){
	echo "Database Connection failed!";
	exit();
}
function session_value($val){
	if($val=="id"){
		$res=$_SESSION['user_id'];
	}elseif($val=="username"){
		$res=$_SESSION['username'];
	}elseif($val=="login"){
		$res=$_SESSION['login_user'];
	}
	return $res;
}
function user_check($page){
	if($page=="home"){
		if(length(session_value("login"))!='1'){
			header("location:  home.php");
		}
	}if($page==""){
		$ss=length(session_value("login"));
		if(length(session_value("login"))=='1'){
			header("location:  login.php?remark_login=failed");
		}
	}
}
function session_check($arg){
	if($arg=="formaccess"){
	$x=$_SESSION['login_user'];
	$len=length($x);
	if($len!="1"){
		header("location:  ./dashboard/index.php?remark=previous_session_error");
	}
	}
	if($arg==""){
		$_SESSION['user_id']="";
		session_start();
		if($_SESSION['user_id']==0){
			header("location:  ./login.php?goback");
		}
	}
	}
function user_session(){
	global $con,$prefix;
	session_start();
	if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != ""){}else{
	$x=substr(str_shuffle('23456789'),0,4);
	$_SESSION['user_id']=$x;
	}
	if(isset($_SESSION['username']) && $_SESSION['username'] != ""){}else{
		$x=substr(str_shuffle('ABCDEFRTOPICS23456789'),0,5);
		$_SESSION['username']="Guest_".$x."";
	}
	if(isset($_SESSION['login_user']) && $_SESSION['login_user'] != ""){}else{
		$x=substr(str_shuffle('abcdefrtopics23456789'),0,1);
		$_SESSION['login_user']=$x;
	}
}

function length($get){
		$x=strlen($get);
		return $x;
	}
function user_info($id,$value="name"){
	global $con;
	$sql=mysqli_query($con,"Select * from members where mem_id='$id'");
	$row=mysqli_fetch_array($sql);
	if($value=="name"){
		$rs=$row['name'];
	}if($value=="username"){
		$rs=$row['username'];
	}if($value=="email"){
		$rs=$row['email'];
	}if($value=="dob"){
		$rs=$row['dob'];
	}if($value=="profession"){
		$rs=$row['profession'];
	}if($value=="gender"){
		$rs=$row['gender'];
	}if($value=="location"){
		$rs=$row['location'];
	}
	if($value=="image_check"){
		$rs=$row['image_url'];
	}
	if($value=="image"){
		if($row['image_url']!=""){
		$rs=$row['image_url'];
		}else{
		$rs="upload/user.png";		
		}
	}if($value=="image_url"){
		if($row['image_url']!=""){
		$rs="upload/pic_".$row['image_url'];
		}else{
		$rs="upload/user.png";		
		}
	}if($value=="image_thumb"){
		if($row['image_url']!=""){
		$rs="upload/thumb_".$row['image_url'];
		}else{
		$rs="upload/user.png";		
		}
	}
	if($value=="website"){
		$rs=$row['website'];
	}if($value=="about_me"){
		$rs=$row['about_me'];
	}
	return $rs;
}
?>