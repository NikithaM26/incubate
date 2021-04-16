<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <style media="screen">
      body, html{
        wight:100%;
        font-family: sans-serif;
      }
      .container{
        padding: 5% 25%;
      }
      .container .items {
        margin: 2%;
        padding:2%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form  method="post">
        <label for="search" class="items">Enter patient ID to search</label>
        <input type="number" name="pid"  class="items">
        <button type="Submit" name="submit" class="items">Search</button>
      </form>
    </div>
    <?php

    $con = mysqli_connect("localhost","root","","incubate_hack");

    if(!$con)
    {
      die('Could not connect ' . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      if(isset($_POST['submit']))
      {
        $query = "SELECT * FROM patient WHERE pid = '".$_POST['pid']."'";

        if(!mysqli_query($con,$query))
        {
          die('Error: ' . mysqli_error($con));
        }
        else{
          $res = mysqli_query($con, $query);
        }
        ?>


    <table id="mytable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">DOB</th>
              <th scope="col">EMAIL</th>
              <th scope="col">CONTACT</th>
              <th scope="col">ADDRESS</th>
            </tr>
          </thead>
          <tbody>
              <?php

                if (mysqli_num_rows($res) > 0)
                {
                  // code...
                  while ($rowa = mysqli_fetch_assoc($res))
                  {

                    echo "<tr><td>" . $rowa['fname'] . " " . $rowa['lname'] . "</td><td>" . $rowa['dob'] . "</td>
                    <td>" . $rowa['email'] . "</td><td>" . $rowa['contact']. "</td><td>" . $rowa['address'] . "</td></tr>";

                  }
                }

                if(!mysqli_query($con,$query))
                {
                  die('Error: ' . mysqli_error($con));
                }
              }
            }

            mysqli_close($con);
             ?>

          </tbody>
        </table>

  </body>

</html>
