<?php include '../config.php';
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Students' Gymkhana, IIT Bhubaneswar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/img/logo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img
              src="../assets/img/logo.png" class="img-fluid"></a>
          <a href="../index.php" class="logo mr-auto"><img src="../assets/img/SGLogo2.png" alt="" class="img-fluid"></a>


          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="../index.php">Home</a></li>
              <li><a href="../facilities.php">Facilities</a></li>
              <li class="drop-down"><a href="#">Councils</a>
                <ul>
                  <li><a href="../technical.php">Technical council</a></li>
                  <li><a href="../cultural.php">Socio-Cultural Council</a></li>
                  <li><a href="../sports.php">Sports Council</a></li>
                </ul>
              </li>
              <li><a href="../fests.php">Fests</a></li>
              <li class="drop-down"><a href="#">Meets</a>
                <ul>
                  <li><a href="../sportsmeet.php">Inter IIT Sports Meet</a></li>
                  <li><a href="../techmeet.php">Inter IIT Tech Meet</a></li>
                  <li><a href="../gc.php">General Championship Sports</a></li>
                  <li><a href="../ic.php">Innovation Challenge</a></li>
                </ul>
              </li>
              <li><a href="../office.php">Office</a></li>
              <li><a href="../assets/Constitution.pdf">Constitution</a></li>
              <li><a href="../contact.php">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!--Start Banner-->
  <div class="row">
    <div id="banner" class="col-md-12 col-xs-12">
      <div class="banner-image-neuromancers"></div>
      <div class="banner-text text-center">
        <img src="../assets/img/society logos/neuromancers.png" height="100px" width="auto" alt="">
        <h1>NEUROMANCERS</h1>
        <p style="color: white;">PROGRAMMING SOCIETY</p>
        <p><span class="descripeMe"></span></p>
        <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">About us</a> -->
      </div>
      <div class="overlay"></div>
    </div>
  </div>
  <!--End Banner-->

  <div class="back">
    <div class="container">
      <div class="row my-auto">
        <div class="col-lg-6 text-center center ">
          <br>
          <br>

          <img src="../assets/img/Soc-Images/neuromancers(1).jpg" class="img-fluid"  width="500px" height="500px" alt="">
          <br>
        </div>
        <div class="col-lg-6 ">
          <div class="text-center">
            <br><br>
            <h2>About Us</h2>
          </div>
          <p>The Neuromancers, the Programming Society's main aim is to spread the knowledge of programming
            among the students as the world is increasingly being rebuilt in cyberspace. Neuromancers was
            formed in the year 2013 by a group of dedicated programmers. Members of the Programming Society
            are proficient in the knowledge of various programming languages and software tools. The members of this
            society work and participate under various titles such as
            Android app development, Web development, Machine learning, Natural language processing, etc.
            Last year four teams from the society had cleared the preliminary round and entered the on-site round in
            ACM-ICPC.
            Among them, one group has secured 24th position at the national level. In the Google Hash code contest 2020,
            a team from the society stood in 7th position in the entire nation and secured an international rank of 224.
            A team from the society secured 8th rank in inter IIT-Tech meet.</p>


        </div>



      </div>
      <br>
      <br>






        <div class="row">
          <div class="col-md-8">
            <div class="text-center">
              <div class="card" id="happenings">
                <div class="card-body">
                  <h2 class="card-title">HAPPENINGS</h2>
                  <p class="card-text">
                                   <?php
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM happenings WHERE society = 'neuromancers' AND status = 'approved' ORDER BY id DESC LIMIT 0, 5");
              $stmt->execute();
              while ($row = $stmt->fetch()) {
                echo " <div class='row'>
                    <div class='col-md-2'>
                      <center>
                        <h2>".$row['date']."</h2>
                        <p>".$row['month']."</p>
                      </center>
                    </div>
                    <div class='col-md-10'>
                      <center>
                        <p style='margin-top:2vh;'>".$row['name']."</p>
                      </center>
                    </div>
                  </div>";
              }

            }
              
            catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $conn = null;


            ?>
                 

                </p>

              </div>
            </div>
          </div>
        </div>

          <div class="col-md-4" id = "links">
            <div class="follow">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">
                    <center>FOLLOW US ON</center>
                  </h5>
                  <p class="card-text"></p>
                  <div class="social-links">
                    <center>
                      <a href="https://www.instagram.com/neuro_iitbbs/" class="instagram"><i class="fa fa-instagram"></i></a>
                      <a href="https://www.facebook.com/neuroIITBBS" class="facebook"><i class="fa fa-facebook"></i></a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
            <br>

            <div class="follow-other">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">
                    <center>OTHER SOCIETIES</center>
                  </h5>
                  <p class="card-text"></p>
                  <div class="other-links">
                    <img src="../assets/img/society logos/webd.png" height="55px" width="55px" alt="">
                    <a href="webd.php">WEB & DESIGN</a>
                  </div>
                  <div class="other-links">
                    <img src="../assets/img/society logos/risc.png" height="55px" width="55px" alt="">
                    <a href="risc.php">RISC</a>
                  </div>
                  <div class="other-links">
                    <img src="../assets/img/society logos/nakshatra.png" height="55px" width="55px" alt="">
                    <a href="nakshatra.php">NAKSHATRA</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="text-center">
      <h1>Contact US</h1>
      <p></p>
    </div>
    <div class="contactdetails">
      <div class="contact">
        <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">JATIN YADAV</h5>
              <h6 class="card-subtitle mb-2 text-muted">SECRETARY</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:8278310665" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:secyprogsoc.sg@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="contact2" id="c2">
        <div class="row justify-content-center">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pranay Borgohain</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:7380029581" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:20ee01015@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sai Krishna Jupally</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:8247808373" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:jsk12@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Rishvic Pushpakaran</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:8130539104" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:20cs01018@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.iitbbs.ac.in">IIT Bhubaneswar</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="../assets/Constitution.pdf">Gymkhana Constitution</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.iitbbs.ac.in/cdc/">Career Development Cell</a></li>
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
              <a href="https://www.facebook.com/SG.IITBhubaneswar/" class="facebook"><i class="fa fa-facebook"></i></a>
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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>