<?php 
	include('config/db_connect.php');
 ?>


<head>
	<title>Flare Database</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	  <!-- Compiled and minified CSS -->
   	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body class="white">


<nav class="brand z-depth-0">
	<div class="container brand-text">

		<!-- <ul id="nav-mobile" class="brand left">
			<li><a href="index.php" class="brand-logo white-text"><img src="logo.png" alt="Flare" style="width:40px;height:40px;border:0;"></a></li>
		</ul>

		 -->

		<ul id="nav-mobile" class="brand left">
				<li><a href="index.php" class="white-text"><h5><b>Flare</b></h5></a></li>

  			
		</ul>
		
		<ul id="nav-mobile" class="brand right">
			<div class="container">
				<div class="dropdown">
  				<button type="button" class="brand btn btn-primary dropdown-toggle" data-toggle="dropdown">Resource</button>
  					<div class="dropdown-menu">
   						 <a class="dropdown-item" href="grade.php">Grades</a>
    		   			 <a class="dropdown-item" href="attendance.php">Attendance</a>
  					</div>
			</div>
			</div>
			
		</ul>

		<!-- <ul id="nav-mobile" class="brand right">
			<li><a href="attendance.php" class="brand">Attendance</a></li>
		</ul>

		<ul id="nav-mobile" class="brand right">
			<li><a href="grade.php" class="brand">Grades</a></li>
		</ul> -->




	</div>
</nav>