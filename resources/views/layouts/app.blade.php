<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SmartFAQ</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="/fonts/line-icons.css">
    <!-- Animate -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="/css/responsive.css">

  </head>
  <body>
    @include('common.errors')
    @yield('content')
    
    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
                <div class="textwidget">
                  <p>Vegan Hacktivists application.</p>
                </div>
                <div class="social-icon">
                  <a class="facebook" href="https://www.facebook.com/sascha.laabs" target="_blank"><i class="lni-facebook-filled"></i></a>
                  <a class="github" href="https://github.com/InverterOfControl" target="_blank"><i class="lni-github"></i></a>
                  <a class="linkedin" href="https://www.linkedin.com/in/sascha-laabs-411261b8" target="_blank"><i class="lni-linkedin-filled"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact</h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i> Berlin <br> Germany</a>
                </li>
                <li>
                  <a href="#"><i class="lni-envelope"></i> E: saschalaabs@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p>Copyright © 2020 <a rel="nofollow" href="https://uideck.com">UIdeck</a> All Right Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/wow.js"></script>   
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>      
    <script src="/js/waypoints.min.js"></script>   
    <script src="/js/main.js"></script>
      
  </body>
</html>
