<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.heading{
  font-size:45px;
  text-transform:uppercase;
  padding:25px 19px;
  text-align:center;
  color:navy;
}
.about{
    font-size:26px;
    padding:16px;
    background:#333;
    margin:30px 20px 20px 20px;
    border-radius:5px;
    width:100%;
    color:white;
}

</style>

</head>
<body>
<div class="heading">Patient Centered Information Exchange System</div>
<div style='width:100%;background:darkblue'>
</div>
 <div class="about">Profile:  </div>




    <?php
    $con = mysqli_connect("localhost","root","");
    if(!$con)
        {
    die('Could not connect: ' . mysqli_error());
    }


      mysqli_select_db($con,'incubate_hack');
      $hid=$_SESSION['hid'];
      //print_r($_SESSION['userid']);
      $sql_query="SELECT * FROM hospital where hid=$hid";
    //  $res=mysqli_query($con,$sql_query);
    $res=mysqli_query($con,$sql_query);
    $values=mysqli_fetch_assoc($res);
    //echo "Name:" . $values['NAME'];
    echo "<div style='width:35%;color:black;font-size:22px;padding:9px;margin:30px;borderradius:5px background: rgb(79, 169, 241);border: 2px solid #fff;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .5);border-radius:10px;' ";
    echo "<p style='padding:5px'>Hospital id : " .$values['hid']."<p>";
    echo "<p style='padding:5px'>Name : ".$values['name']  ."</p>";
    //echo "<p style='padding:5px'>Date of Birth: ""<p>";
       echo "<p style='padding:5px'>Branch: ".$values['branch']."<p>";
       echo "<p style='padding:5px'>Address : ".$values['address']."<p>";
    echo "<p style='padding:5px'>Phone no. : ".$values['contact']."<p>";
    echo "<p style='padding:5px'>Email-id: ".$values['email']."<p>";




    echo "</div>";
   // echo " <a href='#' style='padding-left:50px;font-size:25px;'>Edit</a>";

  ?>
<!-- <div class="reports">View Reports

</div> -->



<!-- <button class="open-button" onclick="openForm()">Open Form</button> -->






</body>
<!-- <button class="block">VIEW REPORTS</button> -->
</html>
