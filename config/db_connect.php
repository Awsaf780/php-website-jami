<?php 
	
	$conn = mysqli_connect('localhost', 'awsaf', '3265', 'jami');

	if(!$conn)
	{
		echo 'Connection Error: ' . mysqli_connect_error();
	}

 ?>