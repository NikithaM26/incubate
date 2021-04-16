<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Statistics</title>
  </head>
  <body>
  <?php
      session_start();
      $con = mysqli_connect("localhost","root","","incubate_hack");
      $pID = $_SESSION['pid'];
if(!$con)
{
die("Could not connect " . mysqli_error());
}

  $sql = "SELECT * FROM basic_result WHERE pid = $pID ";

  $result = mysqli_query($con,$sql);
  while($rows = mysqli_num_rows($result))
  {
    echo $rows['bp_sys'];
  }

  if(!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }

  else
  {
    echo"<script>alert('Incorrect username or password');</script>";
  }

       ?>
  </body>
</html>
