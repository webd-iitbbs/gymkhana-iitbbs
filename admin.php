<?php 
session_start();
if (isset($_POST['submit'])){
        $username= $_POST['username'];
        $password=$_POST['password'];
    if(!($username == "admin" && $password == "GYMKHANA@WEBD_2020")){
        header('Location:adminlogin.php');
    }
    else{
         $_SESSION['username']='admin';
    }
}
if ($_SESSION['username']!= "admin"){
    header('Location:adminlogin.php');
}

include 'config.php';   

if(isset($_POST['insert'])){
  try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO happenings ('name', 'society', 'date', 'month')
  VALUES ('".$_POST['name']."', '".$_POST['society']."', '".$_POST['date']."', '".$_POST['month']."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Students' Gymkhana, IIT Bhubaneswar</title>

  <!-- Favicons -->

  <link rel="shortcut icon" href="assets/img/logo.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/team.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img src="assets/img/logo.png" class="img-fluid"></a>
          <a href="index.html" class="logo mr-auto"><img src="assets/img/SGLogo1.png" alt="" class="img-fluid"></a>
          

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="facilities.php">Facilities</a></li>
              <li class="drop-down"><a href="#">Councils</a>
                <ul>
                  <li><a href="technical.php">Technical council</a></li>
                  <li><a href="cultural.php">Socio-Cultural Council</a></li>
                  <li><a href="sports.php">Sports Council</a></li>
                </ul>
              </li>
              <li><a href="fests.php">Fests</a></li>
              <li class="drop-down"><a href="#">Meets</a>
                <ul>
                  <li><a href="sportsmeet.php">Inter IIT Sports Meet</a></li>
                  <li><a href="techmeet.php">Inter IIT Tech Meet</a></li>
                  <li><a href="gc.php">General Championship Sports</a></li>
                  <li><a href="ic.php">Innovation Challenge</a></li>
                </ul>
              </li>
              <li><a href="office.php">Office</a></li>
              <li><a href="assets/Constitution.pdf">Constitution</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->

  <section class="team">
    <div class="container" id="title">
      <p class="h3">ADMIN</p>
    </div>


      <div class="container align-self-center">
        <form method="POST" action="">
            <div clas="form-group row">
                <label for="mail" class="col-sm-3 form-control-label">Name of the event</label>
                <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" required>
                </div>
            </div><br>
            <div class="input-group mb-3">
              <select class="custom-select" name="society" id="inputGroupSelect02">
                <option selected>Choose...</option>
                <option value="neuromancers">Neuromancers</option>
                <option value="nakshatra">Nakshatra</option>
                <option value="risc">Risc</option>
                <option value="webd">Web and Design</option>
                <option value="aaroh">Aaroh</option>
                <option value="clix">Clix</option>
                <option value="cinewave">Cinewave</option>
                <option value="dgang">Dgang</option>
                <option value="dramatics">Drams</option>
                <option value="kalakriti">Kalakriti</option>
                <option value="panacea">Panacea</option>
                <option value="quizclub">Quiz Club</option>
                <option value="s4s">Souls For solace</option>
              </select>
              <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Society</label>
              </div>
            </div><br>
            <div clas="form-group row">
                <label for="password" class="col-sm-3 form-control-label">Dates</label>
                <div class="col-sm-9">
                      <input type="text" class="form-control" name="date" required>
                </div>
            </div><br>
            <div clas="form-group row">
                <label for="password" class="col-sm-3 form-control-label">Month</label>
                <div class="col-sm-9">
                      <input type="text" class="form-control" name="month" required>
                </div>
            </div><br>
            <div class="form-group row">
                <div class="col-sm-3 offset-sm-2">
                 <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                </div>
             </div>
        </form>
      </div>
    </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">IIT Bhubaneswar</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Gymkhana Constitution</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Career Development Cell</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              IIT Bhubaneswar<br>
              At Arugul, Jatani<br>
              Khordha, Odisha - 752050<br>
            </p>

            

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Connect with us</h4>
            <div class="social-links">
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Developed by Web and Design Society, IIT Bhubaneswar
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>