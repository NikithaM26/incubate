<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      height: 100%;
      margin: 0;
    }

    * {
      box-sizing: border-box;
    }

    .container {


      width: 30%;
      height: 585px;
      background: rgb(79, 169, 241);
      margin: 0 auto;
      border: 2px solid #fff;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .5);
    }


    input {
      width: 90%;
      padding: 15px;
      border: none;
      border-radius: 7px;
      margin-left: 25px;
      opacity: 0.85;
      display: inline-block;
      font-size: 17px;
      line-height: 20px;
      text-decoration: none;
      /* remove underline from anchors */
    }


    input:hover,
    .btn:hover {
      opacity: 1;
    }

    .submit {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      width: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      margin-top: 7px;
      padding: 10px;
      font-size: 23px;
    }

    .submit:hover {
      background-color: black;
      color: white;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .fb {
      background-color: #3B5998;
      color: white;
      padding: 15px;
      border-radius: 5px;
      font-size: 17px;
      float: left;
      margin-top: 40px;
      text-decoration: none;
    }

    .google {
      background-color: #dd4b39;
      color: white;
      padding: 15px;
      border-radius: 5px;
      float: right;
      margin-top: 40px;
      text-decoration: none;
    }

    .col {

      width: 100%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
      background: lightblue;
    }

    span {
      vertical-align: middle;
      display: table;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 17px;
      padding-top: 35px;
      font-style: Arial;

    }

    .signup {
      font-size: 20px;
      padding: 15px;
      text-align: center;
    }


    .tablink {
      background-color: #333;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 19px 16px;
      font-size: 22px;
      width: 33.333%;
      margin-top: 0px;
      font-weight: bold;


    }

    .tablink:hover {
      background-color: #777;
    }

    .tabcontent {
      color: white;
      display: none;
      padding: 100px 20px;
      height: 100%;

    }

    #Patient {
      background-color: white;
    }

    #Doctor {
      background-color: white;
    }

    #Hospital {
      background-color: white;
    }
  </style>




  <title></title>
</head>

<body>



  <button class="tablink" onclick="openPage('Pateint', this, 'blue')" id="defaultOpen">Patient</button>
  <button class="tablink" onclick="openPage('Doctor', this, 'blue')">Doctor</button>
  <button class="tablink" onclick="openPage('Hospital', this, 'blue')">Hospital</button>


  <div id="Pateint" class="tabcontent">
    <div class="container">
      <form action="validate_patient.php" method="post">
        <h2 style="text-align:center">Patient Login</h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id" ><br><br>
        <input type="password" name="pwd" placeholder="Password" ><br><br>
        <button type="submit" name="submit" class="submit">Submit</button>

        <br><br>
        <div class="signup"> Not a registered user? <a href="index.php#heading">Click here</a> to signup.<br><br>
      </form>
    </div>
  </div>
  </div>
  <div id="Doctor" class="tabcontent">
    <div class="container">
      <form action="validate_doctor.php" method="post">
        <h2 style="text-align:center">Doctor Login </h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id" ><br><br>
        <input type="password" name="pwd" placeholder="Password" ><br><br>
        <button type="submit" name="submit" class="submit">Submit</button>

        <br><br>
        <div class="signup"> Not a registered user? <a href="index.php#heading">Click here</a> to signup.<br><br>
      </form>
    </div>
  </div>
  </div>
  <div id="Hospital" class="tabcontent">
    <div class="container">
      <form action="validate_hosp.php" method="post">
        <h2 style="text-align:center">Hospital Login </h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id" ><br><br>
        <input type="password" name="pwd" placeholder="Password" ><br><br>
        <button type="submit" name="submit" class="submit">Submit</button>

        <br><br>
        <div class="signup"> Not a registered user? <a href="index.php#heading">Click here</a> to signup.<br><br>
      </form>
    </div>
  </div>

  </div>

  <script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>
