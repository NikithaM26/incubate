<?php
session_start();
$con = mysqli_connect("localhost","root","");
if(!$con)
    {
      die('Could not connect: ' . mysqli_error());
    }
  mysqli_select_db($con,'incubate_hack');

  $piD=$_SESSION['pid'];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['submit']))
  {
    $sql_query="INSERT INTO patient_profile (pid,blood_group,mp_name,mp_email,mp_contact,mp_rel,allergies,med_history,cur_med) VALUES ('$piD','$_POST[blood_group]','$_POST[med_proxy1]','$_POST[med_proxy2]','$_POST[med_proxy3]','$_POST[med_proxy4]','$_POST[allergies]','$_POST[med]','$_POST[medicines]')";


    if(!mysqli_query($con,$sql_query))
    {
      die('Error: ' . mysqli_error($con));
    }

    echo "<script>alert('Thank you for submitting. Click OK to continue');</script>";
}
  mysqli_close($con);
}
 ?>
