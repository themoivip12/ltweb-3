<?php
	include_once("Model/User.php");
	$user = new User();
	if(isset($_SESSION["lgUserID"])){
		$id = $_SESSION["lgUserID"];
		$row = $user->getUserById($id);
		include_once ("View/User/About.php");
	}
	else{
		header("location: login.php?mod=user&act=login");
	}
?>