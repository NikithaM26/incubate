<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Patient Dashboard</title>
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
  font-size: 25px;
  padding: 12px 24px;
  border:none;
  cursor: pointer;
  text-align: center;
  font-weight:bold;
}

.container .btn:hover {
border: 1px solid ;
border-radius:5px;

}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
/* .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
} */

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 1.5%;
  left: 70%;
  border: 3px solid ffff;
  background-color: rgb(107, 200, 243) ;
  z-index: 9;
  border-radius: 10px;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: rgb(107, 200, 243);
  border-radius: 10px;
}

/* Full-width input fields */
.form-container input[type=number]
{
  width: 95%;
  padding: 12px;
  margin: 5px 0 15px 5px;
  border: none;
  background: #f1f1f1;
  border-radius: 3px;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 8px 15px;
  border: none;
  cursor: pointer;
  width: 35%;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 5px;
  font-size:17px;
  font-weight: bold;
  float:right;
  margin-top: 3px;
  margin-right: 20px;

}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  width: 35%;
  /* display: flex;
  flex: 1;
  justify-content: center;
  align-items: center; */
  float: left;
  border-radius: 5px;
  margin-left: 20px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.chat {
  position: absolute;
  bottom: 10px;
  right: 16px;
  font-size: 3rem;
  color:rgb(147, 210, 240);

}

</style>

</head>
<body>
<div class="heading">Patient Centered Information Exchange System</div>
<div class="topnav" id="myTopnav">
  <!-- <a href="#home" class="active">Logout</a> -->
  <a href="login.php" >Logout</a>
  <a href="patient-profile.php">Profile</a>
  <a href="#contact">Stats</a>
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
  <img src="images\patient_report.jpg" style="width:100%">
  <button class="btn">View Reports</button>
</div>
<div class="container" >
  <img src="images\preport.jpg" style="width:100%">
  <!-- <button class="btn">UPLOAD BASIC TEST RESULTS</button> -->
  <button class="btn" onclick="openForm()">Upload Basic Test Results</button>

</div>

<!-- <button class="open-button" onclick="openForm()">Open Form</button> -->



<div class="form-popup" id="myForm">
  <form action="" method="post" class="form-container">
    <h2>&nbsp &nbsp &nbspBASIC TEST RESULTS &nbsp</h2>

    <label for="bp_sys"><b>&nbspBP-Systole</b></label>
    <input type="number" placeholder="Enter BP-Systole" name="bp_sys" > <br>

    <label for="bp_dia"><b>&nbspBP-Diastole</b></label>
    <input type="number" placeholder="Enter BP-Diastole" name="bp_dia" > <br>

    <label for="oxy"><b>&nbspO2 Saturation Rate</b></label>
    <input type="number" placeholder="Enter O2 Saturation Rate" name="oxy" > <br>

    <label for="pulse"><b>&nbspPulse Rate</b></label>
    <input type="number" placeholder="Enter Pulse Rate" name="pulse" > <br>

    <label for="sugar"><b>&nbspSugar Level</b></label>
    <input type="number" placeholder="Enter Sugar Level" name="sugar" > <br>

    <button type="submit" name="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div class="chat">
  <a href="skype:live:.cid.2baf5d7c973fd53f?chat" style="text-decoration: none;">Start Call <i class="fa fa-skype"></i></a>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<?php

        $con = mysqli_connect("localhost", "root", "","incubate_hack");

        if(!$con)
        {
          die("Could not connect " . mysqli_error());
        }



        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
          if(isset($_POST['submit']))
          {
            $patientID = $_SESSION['pid'];
            $sql = "INSERT INTO basic_result (pid,bp_sys,bp_dia,oxy,pulse,sugar) VALUES('$patientID','$_POST[bp_sys]', '$_POST[bp_dia]',
           '$_POST[oxy]', '$_POST[pulse]', '$_POST[sugar]')";

            if(!mysqli_query($con,$sql))
            {
              die('Error: ' . mysqli_error($con));
            }

            echo "<script>alert('Thank you for submitting your basic test results. Click OK to continue');</script>";

          }
        }

          mysqli_close($con);


 ?>


</body>
<!-- <button class="block">VIEW REPORTS</button> -->
</html>
