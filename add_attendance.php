<?php 
  include 'config/db_connect.php';
   $error = '';
// echo 'Error = '.$error;

  if (isset($_POST['submit'])) {

        $class_no = mysqli_real_escape_string($conn, $_POST['class_no']);
        $month = mysqli_real_escape_string($conn, $_POST['month']);

        $sql = "INSERT INTO attendance (month, class_no) VALUES ('$month', '$class_no')";

      if (mysqli_query($conn, $sql)) {
    // success
        header('Location: index.php');
      }
      else{
        include 'alert.php';
      }




}
    
 ?>


<!DOCTYPE html>
<html>
  <?php include 'templates/header.php'; ?>

  <body>




<div class="container">
  <h4 class="center grey-text">Add Attendance</h4>

  <form class="white" action="add_attendance.php" method="POST">

      <div class="form-group">
      <label for="clas">Select Class Number</label>
      <select class="form-control" id="clas" name="class_no">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>

      </select>
      </div>

      <div class="form-group">
      <label for="mon">Select Month</label>
      <select class="form-control" id="mon" name="month">
        <option>Month A</option>
        <option>Month B</option>
        <option>Month C</option>
        <option>Month D</option>
        <option>Month E</option>
        <option>Month F</option>
        <option>Month G</option>

      </select>
      </div>

      <div class="center">
        <input type="submit" id="submit" name="submit" value="submit" class="btn brand z-depth-1" href="#">
      </div>


    </form>

</div>
    

  </body>


</html>