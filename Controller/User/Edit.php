<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		include_once("Model/User.php");
		$user = new User();
		$row = $user->getUserById($id);
		include_once("View/User/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$fullName=$_POST['txtFullName'];
			$email=$_POST['txtEmail'];
			$ret=$user->EditUser($id,$fullName,$email);
			if($ret>0)
			{
				header("location:admin.php?mod=user&act=manage");
			}
		}
	}
?>