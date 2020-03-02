<?php

	include('config/db_connect.php');	
?>

<!DOCTYPE html>
<html>
<head>


<style type="text/css">

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
<?php include 'templates/header.php'; ?>
<body>

<div class="curved-div">
      <svg viewBox="0 0 1440 150">
          <path fill="#ff471a" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>

    <h3>Tuition Helper</h3>
  <p>All-In-One Solution For Your Tuition Activity</p>
      <svg viewBox="0 0 1440 240">
       <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
</div>

	</body>



<div class="container">

    <ul id="nav-mobile" class="center">
      <li><a href="#" class="btn brand z-depth-1">Check-In</a></li>
    </ul>

</div>


</html>