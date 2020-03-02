<?php 
	include('config/db_connect.php');

	$sql = "SELECT balance FROM bkash_doc ORDER BY serial_id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$balance = mysqli_fetch_assoc($result);


 ?>
<head>
	<title>bKash Database</title>

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
		background: #e6005c !important;
	}
	.custom_color{
		background: #e6005c !important;
	}
	.brand-text{
		color: #e6005c !important;
	}
	.custom_color-text{
		color: #ff6699 !important;
	}
	form{
		max-width: 460px;
		margin: 20px auto;
		padding: 20px;
	}

body {

  background-image: url('images/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


</style>

</head>
<body class="black">
	<div style="background-image: url('images/background.jpg') filter: blur(8px) -webkit-filter: blur(8px)"></div>

<nav class="black z-depth-4">
	<div class="container brand-text">
		<ul id="nav-mobile" class="left hide-on-small-and-down">
			<li><a href="index.php" class="brand-logo brand-text">bKash Database</a></li>
		</ul>
		
		<ul id="nav-mobile" class="right hide-on-small-and-down">
			<li>Current Balance : <?php echo htmlspecialchars($balance['balance']); ?> BDT</li>
		</ul>


	</div>
</nav>