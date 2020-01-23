<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:user/userlogin.php');
}
include ("adminpanel/scon.php");
$userprofile = $_SESSION['username'];

$query = "SELECT * FROM signup WHERE username='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
$img1=$result ['img1']
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farm Care</title>
    <link rel="shortcut icon" href="img/download.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>

    <!--////////////////////watch///////////-->
    <link rel="stylesheet" href="css/flipclock.css">
    <!--  <link rel="stylesheet" href="css/aos.scss">-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--///////////////////////font cdn/////////////////////////-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    ///////////////////////////////////////////////////////////////////////////-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>








    <!--    /////////               mason links 3              /////////-->


    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet">

    <!--Animated headline css-->
    <link rel="stylesheet" href="mason/css/jquery.animatedheadline.css">

    <!--Animate css-->
    <link rel="stylesheet" href="mason/css/animate.css">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="mason/css/owl.carousel.css">
    <link rel="stylesheet" href="mason/css/owl.theme.default.css">

    <!--Magnific popup css-->
    <link rel="stylesheet" href="mason/css/magnific-popup.css">

    <!--Normalizer css-->
    <link rel="stylesheet" href="mason/css/normalize.css">

    <!--Theme css-->
    <link rel="stylesheet" href="mason/css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="mason/css/responsive.css">

</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <div>
        <a id="top"><strong id="arrow"></strong></a></div>

    <section>
        <header class="main-header">
            <div class="logo">
                <a href="index.php"><img src="img/Webp.net-resizeimage.png"></a>
            </div>

            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="menu-icon__line"></span>
            </label>

            <ul class="nav-links">
                <li class="nav-link">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-link">
                    <a href="mywork.php">My Work</a>
                </li>
                <li class="nav-link">
                    <a href="information.php">Info</a>
                </li>
                <li class="nav-link">
                    <a href="contact.php">Contact</a>
                </li>
                
                
            </ul>
        </header>

    </section>
    <div class="hero3">

        <!--            <h1 class="type" data-aos="fade-down"></h1>-->
        <h1 data-aos="fade-down"><strong>शेतकरी माझा <span>मित्र</span> </strong></h1>
    </div>

    <div class="cta-div">
        <a href="index.php" class="btn1"> Home</a>
        <a href="mywork.php" class="btn2"> My work</a>
    </div>
    <!--////////////////////////////////////////////-->
    <section class="aboutfirstimg">
        <div class="container">
            <div>
                <div>

                </div>
            </div>
        </div>
    </section>


    <!--////////////////////////////////////////////////////////////////-->
    <style>
        .strdet p {
            letter-spacing: 2px;
            line-height: 25px;
            text-align: justify;
        }

    </style>
    <br><br><br>



    <section class="service-area aboutservr">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1>कृषि कन्या </h1>
                        <hr>
                        <h4>
                            कृषि कन्या कुमारी धनश्री गणेश राव पऊळ पाटील  कृषिकन्या पूजा गणेश राव पऊळ पाटील मु पो बनचिंचोली तालुका हादगाव जिल्हा नांदेड <br>(Mobile No. 7499735534)
                        </h4>
                    </div>
                </div>
            </div>
            <div class="conttn ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1>Great Work</h1>
                            <hr>
                            <p>
                                Besides the general knowledge of planting dates, breeding cycles and harvesting periods, a farmer often needs a good working knowledge of mechanics in order to keep their equipment running and in optimal order.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row igmgar">
                    <div class="col-md-6 col-xs-12 ">
                        <div class="afbfr aftrr">
                            <a href="images/paper1.jpg" data-lightbox="mygallery"><img src="images/paper1.jpg"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 ">
                        <div class="newtitile2">
                            <h3>The role of women in
                                agriculture </h3>
                            <hr>
                            <p>Women make essential contributions to the agricultural and rural economies in all developing
                                countries. Their roles vary considerably between and within regions and are changing rapidly
                                in many parts of the world, where economic and social forces are transforming the
                                agricultural sector. Rural women often manage complex households and pursue multiple
                                livelihood strategies.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="descr">
                            <h4> Their activities typically include producing agricultural crops, tending
                                animals, processing and preparing food, working for wages in agricultural or other rural
                                enterprises, collecting fuel and water, engaging in trade and marketing, caring for family
                                members and maintaining their homes.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="conttn ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1>We support womans..!!</h1>
                            <hr>
                            <p>

                                Rural women often manage complex households and pursue multiple livelihood strategies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row igmgar">
                    <div class="col-md-6 col-xs-12 ">
                        <div class="afbfr aftrr">
                            <a href="images/hardwork.jpg" data-lightbox="mygallery"><img src="images/hardwork.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 ">
                        <div class="newtitile2">
                            <h2>Hard Work ... </h2>
                            <hr>
                            <p>
                                The agricultural sector in many developing countries is underperforming, in part because
                                women, who represent a crucial resource in agriculture and the rural economy through their
                                roles as farmers, labourers and entrepreneurs, almost everywhere face more severe constraints
                                than men in access to productive resources. <br><br>Efforts by national governments and the
                                international community to achieve their goals for agricultural development, economic growth
                                and food security will be strengthened and accelerated if they build on the contributions that
                                women make and take steps to alleviate these constraints.
                                <br><br>
                                Women make important contributions to the agricultural and rural economies of all regions of
                                the world. <br><br>However, the exact contribution both in terms of magnitude and of its nature is often difficult to assess and shows a high degree of variation across countries and regions.
                            </p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="service-area aboutservr conttn">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1>जिल्हाअधिकारी व मोठे अधिकाऱ्यानं सोबत भेट घेतांना.</h1>
                        <hr>
                        <h4>
                            कृषि कन्या कुमारी धनश्री गणेश राव पऊळ पाटील व पूजा गणेश कृषिकन्या पूजा गणेश राव पऊळ पाटील मु पो बनचिंचोली तालुका हादगाव जिल्हा नांदेड
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row igmgar">
                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/baithk.jpg" data-lightbox="mygallery"><img src="images/baithk.jpg" class="img-responsive"></a>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/withpolice2.jpg" data-lightbox="mygallery"><img src="images/withpolice2.jpg"></a>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/sogt.jpg" data-lightbox="mygallery"><img src="images/sogt.jpg" class="img-responsive"></a>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/krushi.jpg" data-lightbox="mygallery"><img src="images/krushi.jpg"></a>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/krushik2.jpg" data-lightbox="mygallery"><img src="images/krushik2.jpg"></a>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <div class="gapgr">
                        <a href="images/real2.jpg" data-lightbox="mygallery"><img src="images/real2.jpg"></a>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </section>
<br><br><br>
    <section class="service-area aboutservr">
        <div class="container ">
            <div class="conttn ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1>Female participation in agriculture</h1>
                            <hr>
                            <p>
                                Women as farmers, laborers and entrepreneurs are the driving force of India’s farmland. According to OXFAM 2018, agriculture sector employs 80% of all economically active women in India, they comprise 33% of the agriculture labour force and 48% of the self-employed farmers. In spite of their large contribution women continue to remain invisible in the rural economy of India.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row igmgar">
                    <div class="col-md-6 col-xs-12 ">
                        <div class="afbfr aftrr"><br>
                            <a href="images/last.jpg" data-lightbox="mygallery"><img src="images/last.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 ">
                        <div class="newtitile2">
                            <h2>Agriculture Woman About..!!</h2>
                            <hr>
                            <p>
                                A statistical profile. In rural India, the percentage of women who depend on agriculture for their livelihood is as high as 84%. Women make up about 33% of cultivators and about 47% percent of agricultural laborers.
                                Major participants of these protests were women farmers and their unattended demands. Limited access to resources, illiteracy, land allocation for farming and recognition is consistently adding trouble for women farmers. The vicious cycle of debt, crop failure and poverty often force them to take their own lives. According to NCRB, out of the total 8,007 farmer suicides in 2014, 441 were by women farmers & cultivators. Among the suicides by Agricultural laborers, 577 were women.
                            </p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>




 <!--    footer area-->
    <footer>
        <div id="footer-area">
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="single-footer">
                        <h3>ABOUT MY WEBSITE</h3>
                        <p>Main Headline this website <strong>Shetakari Maza Mitra</strong> How to help farmer.How to solve it farmer querys. </p>
                        <ul class="footer-social list-inline">
                            <li><a href="Facebook.com"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="pinterest.com"><i class="fa fa-pinterest"></i></a></li>

                            <li><a href="linkedin.in"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="youtube.com"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer">
                            <h3>POPULAR LINKS</h3>
                            <ul class="link-area anglrighticon">
                                <li><a href="krushikannya.php"><i class="fa fa-angle-double-right"></i>Krushi Kannya</a></li>

                                <li><a href="tech.php"><i class="fa fa-angle-double-right"></i>Technology</a></li>

                                <li><a href="information.php"><i class="fa fa-angle-double-right"></i> Information</a></li>

                                <li><a href="mywork.php"><i class="fa fa-angle-double-right"></i>My Work</a></li>
                                
                                <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>About Me</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer">
                            <h3>INFORMATION LINKS</h3>
                            <ul class="link-area anglrighticon">
                                <li><a href="sugarcane.php"><i class="fa fa-angle-double-right"></i>Sugarcane Information</a></li>

                                <li><a href="adrak.php"><i class="fa fa-angle-double-right"></i>Giner Information</a></li>

                                <li><a href="tomato.php"><i class="fa fa-angle-double-right"></i>Tomato Information</a></li>

                                <li><a href="cotton.php"><i class="fa fa-angle-double-right"></i>Cotton Information</a></li>

                                <li><a href="american.php"><i class="fa fa-angle-double-right"></i>Lashkar Ali Information </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer">
                            <h3>CONTACT ME</h3>
                            <ul class="link-area anglrighticon">
                                <li><a href="contact.php"><i class="fa fa-phone"></i>+91 7262005530</a></li>

                                <li><a href="contact.php"><i class="fa fa-envelope"></i>surajmarmat@gmail.com</a></li>

                                <li><a href="contact.php"><i class="fa fa-map"></i>At.Mundwadi, Tq.Kannad, Dist.Aurangabad</a></li>

                                <li><a href="contact.php"><i class="fa fa-globe"></i>www.youtube.com</a></li>

                            </ul>
                        </div>
                    </div>
<!--                    this css not working css file thats way he put here user show img background-->
                    <style>
                                    .imgress img {
                                    padding-top: 20px;
                                    width: 126px;
                                    height: 184px;

                                }
                                .widget li:nth-child(1) {
                                        background-color: #262626 !important;
                                    }
                                /*/////////////////////android//////*/
                                @media only screen and (max-width: 784px) {
                                    .imgress img {
                                        width: 140px;
                                        height: 180px;
                                    }
                                }
                    </style>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Your Profile</h3>
                            <ul class="link-area widget list-inline imgress">

                                <li><?php echo "<img src='  user/userimg/$img1'  class='img-thumnail'   />"?></li>
                                <li>
                                    <div class="usess2">
                                        <h5>Name:<br><strong class="usess"><?php echo  $result['username']; ?></strong></h5><br>
                                        <h5>Email id:<br><strong class="usess3"><?php echo  $result['email']; ?></strong></h5>
                                        <style>
                                            .logbtnt {
                                                border: 1px solid white;
                                                border-radius: 25px;
                                                text-align: center;
                                            }

                                        </style>

                                        <div class="logbtnt">
                                            <h5><a href="user/userlogout.php" class="logoutbtn">Logout</a></h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area text-center">
                <p><strong>&copy; </strong> 2019 Copyright by <a href="adminpanel/sloginpage.php">Dinesh Rajput</a></p>
            </div>


        </div>
    </footer>
    <!--    footer area end-->
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                $("#top").fadeIn();
            } else {
                $("#top").fadeOut();
            }
        });
        $("#top").click(function() {
            $("html").animate({
                scrollTop: 0
            }, 2000);
        });

    </script>





    <script src="js/main.js"></script>

    <!--/////////////////////////////////////////////////////////////////////////////////-->
    <!--java script animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000,
        });

    </script>

    <!--boostrap links-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   








    <!--    /////////////    mason links   //////////////////////-->





    <!--Magnific popup js-->
    <script src="mason/js/jquery.magnific-popup.js"></script>

    <!--Owl Carousel js-->
    <script src="mason/js/owl.carousel.js"></script>

    <!--wow js-->
    <script src="mason/js/wow.min.js"></script>

    <!--Animated headline js-->
    <script src="mason/js/jquery.animatedheadline.js"></script>




    <!--Validator js-->
    <script src="mason/js/jquery.waypoints.js"></script>

    <!--counter up js-->
    <script src="mason/js/jquery.counterup.min.js"></script>

    <!--Validator js-->
    <script src="mason/js/validator.js"></script>

    <!--Contact js-->
    <script src="mason/js/contact.js"></script>

    <!--Main js-->
    <script src="mason/js/main.js"></script>










</body>

</html>
