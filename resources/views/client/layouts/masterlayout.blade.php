<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Northern University Bangladesh </title>

    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="assets/vendor/video-background/video-background.css" rel="stylesheet"> 
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">

</head>

<body>
    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>


    <!-- Start Top Header -->
    <div class="fables-top-header-signin" style="background-color: rgb(3, 25, 37)">
        <div class="container">
            <div class="row" id="top-row">
                <div class="col-12 col-sm-2 col-lg-5">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Social Media
                        </button>
                        <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="uni-image/youtube.png" alt="youtube" class="mr-1" style="height: 20px; width: 30px;"> YouTube</a>
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="uni-image/facebook.jpg" alt="england flag" class="mr-1" style="height: 20px; width: 30px;"> Facebook</a>
                            <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                                <img src="uni-image/linkedin.jpg" alt="england flag" class="mr-1" style="height: 20px; width: 30px;"> LinkedIn</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-5 col-lg-4 text-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone : (+880) 1610 158095 - (+880) 1760 158095</p>
                </div>
                <div class="col-12 col-sm-5 col-lg-3 text-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: info@nub.ac.bd</p>
                </div>

            </div>
        </div>
    </div>

    <!-- /End Top Header -->

    <!-- Start Fables Navigation -->
    <div class="fables-navigation bg-primary py-3 py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-12 pr-md-0">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                        <a class="navbar-brand pl-0" href="index.html"><img src="uni-image/NUB-Logo.png" alt="Fables Template" class="fables-logo" style="height: 50px; width: 100px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">

                            <ul class="navbar-nav mx-auto fables-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('dashboard')}}" id="sub-nav1">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                        <li><a class="dropdown-item" href="{{route('history')}}">About NUB and Our History</a></li>
                                        <li><a class="dropdown-item" href="{{route('mission-and-vission')}}">Vision and Mission</a></li>
                                        <li><a class="dropdown-item" href="about3.html">Message from the Chairman</a></li>
                                        <li><a class="dropdown-item" href="about1.html">Message from VC</a></li>
                                        <li><a class="dropdown-item" href="about2.html">Faculties</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Programs
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item dropdown-toggle" href="#">Undergradute</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Faculty of Science and Engineerinnnn</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header1-transparent.html">Computer Science & Engineering</a></li>
                                                        <li><a class="dropdown-item" href="header1-light.html">Electrical & Electronic Engineering</a></li>
                                                        <li><a class="dropdown-item" href="header1-dark.html">Textile Engineering</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Faculty of Business</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header2-transparent.html">Business Administration</a></li>
                                                        <li><a class="dropdown-item" href="header2-light.html">Institute of Cicular Economy</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Faculty of Humanities Social science</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header3-transparent.html">Bangla</a></li>
                                                        <li><a class="dropdown-item" href="header3-light.html">English Language & Literature</a></li>
                                                        <li><a class="dropdown-item" href="header3-dark.html">General Education</a></li>
                                                        <li><a class="dropdown-item" href="header3-dark.html">Governance & Public Policy</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Faculty of Law</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header4-transparent.html">Law</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Faculty of Health Science</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="header5-transparent.html">Bachelor of Pharmacy</a></li>
                                                        <li><a class="dropdown-item" href="header5-light.html">Public Health</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Postgradute</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer1-bg-img.html">Footer 1 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="Footer1-light.html">Footer 1 Light</a></li>
                                                        <li><a class="dropdown-item" href="Footer1-dark.html">Footer 1 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 2</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer2-bg-img.html">Footer 2 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer2-light.html">Footer 2 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer2-dark.html">Footer 2 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer3-bg-img.html">Footer 3 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer3-light.html">Footer 3 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer3-dark.html">Footer 3 Dark</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Footer 4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="footer4-bg-img.html">Footer 4 Transparent</a></li>
                                                        <li><a class="dropdown-item" href="footer4-light.html">Footer 4 Light</a></li>
                                                        <li><a class="dropdown-item" href="footer4-dark.html">Footer 4 Dark</a></li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                                        <li><a class="dropdown-item" href="pricing-table.html">Pricing Table</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Academic
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                        <li><a class="dropdown-item" href="store_single.html">Academic System</a></li>
                                        <li><a class="dropdown-item" href="store_grid_list.html">Academic Regulations </a></li>
                                        <li><a class="dropdown-item" href="store_single.html">Academic Calender</a></li>
                                        <li><a class="dropdown-item" href="store_grid_list.html">Faculty Member </a></li>
                                        <li><a class="dropdown-item" href="store_single.html">NCST</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav7">
                                        <li><a class="dropdown-item" href="{{route('admission-information')}}">Admission Information</a></li>
                                        <li><a class="dropdown-item" href="{{route('why-study-at-nub')}}">Why Study at NUB</a></li>
                                        <li><a class="dropdown-item" href="contactus3.html">Online Admission</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Campus Life
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav5">
                                        <li><a class="dropdown-item" href="blog-cat1.html">Student Affairs Department</a></li>
                                        <li><a class="dropdown-item" href="blog-cat2.html">Cafeteria</a></li>
                                        <li><a class="dropdown-item" href="blog-cat3.html">Fitness Center</a></li>
                                        <li><a class="dropdown-item" href="blog-cat-masonry.html">Library</a></li>
                                        <li><a class="dropdown-item" href="blog-details1.html">Learning Resource</a></li>
                                        <li><a class="dropdown-item" href="blog-details2.html">Teaching Methodology</a></li>
                                        <li><a class="dropdown-item" href="blog-details3.html">Other Facties</a></li>
                                        <li><a class="dropdown-item" href="blog-single-img.html">Photo Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Management
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav6">
                                        <li><a class="dropdown-item" href="{{route('board-of-trustees')}}">Board f Trustees</a></li>
                                        <li><a class="dropdown-item" href="comming-soon.html">Syndicate</a></li>
                                        <li><a class="dropdown-item" href="gallery.html">Academic Council</a></li>
                                        <li><a class="dropdown-item" href="gallery-filter.html">Executives</a></li>
                                        <li><a class="dropdown-item" href="gallery-filter-masonry.html">NUB Chancellor and Top Executive</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('contact')}}" id="sub-nav7">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Fables Navigation -->




    <main>
        @hasSection('content')
        @yield('content')

        @else
        <h1>Here is no content</h1>
        @endif
    </main>






    <!-- Start Footer 4 -->
    <div class="fables-main-background-color white-color py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-2 mb-lg-0">
                    <a href="#"><img src="uni-image/NUB-Logo.png" alt="fables template" class="mb-2" style="height: 80px; width: 160px;"></a>
                    <p class="font-15 mb-2">
                        Vision of NUB is to take part in the collective efforts to enhance socio-economic development in the region by offering opportunities to obtain knowledge and skills essential for better living in the new century.
                    </p>
                    <a href="#" class="fables-readmore text-white fables-second-hover-color mb-1 d-inline-block">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-13 col-sm-4 mb-4 mb-md-0">
                            <h2 class="font-20 fables-second-text-color mb-4">EXTRA LINKS</h2>
                            <ul>
                                <li class="pb-2"><a href="#" class="text-white">NUB Forms</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Research</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Job Openings</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Office Mail</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Sexual Harassment Comittee</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Newspaper Articles</a></li>
                            </ul>
                        </div>
                        <div class="col-13 col-sm-4 mb-4 mb-md-0">
                            <h2 class="font-20 fables-second-text-color mb-4">ADMINISTRATION</h2>
                            <ul>
                                <li class="pb-2"><a href="#" class="text-white">Administrative Staffs</a></li>
                                <li class="pb-2"><a href="#" class="text-white">IT Department</a></li>
                                <li class="pb-2"><a href="#" class="text-white">NUB Backoffice ERP</a></li>
                                <li class="pb-2"><a href="#" class="text-white">NUB Acafemic ERP</a></li>
                            </ul>
                        </div>
                        <div class="col-13 col-sm-4 mb-4 mb-md-0">
                            <h2 class="font-20 fables-second-text-color mb-4">IMPORTANT LINKS</h2>
                            <ul>
                                <li class="pb-2"><a href="#" class="text-white">Online Admission</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Alumni Association</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Photo Gallery</a></li>
                                <li class="pb-2"><a href="#" class="text-white">Short Course</a></li>
                                <li class="pb-2"><a href="#" class="text-white">PhD Research</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright fables-main-background-color mt-0 border-0 white-color">
                <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <p class="mb-0">Copyright © NUB 2018. All rights reserved.</p> 
        
        </div>
        </div>
    </div>
    <!-- /End Footer 4 -->



    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
    <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/video-background/jquery.mb.YTPlayer.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/custom/js/custom.js"></script>  
    <script>
         $(".player").mb_YTPlayer();
        
    </script>  
    <script src="assets/vendor/jquery-circle-progress/circle.js"></script>
</body>

</html>