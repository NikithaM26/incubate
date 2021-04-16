<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width:device-width, initial-scale:1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css\master.css">
  <title>Patient Centered Information System</title>
</head>

<body>
  <section id="top-intro" class="top-intro">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="" style="text-shadow: 1px 1px #c0c0c0;">Patient-Centered Information Exchange</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about" style="text-shadow: 1px 1px #c0c0c0;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="text-shadow: 1px 1px #c0c0c0;" target="_blank">Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#heading" style="text-shadow: 1px 1px #c0c0c0;">Sign up </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h2 class="main-heading">Hello there...<br>Welcome aboard!</h2>
        </div>

      </div>
  </section>

  <section id="about" class="about">
    <h2 class="text">ABOUT US</h2>
    <br><br><br><br>
    <p>This is a <strong>patient centered information exchange system</strong>.<br>
      Our idea is to develop a patient-centered information exchange system which provides a systematic storage for patient medical information, which is easily accessible to patients and doctors.
      This application has three users namely, <strong>Patients,Doctors/Experts and Hospital Administration</strong>.
      Patients can view their medical records while doctors can view and update/modify the patient's medical records. Doctors who also work as experts can chat with the patients and provide necessary services/suggestions considering the symptoms
      mentioned by the patients.</p><br>
    <p>This web application gives an option to the patients to upload/update their basic test results such as BP, Sugar level, Pulse rate, Oxygen Saturation level, etc.
Patients can also chat with experts for consultations in the provided chatroom.
The hospital administration can view , access and update patient records by adding/removing reports on latest developments in patient’s health as suggested by the doctor.
The progress in health of the patients will be represented in the form of graphs.
</p>
  </section>

  <section id="mid" class="midPage">
    <h2 class="heading text" id="heading">USERS</h2><br><br><br>
    <br><br>
    <div class="container-sm">
      <div class="card-deck">
        <div class="card text-center text-white bg-success cards">
          <img src="images\patient2.jpg" style="height: 50%;border-radius: 50%;" class="card-img-top" alt="image">
          <div class="card-body">
            <h4 class="card-title"><strong>Patients</strong></h4>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="signup_patient.php" class="btn btn-light btn-lg">Click here</a>
          </div>
        </div>

        <div class="card text-center text-white bg-primary cards">
          <img src="images\doctors1.jpg" style="height: 50%; border-radius: 50%;" class="card-img-top" alt="image">
          <div class="card-body">
            <h4 class="card-title"><strong>Doctors</strong></h4>
            <p class="card-text"></p>
          </div>
          <div class="card-footer" class="submit">
            <a href="signup_doc.php" class="btn btn-light btn-lg">Click here</a>
          </div>
        </div>

        <div class="card text-center text-white bg-secondary cards">
          <img src="images\hospital.jpg" style="height: 50%;border-radius: 50%;" class="card-img-top" alt="image">
          <div class="card-body">
            <h4 class="card-title"><strong>Hospitals</strong></h4>
            <p class="card-text"></p>
          </div>
          <div class="card-footer ">
            <a href="signup_hosp.php" class="btn btn-light btn-lg">Click here</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  </div>

  </section>

  <section class="bottom">
    <footer id="footer" class="footer">

      <p>Patient-Centered Information Exchange system | The Trojan Squad</p><br>
      <a href="#top-intro" style="text-decoration:none; color : white">Back to top</a>

    </footer>
  </section>


</body>



</html>
