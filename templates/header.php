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

<style type="text/css">
	.brand{
		background: #ff471a !important;
	}
	.brand-text{
		color: #ff471a !important;
	}

	form{
		max-width: 450px;
		margin: 20px auto;
		padding: 20px;
	}

	.curved-div {
  		background: #ff471a;
  		color: #FFF;
  		text-align: center;
	}
	.curved-div h2 {
  		font-size: 6rem;
  		/*font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;*/
  		margin-top: 0;
	}
	.curved-div p {
  		font-size: 1rem;
  		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  		margin: 0 5rem 0 5rem;
	}
	.curved-div svg {
  		display: block;
	}

</style>

</head>
<body class="white">


<nav class="brand z-depth-0">
	<div class="container brand-text">

		<!-- <ul id="nav-mobile" class="brand left">
			<li><a href="index.php" class="brand-logo white-text"><img src="logo.png" alt="Flare" style="width:40px;height:40px;border:0;"></a></li>
		</ul>

		 -->

		<ul id="nav-mobile" class="brand left">
			<li><a href="index.php" class="brand-logo white-text">Flare</a></li>
		</ul>
		
		<ul id="nav-mobile" class="brand right">
			<div class="dropdown">
  				<button type="button" class="brand btn btn-primary dropdown-toggle" data-toggle="dropdown">Materials </button>
  					<div class="dropdown-menu">
   						 <a class="dropdown-item" href="class1.php">Mathematics</a>
    		   			 <a class="dropdown-item" href="class2.php">Science</a>
   						 <a class="dropdown-item" href="class3.php">Literature</a>
   						 <a class="dropdown-item" href="class4.php">History</a>
  					</div>
			</div>
		</ul>

		<ul id="nav-mobile" class="brand right">
			<li><a href="attendance.php" class="brand">Attendance</a></li>
		</ul>

		<ul id="nav-mobile" class="brand right">
			<li><a href="#" class="brand">Grades</a></li>
		</ul>




	</div>
</nav>