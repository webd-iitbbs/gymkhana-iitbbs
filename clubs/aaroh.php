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
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img src="../assets/img/logo.png" class="img-fluid"></a>
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
                  <li><a href="../gc.php">General Championship</a></li>
                  <!-- <li><a href="../ic.php">Innovation Challenge</a></li> -->
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
        <div class="banner-image"></div>
        <div class="banner-text text-center">
            <img src="../assets/img/society logos/aaroh.png" height="100px" width="auto" alt="">
            <h1>AAROH</h1>
            <p style="color: white;">THE MUSIC SOCIETY</p>
            <p><span class="descripeMe"></span></p>
            <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">About us</a> -->
        </div>
        <div class="overlay"></div>
    </div>
</div>
<!--End Banner-->

<div class="back">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 text-center center my-auto">
                <br>
                <br>
                <img src="../assets/img/Soc-Images/aaroh(1).jpg" width="500px" height="auto" class="img-fluid" alt="">
                <br>
                
    
            </div>
            <div class="col-lg-6 ">
                <div class="text-center">
                <br><br>
                    <h2>About Us</h2>
                </div>
                <p>Aaroh was started in 2010 by a group of music enthusiasts in IIT Bhubaneswar. Over
                    the years, it has become one of the major societies in the college, with many aspiring to
                    join and showcase their musical talents. We are a team of about 40 members, and we
                    perform at various Institute programs, as well as organize our own Productions, where
                    everyone in the society gets to showcase their talents to the entire Institute. Apart from
                    these performances, we actively participate in various fests and competitions in and
                    around Bhubaneswar. Our talented members have composed 3 original songs so far,
                    and these performances have brought us prizes in various competitions. Our mix of
                    classical vocalists and rock instrumentalists has led us to improvise on many classical
                    songs, giving them a unique twist with influences from Western music. We are looking
                    forward to participating in Symph-Fest with full enthusiasm, and welcome the chance to
                    make our mark at a national level.</p>
                
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
              $stmt = $conn->prepare("SELECT * FROM happenings WHERE society = 'aaroh' AND status = 'approved' ORDER BY id DESC LIMIT 0, 5");
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
                    <a href="https://www.instagram.com/aaroh.iitbbs/" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/Aaroh.IITBhubaneswar" class="facebook"><i class="fa fa-facebook"></i></a>
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
                  <img src="../assets/img/society logos/cinewave.png" height="55px" width="55px" alt="">             
                  <a href="cinewave.php">CINEWAVE</a>           
                </div>
                <div class="other-links">
                  <img src="../assets/img/society logos/literary.png" height="55px" width="55px" alt="">             
                  <a href="panacea.php">PANACEA</a>       
                </div>
                <div class="other-links">
                  <img src="../assets/img/society logos/sfs.png" height="55px" width="55px" alt="">             
                  <a href="s4s.php">SOULS FOR SOLACE</a>        
                </div>
                <div class="other-links">
                  <img src="../assets/img/society logos/quizclub.png" height="55px" width="55px" alt="">
                  <a href="quizclub.php">QUIZCLUB</a>
                </div>
                <div class="other-links">
                  <img src="../assets/img/society logos/dgang.png" height="55px" width="55px" alt="">             
                  <a href="dgang.php">DGANG</a>       
                </div>
                <div class="other-links">
                  <img src="../assets/img/society logos/dramatics.png" height="55px" width="55px" alt="">
                  <a href="dramatics.php">DRAMATICS</a>
                </div>
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
              <h5 class="card-title">RAMAKRISHNA REDDY PALLE</h5>
              <h6 class="card-subtitle mb-2 text-muted">SECRETARY</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:8328537734" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:secymusic.sg@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
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
              <h5 class="card-title">Ayush Soni</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
              <a href="tel:9958979125" class="phone"><i class="fa fa-phone"></i></a>
              <a href="mailto:20ee01007@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Aditya Balakrishnan</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:9778473211" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:20cs01019@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sanchalli Subhadarshini</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNOR</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:9348904089" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:20ce02024@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
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