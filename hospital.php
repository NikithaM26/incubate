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
  background-color: lavender;

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
/* .block {
  display: block;
  width: 25%;

  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 120px 18px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  margin-top:25px;
  margin-left:30px;
}

.block:hover {
  background-color: #ddd;
  color: black;
} */

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20%;
}
.container > div {
  margin: 10px;
}
.container .btn{
  margin: 20px;
  font-size: 20px;
  background-color: darkblue;
  color: white;
  padding: 0 20%;
}
/*
.container1 {
  position: relative;
  width: 100%;
  max-width: 400px;
  margin-left:100px;
}*/
.container img {
  width:340px;
  height: 340px;
  /* padding:30px; */
  margin-top:45px;
  margin-bottom:45px;
  border-radius:10px;
}
/*
.container1 img {
  width:340px;
  height: 340px;
  /* padding:30px;
  margin-top:45px;
  margin-bottom:45px;
  border-radius:10px;
}
*/

/*
.container1 .btn {
  position: absolute;
  top: 100%;
  left: 53%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: black;
  font-size: 25px;
  padding: 12px 24px;
  border:none;
  cursor: pointer;
  text-align: center;
  font-weight:bold;
}
*/
.container .btn:hover {
border: 1px solid ;
border-radius:5px;
}
/*
.container1 .btn:hover {
border: 1px solid ;
border-radius:5px;
}
*/

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 10px 4px;
  width:340px;
  height: 340px;
  /* padding:30px; */
  margin-top:45px;
  margin-bottom:45px;
  border-radius:10px;
}

/* Create four equal columns that sits next to each other *//*
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 10px;
  width:340px;
  height: 340px;
  /* padding:30px;
  margin-top:45px;
  margin-bottom:45px;
  border-radius:10px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}
*/
</style>
</head>
<body>
<div class="heading">Patient Centered Information Exchange System

</div>
<div class="topnav" id="myTopnav">
  <!-- <a href="#home" class="active">Logout</a> -->
  <a href="login.php" >Logout</a>
  <a href="hospital-profile.php">Profile</a>
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
<!-- <div class="reports">View Reports-->

</div>
<div class="container">
    <div>
    <img src="images/my_patients.jpg">
    <button class="btn"><a href="search.php" style="text-decoration:none;color:white;">Search Patients</a></button>
    </div>

    <div>
    <img src="images/patient2.jpg">
    <button class="btn">Add Patients</button>
    </div>

    <div>
    <img src="images/patient_report.jpg" >
    <button class="btn">View Reports</button>
    </div>

    <div>
    <img src="images/preport.jpg">
    <button class="btn">Upload Patient Records</button>
    </div>
</div>

<!-- <div class="container">
  <img src="images/my_patients.jpg" alt="Snow" style="width:100%">
  <button class="btn">List of Patients</button>
</div>
<div class="container1">
  <img src="images/patient2.jpg" alt="Snow" style="width:100%">
  <button class="btn">Add Patients</button>
</div> <br>
<div class="container" >
  <img src="images/patient_report.jpg"  style="width:100%">
  <button class="btn">View Reports</button>
</div>
<div class="container1" >
  <img src="images/preport.jpg" alt="Snow" style="width:100%">
  <button class="btn">Upload Patient Records</button>
</div> -->




<!-- <button class="block">VIEW REPORTS</button> -->
</html>
