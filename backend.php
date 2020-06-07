<?php
	
	if($_SERVER ['REQUEST_METHOD'] === 'POST')
	{
		
		$user = $_POST['user'];
		
		$pass = $_POST['pass'];
 		
		
		echo "Your Name is ".$user."<br><br>";
		echo "Password is ".$pass."<br><br>";
	}


?>