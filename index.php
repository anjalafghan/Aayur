<?php
header('Content-type: text/html; charset=UTF-8');

include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <title><?php echo $lang['title'];?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
 
  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet" />
</head>

<body id="page-top">


<script></script>
  <style>
 .map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover  .dropdown-content . {display: block;}

.dropdown:hover  .dropbtn .{background-color: #3e8e41;}


}
  </style>
  <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg  navbar-dark fixed-top"  id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $lang['name'];?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse"  id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about"><?php echo $lang['about'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio"><?php echo $lang['products'];?></a>
          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll-trigger" href="#services"><?php echo $lang['franchise'];?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team"><?php echo $lang['team'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><?php echo $lang['contact'];?></a>
          </li>
          <li class="nav-item">

            <a class="nav-link js-scroll-trigger" href="#purchase"><?php echo $lang['purchase'];?></a>
          </li>
   <li class="nav-item" >
     <div class="dropdown">
     <a class="nav-link " onclick=""> <i class="fab fa fa-globe" onclick=""></i></a>
  <div class="dropdown-content "onclick="">
    <a href="index.php?lang=en">English</a>
    <a href="index.php?lang=mr">Marathi</a>
  </div>
</div>
</li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
      
      </div>
    </div>
  </header>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['about'];?></h2>
          <h3 class="section-subheading text-muted">
            <?php echo $lang['aboutsubheading'];?>
          </h3>
          <div class="row">
            <div class="col">
              <style>
              li{list-style-type:none}</style>
              <ul><li ><?php echo $lang['bullet1']; ?></li>
              <li><?php echo $lang['bullet2']; ?></li>
              <li><?php echo $lang['bullet3']; ?></li>
              <li><?php echo $lang['bullet4']; ?></li>
              <li><?php echo $lang['bullet5']; ?></li>
              <li><?php echo $lang['bullet6']; ?></li>
              <li><?php echo $lang['bullet7']; ?></li>
              <li><?php echo $lang['bullet8']; ?></li>
              <li><?php echo $lang['bullet9']; ?></li></ul>
              <p><?php echo $lang['aboutData']; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>


  <!-- Portfolio Grid -->
 <?php include('display.php');?>


 <!-- Services -->
 <section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"><?php echo $lang['franchise'];?></h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">E-Commerce</h4>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
          maxime quam architecto quo inventore harum ex magni, dicta
          impedit.
        </p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Responsive Design</h4>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
          maxime quam architecto quo inventore harum ex magni, dicta
          impedit.
        </p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Web Security</h4>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
          maxime quam architecto quo inventore harum ex magni, dicta
          impedit.
        </p>
      </div>
    </div>
  </div>
</section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
           <h2 class="section-heading text-uppercase"><?php echo $lang['team'];?></h2> <!--TODO: our team  -->
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="" alt="" />
            <h4><?php echo $lang['team1'];?></h4>
            <p class="text-muted"><?php echo $lang['director'];?></p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="" alt="" />
            <h4><?php echo $lang['team2'];?></h4>
            <p class="text-muted"><?php echo $lang['director'];?></p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="" alt="" />
            <h4><?php echo $lang['team3'];?></h4>
            <p class="text-muted"><?php echo $lang['director'];?></p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
            eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
            corporis ea, alias ut unde.
          </p>
        </div>
      </div>
    </div>
  </section>



  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['contact'];?></h2>
          <h3 class="section-subheading text-muted">
            <?php echo $lang['contactsubheading'];?>
          </h3>
        </div>
      </div>
      <div class="container-fluid form-group">
                  <div class="map-responsive">
                  <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.56511804475!2d73.00410551399298!3d19.082848856718197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c13428f153c3%3A0xcedc32f30e4d80ed!2sSatra%20Plaza!5e0!3m2!1sen!2sin!4v1586341884461!5m2!1sen!2sin"
                   width="300" height="350" frameborder="0" style="border:0;"  aria-hidden="false" tabindex="0"></iframe>
                   </div>
                  </div>

      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                    data-validation-required-message="Please enter your name." />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                    data-validation-required-message="Please enter your email address." />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required"
                    data-validation-required-message="Please enter your phone number." />
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col">
              <div class="form-group">
                  <textarea class="form-control"  id="message" type="textarea" placeholder="Your Message *" required="required"
                    data-validation-required-message="Please enter your Message" ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="clearfix">a</div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Purchase -->
  <section class="page-section" id="purchase">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['purchase'];?></h2>
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy  Aayur All in One Shoppy 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>


  
</body>

</html>