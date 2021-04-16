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

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 19px 36px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.heading{
  font-size:45px;
  text-transform:uppercase;
  padding:25px 19px;
  text-align:center;
  color:navy;
}
.reports{
  padding:150px 150px;
  background:lightblue;
}

.container {
  position: relative;
  width: 100%;
  max-width: 400px;
  float:left;
  margin-left:80px;
}

.container img {
  width:340px;
  height: 340px;
  /* padding:30px; */
  margin-top:45px;
  margin-bottom:45px;

  border-radius:10px;
}

.container .btn {
  position: absolute;
  top: 100%;
  left: 53%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: black;
  font-size: 35px;
  padding: 12px 24px;
  border:none;
  cursor: pointer;
  text-align: center;
  font-weight:bold;
}

.container .btn:hover {
border: 1px solid ;
borde-radius:5px;

}
</style>
</head>
<body>
<div class="heading">Patient Centered Information Exchange System

</div>
<div class="topnav" id="myTopnav">
  <!-- <a href="#home" class="active">Logout</a> -->
  <a href="login.php" >Logout</a>
  <a href="doctor-profile.php">Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!-- <div class="reports">View Reports

</div> -->


<div class="container">
  <img src="images\patient_report.jpg" alt="Snow" style="width:100%">
  <button class="btn">VIEW PATIENT REPORT</button>
</div>
<div class="container" >
  <img src="images\my_patients.jpg" alt="Snow" style="width:100%">
  <button class="btn">MY PATIENTS</button>
</div>
<div class="container" >
  <img src="images\patient2.jpg" alt="Snow" style="width:100%">
  <button class="btn">VIEW PATIENTS LIST</button>
</div>




<!-- <button class="block">VIEW REPORTS</button> -->
</html>
