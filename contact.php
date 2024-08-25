
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/logo.png">
  <title>Edukator - Education Category Bootstrap Responsive Template | Contact :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  
  
  <?php     include 'header.html' ?>

  <!--/header-->
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Contact Us </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
              <h5 class="title-subw3hny text-center">Contact our team</h5>
              <h3 class="title-w3l">Got any <span class="inn-text">Questions? </span></h3>
            </div>
            <div class="contacts-5-grid-main mt-5">
                <div class="contacts-5-grid">
                    <div class="map-content-5">
                        <div class="d-grid grid-col-2">
                            <div class="contact-type">
                                <div class="address-grid">
                                    <h6><span class="fas fa-map-marked-alt"></span> Address</h6>
                                    <p>#302, 5th Floor, VHLY-2247 ek, Settlers Lane, New York.</p>
                                    
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-envelope-open-text"></span> Email</h6>
                                    <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>
                                    <a href="mailto:mailtwo@example.com"
                                        class="link1">mailtwo@example.com</a>
                                        
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-phone-alt"></span> Phone</h6>
                                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-inner-cont mt-5">
                <form action="#" method="post" class="signin-form">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="Name"  placeholder="Enter your name *"
                                required="" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="Subject" placeholder="Enter subject "
                                required />
                        </div>
                        <div class="form-input">
                            <input type="email" name="Sender"  placeholder="Enter your email *"
                                required />
                        </div>
                        <div class="form-input">
                            <input type="text" name="Phone" placeholder="Enter your Phone Number *"
                                required />
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="Message" placeholder="Type your query here"
                            required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-style btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //contacts-5-grid -->
</div>

<div class="contacts-sub-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
        style="border:0" allowfullscreen></iframe>
</div>
 

  <!--/footer-->
  <?php include 'footer.html' ?>
  <!-- //footer -->
  

  <!-- Js scripts -->
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>