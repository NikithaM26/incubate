<?php  session_start(); ?>
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

.form-popup {
  /* display: none; */
  position: absolute;
  bottom: 16%;
  left: 55%;
  border: 1px solid ffff;
  background-color:rgb(131, 224, 131) ;

  border-radius: 10px;
}


.form-container {
  max-width: 650px;
  padding: 10px;
  background-color: rgb(131, 224, 131);
  border-radius: 10px;
}

/* Full-width input fields */
.form-container input[type=text]
{
  width: 90%;
  padding: 6px;
  margin: 5px 0 15px 5px;
  border: none;
  background: #f1f1f1;
  border-radius: 4px;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus
{
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: black;
  color: white;
  padding: 8px 12px;
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

</style>

</head>
<body>
  <div class="heading">Patient Centered Information Exchange System</div>
  <div style='width:100%;background:darkblue;font-weight:bold;'>
  </div>
  <div class="about">About me: </div>
  <div class="form-popup" id="myForm">
    <form action="actionD.php" method="post" class="form-container">
      <h2>&nbsp&nbsp &nbsp &nbsp &nbspOTHER INFO &nbsp</h2>

      <label for="blood_group"><b>&nbspBlood Group</b></label>
      <input type="text" placeholder="Enter your blood group" name="blood_group"  id="blood_group"> <br>

      <label for="Qualification"><b>&nbspQualification</b></label>
      <input type="text" placeholder="Enter you qualification" name="qualification" id="Qualification"> <br>

      <label><b>&nbspExperience</b></label><label for="exp"></label><br>
      <input type="text" placeholder="(if any)" name="experience" id="exp" > <br>

      <label><b>&nbspExpert</b></label><label for="exp"></label><br>
      <input type="text" placeholder="Do you want to enroll as an Expert?(Yes/No)" name="expert" id="expert" > <br>

      <label><b>&nbspSkype Details</b></label><label for="exp"></label><br>
      <input type="text" placeholder="If yes, add you Skype-name (eg: skype:live:.cid.2baf5d7c973fd53f)" name="skype" id="skype" > <br>



      <button type="submit" name="submit"class="btn">Submit</button>
    </form>
</div>
  <?php
      $con = mysqli_connect("localhost","root","");
      if(!$con)
          {
      die('Could not connect: ' . mysqli_error());
      }
        mysqli_select_db($con,'incubate_hack');
          $did=$_SESSION['doctid'];
        //print_r($_SESSION['userid']);
        $sql_query="SELECT * FROM doctor where doctid='$did';";
      //  $res=mysqli_query($con,$sql_query);
      $res=mysqli_query($con,$sql_query);
      $values=mysqli_fetch_assoc($res);
      //echo "Name:" . $values['NAME'];
      echo "<div style='width:35%;color:black;font-size:22px;padding:9px;margin:30px;borderradius:5px background: rgb(79, 169, 241);border: 2px solid #fff;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .5);border-radius:10px;' ";
      echo "<p style='padding:5px'>Doctor id : " .$values['doctid']."<p>";
      echo "<p style='padding:5px'>Name : ".$values['fname']." &nbsp ".$values['lname']."</p>";
      //echo "<p style='padding:5px'>Date of Birth: ""<p>";

      echo "<p style='padding:5px'>Specialization : ".$values['specialization']."<p>";
      echo "<p style='padding:5px'>License no. : ".$values['license_id']."<p>";
      echo "<p style='padding:5px'>Hospital : ".$values['hname']."<p>";
      echo "<p style='padding:5px'>Phone no. : ".$values['contact']."<p>";
      echo "<p style='padding:5px'>Email-id: ".$values['email_id']."<p>";
      echo "</div>";

      ?>
<!-- <div class="reports">View Reports

</div> -->



<!-- <button class="open-button" onclick="openForm()">Open Form</button> -->






</body>
<!-- <button class="block">VIEW REPORTS</button> -->
</html>
