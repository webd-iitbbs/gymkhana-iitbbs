<?php include 'config.php';
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
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img src="assets/img/logo.png" class="img-fluid"></a>
          <a href="index.html" class="logo mr-auto" >
            <img src="assets/img/SGLogo2.png" alt="" class="img-fluid">
          </a>
          

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
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(./assets/img/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/6.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h3> STUDENTS' GYMKHANA </h3>
                <h3> IIT BHUBANESWAR</h3>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main" >
    <!-- ======= Services Section ======= -->
    <section id="services" class="container-sp">
      <div class="row">
        <div class="col-12 col-md-8" data-aos="fade-up">

          <header class="section-header wow fadeInUp">
            <h3>About Us</h3>
          </header>

          <div>

            <p class="p" align="justify">The Students' Gymkhana is a student body, fostering all student activities at IIT Bhubaneswar and bridging the gap between the students and the authorities. From its genesis in the year 2010, it seeks to cultivate various qualitative approaches amongst students to master an enhanced life. The Students' Gymkhana is the nucleus of the numerous extra-curricular, technical and co-curricular activities held in IIT Bhubaneswar spanning activities of different genres of sports, cultural and technical fields. It plays a cardinal role in cultivating and nurturing their extra-curricular talents here by encouraging their participation in a number of contrasting events. Gymkhana works towards an aim to bring all round development in the students through their active role in extra-curricular activities to supplement education and advancing the general welfare of our students. The hierarchy of Students' Gymkhana comprises the President, Students' Senate, an elected representative body and the elected executives: the Vice President, General Secretary Socio-Cultural Council, General Secretary Science and Technology Council, General Secretary Sports Council. The Senate lays down the general guideline for the functions of the executives and their associated councils. General Elections are held every year during spring for various offices of powers. The elections are presided over by an election commissioner. The Gymkhana Elections and its healthy functioning are done in accordance to the Gymkhana Constitution.</p>


          </div>

        </div>

        <div class="col-12 col-md-4">
          <aside class="single_sidebar_widget popular_post_widget ">
            <h3 class="widget_title" style="color: #2d2d2d;">Happenings</h3>

           

            <?php
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM happenings ORDER BY id DESC LIMIT 0, 4");
              $stmt->execute();
              while ($row = $stmt->fetch()) {
                echo " <div class='media post_item row'>
                <img class='col-3' src='assets/img/society logos/".$row['society'].".png' width='55px'>
                <div class='media-body col-9'>
                <a href='clubs/".$row['society'].".php'>
                    <h3 style='color: #2d2d2d;'>".$row['name']."</h3>
                </a>    
                    <p>".$row['date'].' '.$row['month']."</p>
                </div></div>";
              }

            }
              
            catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $conn = null;


            ?>
            
                
            
            
          </aside>
        </div>
        

      </div>  
    </section>

    <section id="services">
      <div class="container-sp" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>President's Word</h3>
        </header>

        <div class="row">

          <div class="col-12 col-md-3">
            <img src="assets/img/president.jpg" style="display:block; margin:auto; height:40vh;">
            <div class="g-bg-color--white g-text-center--xs g-padding-x-10--xs g-padding-y-10--xs">
              <p class="text-uppercase g-font-size-14--xs g-font-weight--500 g-color--primary g-letter-spacing--1">
              </p>
              <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://www.iitbbs.ac.in/profile.php/sankarsan/">Dr. Sankarsan Mohapatro</a></h3>
              <p>-President<br>
                  Students Gymkhana</p>
            </div>
          </div>  


          <div class="col-12 col-md-9">

            <p class="p" align="justify">Indian Institute of Technology, Bhubaneswar, from its humble start in 2008 has come down a long way in its strife to become one of the leading institutes of the country. Achieving this success in this short a journey would have been impossible without the contribution of the students and extensive support of the Students' Gymkhana, the students' representative body. Established in 2009, the Gymkhana has been efficiently working as an independent, self-governing and democratic organization that has bridged the gap between the students and the administration. From managing various societies catering to different interests and talents of the students, organizing various intra-college co-curricular, technical and sports events and competitions, holding informative workshops, celebrating the festivals at hostels with great fervor and organizing the institute's very own socio-cultural and technical fests, Alma Fiesta and Wissenaire respectively, the Students' Gymkhana has played a commendable role in nurturing the extra-curricular talents of the students, enhancing their personality and cultivating leadership qualities in them to equip them for a successful independent corporate and social life. It gives me immense pride and pleasure to be heading this organization, I congratulate all its members for their achievements so far and extend my support and good wishes to continue these appreciable efforts.</p>


          </div>
        </div>  

      </div>

    </section>



    <section id="services" class="container-sp">
      <div class="row align-items-center">
        
      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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