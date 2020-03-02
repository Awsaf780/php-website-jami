<?php

	include('config/db_connect.php');	
?>

<!DOCTYPE html>
<html>

<?php include 'templates/header.php'; ?>
<body>


<h4 class="center grey-text">Attendance</h4>

<div class="container">



<div id="accordion">

    <div class="card">
      	<div class="card-header center brand">
        	<a class="collapsed card-link center white-text" data-toggle="collapse" href="#collapseOne1">Month A</a>
     	</div>

    <div id="collapseOne1" class="collapse" data-parent="#accordion">
        <div class="card-body">     

<!-- Table for English Language -->
			<table class="table table-hover">
				<!-- <h3 class="grey-text">English Literature</h3> -->	
					<thead class="black white-text">
						<tr>
							<th class="center">Class Number</th>
							<th class="center">Date</th>
						</tr>
					</thead>
<?php	
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	
		// Results for class 1 
		$sql = "SELECT * FROM attendance WHERE month = 'Month A' ORDER BY class_no";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) 
		{
			echo '<tr class="brand white-text"><td class="center">' . $row["class_no"]. '</td><td class="center">' . $row["date"] . "</td></tr>";
		}
			echo "</table>";
		} 
		else { echo "<h6>No Results Found</h6>";
     	}
?>

			</table>
<!-- End of table -->



        </div>
    </div>
</div>
    <!-- end of first card -->



    <div class="card">
      	<div class="card-header center brand">
        	<a class="collapsed card-link center white-text" data-toggle="collapse" href="#collapseOne2">Month B</a>
     	</div>

    <div id="collapseOne2" class="collapse" data-parent="#accordion">
        <div class="card-body">     

<!-- Table for English Language -->
			<table class="table table-hover">
				<!-- <h3 class="grey-text">English Literature</h3> -->	
					<thead class="black white-text">
						<tr>
							<th class="center">Class Number</th>
							<th class="center">Date</th>
						</tr>
					</thead>
<?php	
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	
		// Results for class 1 
		$sql = "SELECT * FROM attendance WHERE month = 'Month B' ORDER BY class_no";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) 
		{
			echo '<tr class="brand white-text"><td class="center">' . $row["class_no"]. '</td><td class="center">' . $row["date"] . "</td></tr>";
		}
			echo "</table>";
		} 
		else { echo "<h6>No Results Found</h6>";
     	}
?>

			</table>
<!-- End of table -->


        </div>
    </div>
</div>
    <!-- end of first card -->



    <div class="card">
      	<div class="card-header center brand">
        	<a class="collapsed card-link center white-text" data-toggle="collapse" href="#collapseOne3">Month C</a>
     	</div>

    <div id="collapseOne3" class="collapse" data-parent="#accordion">
        <div class="card-body">     

<!-- Table for English Language -->
			<table class="table table-hover">
				<!-- <h3 class="grey-text">English Literature</h3> -->	
					<thead class="black white-text">
						<tr>
							<th class="center">Class Number</th>
							<th class="center">Date</th>
						</tr>
					</thead>
<?php	
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	
		// Results for class 1 
		$sql = "SELECT * FROM attendance WHERE month = 'Month C' ORDER BY class_no";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) 
		{
			echo '<tr class="brand white-text"><td class="center">' . $row["class_no"]. '</td><td class="center">' . $row["date"] . "</td></tr>";
		}
			echo "</table>";
		} 
		else { echo "<h6>No Results Found</h6>";
     	}
?>

			</table>
<!-- End of table -->


        </div>
    </div>
</div>
    <!-- end of first card -->



    <div class="card">
      	<div class="card-header center brand">
        	<a class="collapsed card-link center white-text" data-toggle="collapse" href="#collapseOne4">Month D</a>
     	</div>

    <div id="collapseOne4" class="collapse" data-parent="#accordion">
        <div class="card-body">     

<!-- Table for English Language -->
			<table class="table table-hover">
				<!-- <h3 class="grey-text">English Literature</h3> -->	
					<thead class="black white-text">
						<tr>
							<th class="center">Class Number</th>
							<th class="center">Date</th>
						</tr>
					</thead>
<?php	
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	
		// Results for class 1 
		$sql = "SELECT * FROM attendance WHERE month = 'Month D' ORDER BY class_no";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) 
		{
			echo '<tr class="brand white-text"><td class="center">' . $row["class_no"]. '</td><td class="center">' . $row["date"] . "</td></tr>";
		}
			echo "</table>";
		} 
		else { echo "<h6>No Results Found</h6>";
     	}
?>

			</table>
<!-- End of table -->

        </div>
    </div>
</div>
    <!-- end of first card -->



</div> 
</div>

	

</body>
</html>