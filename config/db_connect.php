<?php 
	
	$conn = mysqli_connect('localhost', 'awsaf', '3265', 'awsaf_personal');

	if(!$conn)
	{
		echo 'Connection Error: ' . mysqli_connect_error();
	}

 ?>