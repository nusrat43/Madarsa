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

    <style>
        .columns-2  img {
            width: 100px;
            height: 100px;
        }
        .columns-2 .two img{
            width: 60px;
            height: 60px;
            margin: 5px;
        }
        .columns-2 .three img{
            width: 70px;
            height: 70px;
            margin: 5px;
        }
        .image img{
            margin-left: -20px ;
        }
    </style>
</head>

<body>



    <!--/footer-->
    <footer class="w3l-footer-22 position-relative">
        <div class="footer-sub py-5">
            <div class="container py-md-5">
                <div class="row sub-columns">
                    <div class="col-lg-4 col-md-6 sub-one-left ab-right-cont pr-lg-5 mb-md-0  mb-4">
                        <h6>About </h6>
                        <p>Jamia Rabbani Manorwa, founded by Maulana Syed Muhammad Sadiq, is renowned for its comprehensive Islamic curriculum and commitment to producing knowledgeable scholars.</p>
                        <div class="columns-2">
                            <div class="image">
                                <a href="news.php" class="one"><img src="assets/images/news logo.png" alt=""></a>
                               <a href="assets/images/books/ishtehar.pdf" class="two"><img src="assets/images/poster.png" alt=""></a>
                               <a href="assets/images/books/apeel.pdf" class="three"><img src="assets/images/appeal.png" alt=""></a>
                               <a href="calendar.php" class="one"><img src="assets/images/calendar.png" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 sub-two-right pl-lg-5">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="index.php"><span class="fas fa-chevron-right mr-2"></span>Home</a>
                            </li>
                            <li><a href="about.php"><span class="fas fa-chevron-right mr-2"></span>About</a>
                            </li>
                            <li><a href="Department.php"><span class="fas fa-chevron-right mr-2"></span>Department</a></li>
                            <li><a href="Virtual-Bookshelf.php"><span class="fas fa-chevron-right mr-2"></span>Virtual Bookshelf</a></li>
                            <li><a href="Gallery.php"><span class="fas fa-chevron-right mr-2"></span>Gallery</a></li>
                            <li><a href="Visitors.php"><span class="fas fa-chevron-right mr-2"></span>Visitors</a></li>
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
                    <div class="cwp23-text-cols row">
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/gate.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <!-- <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Personal Development</a></h4>
                                    </div> -->
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/madarsa3.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <!-- <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Business</a></h4>
                                    </div> -->
                                </div>
                            </div>
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/madarsa1.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <!-- <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Entrepreneurship</a></h4>
                                    </div> -->
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/madarsa2.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <!-- <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Photography</a></h4>
                                    </div> -->
                                </div>
                            </div>
                            
                        </div>
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
        window.onscroll = function() {
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
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
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