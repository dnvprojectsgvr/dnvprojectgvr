<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>DNV International Education Academy</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">


<link rel="icon" href="images/logo.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>
<div class="topbar"  id="responsive">
  <div class="container">
     <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <span class="info"><a href="#."> Have any question?</a></span>
        <span class="info"><i class="icon-phone2"></i>02836 257334</span>
        <span class="info"><i class="icon-mail"></i><a href="mailto:dnvacademy@gmail.com"> dnvacademy@gmail.com</a></span>
        </div>
        <ul class="social_top pull-right" >

          <li class="divider-vertical"  ></li>
          <li class="dropdown" >
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"> <i class="icon-login"></i></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px; width: 240px;">
             <!-- <form name="p"> -->
              <frameset>
                    <input type="text" id="usid1" name="userid" placeholder="Username" style=" margin-top: 10px;" onBlur="logu()" ondrop="return false;" onpaste="return false;" oncopy="return false;" oncut="return false;" class="userid form-control" required>
                    <span id="uierr" style="color: red"></span>

                    <input type="password" type="password" name="password" id="pass" placeholder="Password" style=" margin-top: 10px;" onBlur="logp()" ondrop="return false;" onpaste="return false;" oncopy="return false;" oncut="return false;" class="pass form-control" required>
                    <span id="paerr" style="color: red"></span>
                    <div id="message" style="width: 100%; color: red;"></div>
                <input type="submit" name="submit" id="subm" value="Login" class="btn btn-primary" style=" margin-top: 10px; width: 100%">
                

              </frameset>
             <!-- </form> -->
             <br>
             <ul>
               <li><a href="" target="_blank" style="width: 100%; color: black;">&nbsp;&nbsp; Forgot Password ? &nbsp;&nbsp;</a></li>
               <li><a href="login.php" target="_blank" style="width: 150%; color: black;">&nbsp;&nbsp; FAQ &nbsp;&nbsp;</a></li>
             </ul> 
             <a href="student_reg.php" target="_blank" style="width: 100%; color: black; text-align:left; padding:5px 24px;"> Student Registration</a><br>

            </div>
          </li>

          <li><a href="http://fb.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://twitter.com" target="_blank"><i class="icon-twitter4"></i></a></li>
          <li><a href="http://plus.google.com" target="_blank"><i class="icon-google"></i></a></li>
       </ul>
      </div>
    </div>
  </div>
</div>
<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" class="logo logo-scrolled" alt="">
        </a>
      </div>
  <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About DNV</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >courses</a>
            <ul class="dropdown-menu">
              <li><a href="courses.php">Courses</a></li>
              <li><a href="course_detail.php">Courses Detail</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >events</a>
            <ul class="dropdown-menu">
              <li><a href="event.php">events</a></li>
              <li><a href="event_detail.php">Events Detail</a></li>
            </ul>
          </li>
          
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Faculties</a>
            <ul class="dropdown-menu">
              <li><a href="teachers_mscit.php">Msc.IT</a></li>
              <li><a href="teachers_bca.php">BCA</a></li>
              <li><a href="teachers_bba.php">BBA</a></li>
            </ul>
          </li>
          <li><a href="gallery.php">Gallery</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blogs</a>
            <ul class="dropdown-menu">
              <li><a href="http://resfybca.blogspot.in">Fy BCA</a></li>
              <li><a href="http://ressybca.blogspot.in">Sy BCA</a></li>
              <li><a href="http://restybca.blogspot.in">Ty BCA</a></li>
              <li><a href="http://dnvbba.blogspot.in">BBA</a></li>
              <li><a href="#">Msc-IT</a></li>
            </ul>
          </li>
          <li><a href="testinomial.php">Alumni</a></li>
          <li><a href="contact.php">Contact Us</a></li>          
        </ul>
      </div>
    </div>   
  </nav>
</header>


<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Student Courses</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->




<!-- EVENTS -->
<section id="event_detail" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 event wow fadeIn" data-wow-delay="500ms">
        <img src="images/event-detail.jpg" alt="Teachers" class=" border_radius img-responsive bottom15">
        <div class="detail_course">
          <div class="clearfix">
            <ul class="comment pull-left">
              <li><a href="#." class="facebook"><i class="icon-map-pin"></i> July 19, 2017 3:15 pm</a></li>
              <li><a href="#." class="facebook"><i>End:</i> July 19, 2017 3:15 pm</a></li>
              <li><a href="#." class="facebook"><i class="icon-icons20"></i> Paris, Rue Femile 82</a></li>
            </ul>
            <a href="#." class="btn_common blue border_radius pull-right"> Join!</a>
          </div>
        </div>
        <h3 class="top30 bottom20">Discipline Summer Institute</h3>
        <p class="bottom25">Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur 
          sagittis Pellentesque.
        </p>
        <p class="bottom25">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.</p>
        <div class="row">
          <div class="col-sm-6">
            <ul class="bullet_list">
              <li>Donec porta ultricies urna, faucibus magna dapibus.</li>
              <li>Etiam varius tortor ut ligula facilisis varius in a leo.</li>
              <li>Folutpat tempor tur duis mattis dapibus, felis amet.</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="bullet_list">
              <li>Donec porta ultricies urna, faucibus magna dapibus.</li>
              <li>Etiam varius tortor ut ligula facilisis varius in a leo.</li>
              <li>Folutpat tempor tur duis mattis dapibus, felis amet.</li>
            </ul>
          </div>
        </div>
        <p class="margin10 heading_space"> Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
      </div>
      <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
        <div class="widget heading_space">
          <h3 class="bottom20">Working Hours</h3>
          <p class="hours"> Monday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Tuesday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Wednesday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Thursday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Friday <span>8:15 am - 5.30 pm</span></p>
          <p class="hours">Saturday <span>9:30 am - 4.00 pm</span></p>
          <p class="hours">Sunday <span><a href="#." class="border_radius text-uppercase">closed</a></span></p>
        </div>
        <div class="widget">
          <h3 class="bottom20">Top Tags</h3>
          <ul class="tags">
            <li><a href="#.">Books</a></li>
            <li><a href="#.">Midterm test </a></li>
            <li><a href="#.">Presentation</a></li>
            <li><a href="#.">Courses</a></li>
            <li><a href="#.">Certifications</a></li>
            <li><a href="#.">Teachers</a></li>
            <li><a href="#.">Student Life</a></li>
            <li><a href="#.">Study</a></li>
            <li><a href="#.">Midterm test </a></li>
            <li><a href="#.">Presentation</a></li>
            <li><a href="#.">Courses</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- EVENTS ends -->



<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
        <a href="index.php" class="footer_logo bottom25"><img src="#" alt="DNV"></a>
        <p>We offer the best education in the city, We beleive in making a good person.</p>
        <ul class="social_icon top25">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="index.php"><i class="icon-chevron-small-right"></i>Home</a></li>
          <li><a href="courses.php"><i class="icon-chevron-small-right"></i>Courses</a></li>
          <li><a href="teachers.php"><i class="icon-chevron-small-right"></i>Our Team</a></li>
          <li><a href="dnvac.blogspot.in"><i class="icon-chevron-small-right"></i>Blog</a></li>
          <li><a href="contact.php"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
        <p class=" address"><i class="icon-map-pin"></i>Plot No 3 Ward 9/A GANDHIDHAM 370240 </p>
        <p class=" address"><i class="icon-phone"></i>02836 257334 , 8347494566 </p>
        <p class=" address"><i class="icon-mail"></i><a href="mailto:dnvacademy@gmail.com">dnvacademy@gmail.com</a></p>
        <img src="images/footer-map.png" alt="we are here" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2017 <a href="dnvac.in.">DNV College</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->




<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
