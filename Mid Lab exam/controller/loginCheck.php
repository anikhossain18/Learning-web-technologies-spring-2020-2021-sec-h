<?php
	session_start();

	if(isset($_POST['submit']))
	{  
		
		$myfile = fopen('../model/data.json', 'r');
		$data = fread($myfile, filesize('../model/data.json'));
		$userloginfo = json_decode($data, true);

		$username = $userloginfo[0]['username'];
		$password = $userloginfo[0]['password'];

		if($username == "" || $password == "")
		{
			echo "<h2>username and password are not matching</2>";
		}
		else
		{
			if($username == $_POST['userName'] && $password == $_POST['passWord']){
				$_SESSION['flag'] = true;
				header('location:../view/home.php');
			
			}
			else
			{
				echo ("<h2>Please input correct username or password </h2>");
			}
		}
	}


?> 