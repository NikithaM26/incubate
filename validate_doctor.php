<?php
session_start();
  if(isset($_POST['submit'])){
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"incubate_hack");
      $query = "SELECT * FROM doctor WHERE email_id = '$_POST[username]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
          if($row['email_id'] == $_POST['username']){
              if($row['password'] == $_POST['pwd']){
                  $_SESSION['fname'] = $row['fname'];
                  $_SESSION['email_id'] = $row['email_id'];
                  $_SESSION['doctid'] = $row['doctid'];
                  header("Location:doctor.php");
              }
              else{
                  echo "<script>alert('Wrong Password...');</script>";
              }
          }
      }
  }
?>
