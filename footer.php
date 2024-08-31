

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jamia Rabbani</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>


  
 <!--/footer-->
 <footer class="w3l-footer-22 position-relative">
    <div class="footer-sub py-5">
        <div class="container py-md-5">
            <div class="row sub-columns">
                <div class="col-lg-4 col-md-6 sub-one-left ab-right-cont pr-lg-5 mb-md-0  mb-4">
                    <h6>About </h6>
                    <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi, sit amet.
                        Lorem ipsum dolor sit amet elit.voluptatem accusantium
                        doloremque.</p>
                    <div class="columns-2">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fab fa-google-plus-g" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#pinterest"><span class="fab fa-pinterest-p" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 sub-two-right pl-lg-5">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="index.php"><span class="fas fa-chevron-right mr-2"></span>Home</a>
                        </li>
                        <li><a href="about.php"><span class="fas fa-chevron-right mr-2"></span>About</a>
                        </li>
                        <li><a href="Department.php"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
                        <li><a href="Virtual-Bookshelf.php"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
                        <li><a href="Gallery.php"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
                        <li><a href="Visitors.php"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
                        <li><a href="contact.html"><span class="fas fa-chevron-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 sub-two-right pl-lg-5 mt-md-0 mt-4">
                    <h6>Help & Support</h6>
                    <ul>
                        <li><a href="#live"><span class="fas fa-chevron-right mr-2"></span>Live
                                Chart</a></li>
                        <li><a href="#faq"><span class="fas fa-chevron-right mr-2"></span>Faq</a>
                        </li>
                        <li><a href="#support"><span class="fas fa-chevron-right mr-2"></span>Support</a>
                        </li>
                        <li><a href="#terms"><span class="fas fa-chevron-right mr-2"></span>Terms
                                of Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 sub-two-right mt-md-0 mt-4">
                    <h6>Research</h6>
                    <ul>
                        <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Academic Divisions</a>
                        </li>
                        <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Student Research</a>
                        </li>
                        <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Centers & Institutes</a>
                        </li>
                        <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Research Facilities</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- copyright -->
    <div class="copyright-footer text-center">
        <div class="container">
            <div class="columns">
                <p>© 2021 Edukator. All rights reserved.Design by<a href="https://w3layouts.com/" target="_blank">
                        W3layouts</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //copyright -->
</footer>
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