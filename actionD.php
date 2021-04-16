<?php
session_start();
$con = mysqli_connect("localhost","root","");
if(!$con)
    {
      die('Could not connect: ' . mysqli_error());
    }
  mysqli_select_db($con,'incubate_hack');

  $diD=$_SESSION['doctid'];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['submit']))
  {
    $sql_query="INSERT INTO doctor_profile (did,	blood_group,	qualification,	experience,	expert,	skype)
     VALUES ('$diD','$_POST[blood_group]','$_POST[qualification]','$_POST[experience]','$_POST[expert]','$_POST[skype]')";


    if(!mysqli_query($con,$sql_query))
    {
      die('Error: ' . mysqli_error($con));
    }

    echo "<script>alert('Thank you for submitting. Click OK to continue');</script>";
}
  mysqli_close($con);
}
 ?>
