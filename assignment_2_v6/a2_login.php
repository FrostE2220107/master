<?php
	session_start();
	include 'a2_banner.php';
	if(isset($_POST['login'])){
 
		session_start();
		include 'a2_dbconnect.php';
		//take user input
		$username=$_POST['username'];
		$password=$_POST['password'];
		//gather the database informatino
		$query=mysqli_query($mysqli,"select * from `website_users` where username='$username' && password='$password'");
 
		//check if the user details are vallid
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:a2_index.php');
		}
		else{
			 $_SESSION['loggedin'] = true;
			 $_SESSION['username'] = $username;
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['username'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['uid']=$row['id'];
			header('location:a2_menu.php');
		}
	}
	else{
		header('location:a2_index.php');
		$_SESSION['message']="Please Login!";
	}
?>