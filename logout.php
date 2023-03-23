<?php

session_start();

if(isset($_SESSION['u_id']))
{
	unset($_SESSION['u_id']);

}
require_once("chat/php/logout.php");
header("Location: login.php");
die;

?>