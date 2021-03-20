<?php

	$username= $_Post['username'];
	$password= $_Post['password'];

	mysql_connect("localhost","root","","web tech");

	$result= mysql_query("select * from users where username= $'password'")
	$row= mysql_fetch_array($result);

	if ($row['username']== $username && $row['password']== $password)
		echo "Login success!!"
