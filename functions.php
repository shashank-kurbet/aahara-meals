<?php

function check_login($con)
{

	if(isset($_SESSION['u_id']))
	{

		$id = $_SESSION['u_id'];
		$query = "select * from users where u_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
function ran_num(){
	
    
    $x++;
	return $x;
}
// function random_num($length)
// {
// 	static $x=0;
//     $arr=array();
// 	$text = "";
// 	if($length < 5)
// 	{
// 		$length = 5;
// 	}

// 	$len = rand(4,$length);

// 	for ($i=0; $i < $len; $i++) { 
// 		# code...

// 		$text .= rand(0,9);
// 	}
// 	for($i=0;$i<=$x;$i++){
// 		if($text==$arr[$i]){
// 			$text=rand(1,1000000000000);
// 		}
// 	}
// 	$arr[$x]=$text;
//     $x++;
// 	return $text;
// }