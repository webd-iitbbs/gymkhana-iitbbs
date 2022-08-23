<?php 
include 'config.php';   
if(isset($_POST['submit'])){
  try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO contact (name, contact, email, feedback)
  VALUES ('".$_POST['name']."', '".$_POST['contact']."', '".$_POST['email']."', '".$_POST['feedback']."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<script>alert('Feedback submitted successfully');</script>";
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
  <link href="assets/css/team.css" rel="stylesheet">
  <style type="text/css">
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 4.05vh;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 26px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img src="assets/img/logo.png" class="img-fluid"></a>
          <a href="index.php" class="logo mr-auto"><img src="assets/img/SGLogo1.png" alt="" class="img-fluid"></a>
          

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
                  <!-- <li><a href="ic.php">Innovation Challenge</a></li> -->
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


  <!-- Google Map for the campus -->
<section id="map" style="margin-top: 13vh; width: 100%;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.7637975034427!2d85.67401461474763!3d20.143899486484305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19ac2e52a057f5%3A0x564b6e83a7504a16!2sIIT%20BHUBANESWAR!5e0!3m2!1sen!2sin!4v1603576659450!5m2!1sen!2sin" width="1500" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

  <div class="container">
     <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6">
        <div class="clearfix">&nbsp;</div>
        <header class="section-header wow fadeInUp">
            <h3> Contact Us </h3>
        </header>
        <div>
         <br>IIT Bhubaneswar<br>Odisha, 752050<br>
              Email ID:  office.gymkhana@iitbbs.ac.in<br>
              Phone No.:  06742114053
        </div>
        <br>
        <div class="social-media">
          <h3>Connect with us :</h3>
          <div class="social-icons" >
            <a href="https://www.facebook.com/iitbbs/" style="padding-right: 2vw;">
              <i class="fa fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/iitbbs" style="padding-right: 2vw;">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/iitbhubaneswar" style="padding-right: 2vw;">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/school/iit-bhubaneswar-official" style="padding-right: 2vw;">
              <i class="fa fa-linkedin"></i>
            </a>
          </div>
        </div>
      </div>
      <br><br>

      <div class="col-lg-6 col-sm-6 col-md-6">&nbsp;
        <header class="section-header wow fadeInUp">
        	<h3>FEEDBACK</h3>
        </header>
        <br>
        <div class="">
          <form data-toggle="validator" role="form" action="" method="post">
            <div class="form-group">
              <label for="inputName" class="control-label">Name</label>
              <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter your name" required maxlength="150">
            </div>
            <br>
            <div class="form-group">
              <label for="inputName" class="control-label">Contact Number</label>
              <input type="text" name="contact" class="form-control" id="inputContact" placeholder="Enter your  Contact Number" required maxlength="11">
            </div>
            <br>
            <div class="form-group">
              <label for="inputEmail" class="control-label">E-mail Address</label>
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your E-mail Address" data-error="Sorry, that email address is invalid" required maxlength="150">
              <div class="help-block with-errors"></div>
            </div>
            <br>
             <div class="form-group">
              <label for="inputName" class="control-label">Feedback</label>
              
              <textarea class="form-control" id="exampleTextarea"  rows="5" name="feedback" placeholder="Enter your feedback" required></textarea>
            </div>
            
            <br>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
          </form>
           
        </div>
      </div>
     
    </div>
    
  </div>

<!-- Footer Section -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-4 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="ion-ios-arrow-right"></i> <a href="https://www.iitbbs.ac.in">IIT Bhubaneswar</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="assets/Constitution.pdf">Gymkhana Constitution</a></li>
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
    <script src="/assets/js/contact.js"></script>
  </body>
</html>



