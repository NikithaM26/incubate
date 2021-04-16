<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign-up Page</title>

    </head>
    <style>
        body
{
    margin: 0;
    padding: 0;

    background-size: cover;
    font-family:Arial, Helvetica, sans-serif;
}
.title{
    text-align: center;
    padding: 20px 10px 10px;
}
.title h1
{
    margin: 0;
    padding: 40;
    color: black;
    text-transform: uppercase;
    font-size: 35px;
}
.container
{
    width: 30%;
    height: 585px;
    background: rgb(79, 169, 241);
    margin: 0 auto;
    border: 2px solid #fff;
    box-shadow: 0 20px 40px rgba(0,0,0,.5);
}

.formBox
{
    width: 100%;
    padding: 25px 40px;
    box-sizing: border-box;
    height: 400px;

}
.formBox label
{
    margin: 0;
    padding: 0;
    font-size: 15px;
    font-weight: bold;
    color: black;

}
.formBox input
{
    width: 100%;
    margin-bottom: 12px;
}
.formBox input[type="text"],
.formBox input[type="Password"],
.formBox input[type="tel"]
{
    border: none;
    border-bottom: 2px solid white;
    outline: none;
    height: 20px;
    border-radius: 5px;
}
.formBox input[type="text"]:focus,
.formBox input[type="Password"]:focus,
.formBox input[type="tel"]:focus
{
    border-bottom: 2px solid  rgb(3, 5, 10);
}

.formBox input[type="checkbox"]
{
    width: auto;
}

.formBox .remember_me
{
   display: flex;
   flex-direction: row;
}
.submit
{
    border: none;
    outline: none;
    height: 40px;
    width: 100px;
    color: #fff;
    background: #262626;
    cursor: pointer;
    border-radius: 5px;
    margin: 5%;
    font-size: 20px;
}
.submit:hover
{
    background: rgb(89, 141, 201);
}
.formBox .signupbutton
{
    display: flex;
    flex: 1;
    justify-content: center;
    align-items: center;
}
    </style>
    <body>
        <div class="title"><h1>Sign Up as Doctor</h1></div>
        <div class="container">
                <div class="formBox">
                    <form method="post" action="">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Type your First name" required>
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Type your Last name" required>
                        <label>E-mail Id</label>
                        <input type="text" name="email" placeholder="Type your official email id here" required>
                        <label>Contact Number</label>
                        <input type="tel" name="contact" placeholder= "Enter your contact number" required>
                        <label>Specialization</label>
                        <input type="text" name="specialization" placeholder="Enter your Specialization" required>
                        <label>License Id</label>
                        <input type="text" name="license" placeholder= "Enter your License number" required>
                        <label>Hospital Name</label>
                        <input type="text" name="hname" placeholder="Enter the hospital name you work for" required>
                        <label>Password</label>
                        <input type="Password" id="inputPassword4" name="password" placeholder="Enter a password of 8 characters" required>
                        <input type="checkbox" class="form-check-input" onclick="showPassword()">Show passsword
                        <div class="remember_me">
                            <input type="checkbox" id="remember_me" name="remember_me" value="checked">
                            <label for="remember_me"> Remember me</label><br>
                        </div>
                        <div class="signupbutton" >
                          <button type="submit" name="submitpost" class="submit">Sign Up</button>
                          <button type="submit" name="" class="submit" ><a href="login.php" style="text-decoration:none;color:white;">Go Back</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
          function showPassword() {
            var passwordElement = document.getElementById("inputPassword4");
            if (passwordElement.type === "password") {
              passwordElement.type = "text";
            } else {
              passwordElement.type = "password";
            }
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
          if(isset($_POST['submitpost']))
          {
            $sql = "INSERT INTO doctor (fname,lname,email_id,contact,specialization,license_id,hname,password) VALUES('$_POST[fname]', '$_POST[lname]',
           '$_POST[email]', '$_POST[contact]', '$_POST[specialization]', '$_POST[license]', '$_POST[hname]', '$_POST[password]')";

            if(!mysqli_query($con,$sql))
            {
              die('Error: ' . mysqli_error($con));
            }

            echo "<script>alert('Thank you for Signing Up. Click OK to continue');</script>";

          }
        }

          mysqli_close($con);

         ?>

    </body>
</html>
