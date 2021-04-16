<?php
session_start();
  if(isset($_POST['submit'])){
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"incubate_hack");
      $query = "SELECT * FROM patient WHERE email = '$_POST[username]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
          if($row['email'] == $_POST['username']){
              if($row['password'] == $_POST['pwd']){
                  $_SESSION['fname'] = $row['fname'];
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['pid'] = $row['pid'];
                  header("Location:patient.php");
              }
              else{
                  echo "<script>alert('Wrong Password...');</script>";
              }
          }
      }
  }
?>
