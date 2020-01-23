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
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "sdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



<?php

$connect = mysqli_connect("localhost:3307", "root", "", "sdata");  

 if(isset($_POST["submit"]))  
 { 
    
     
     

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$service = $_POST['service'];
$acre = $_POST['acre'];
$message = $_POST['message'];






$query="INSERT INTO `squery`(`name`, `mobile`,`address`, `service`, `acre`,`message`) VALUES ('$name','$mobile','$address','$service','$acre','$message')";
 
  if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert(" Inserted into Database")</script>';  
      }  


 }
mysqli_close($connect);
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farm Care</title>
    <link rel="shortcut icon" href="img/download.png">
<!--    <link rel="stylesheet" href="css/main%20(2).css">-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index3.css">

    <!--////////////////////watch///////////-->
    <link rel="stylesheet" href="css/flipclock.css">
    <!--  <link rel="stylesheet" href="css/aos.scss">-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--///////////////////////font cdn/////////////////////////-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    ///////////////////////////////////////////////////////////////////////////-->
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>










    <!--    link form-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminpanel/css/util.css">
    <link rel="stylesheet" type="text/css" href="adminpanel/css/main.css">
    <!--===============================================================================================-->



</head>

<body onload="myfunction()">
    <div id="loading"></div>
     <div>
        <a id="top">
            <strong id="arrow"></strong></a>
    </div>

    <!--    //////////////////////////////////-->
    <section>
        <header class="main-header">
            <div class="logo">
                <a href="#"><img src="img/Webp.net-resizeimage.png"></a>
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
        <a href="#" class="btn1"> home</a>
        <a href="#" class="btn2"> details</a>
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
    <br><br><br><br>
    <style>
        .strdet {
            letter-spacing: 2px;
            line-height: 25px;
            text-align: justify;
            font-size: 16px;

        }

    </style>
    <section class="service-area aboutservr">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b>ABOUT Me</b></h1>
                        <hr>
                        <p>
                            Something about me...<br>

                            I am one of surviver in agriculture Field. It was great experience in past year there should be more information to farmer in agreeculture field..I m son of farmer. And I realize which there are many problem for farmer, I hope farmers will be given better guidelines via this web. <br>

                            It will be great to see you here and there is only one intention to make this web to make farmers HAPPY..

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    contact area start-->
    <br><br>
    <style>
        .dessn img {
            /*            transform: rotate(40deg);*/
        }

    </style>
    <section class="service-area aboutservr">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center dessn">
                        <img src="images/suraj.jpg" class="img-thumbnail" alt="Suraj Rajput" width="304" height="236">
                        <p>
                            If you have any question then ask me.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--    Time line -->
    <section class="bgsetim">

        <div class="timeline">
            <div class="container5 left">
                <div class="content8">
                    <h2>2015</h2>
                    <p>Starting my work this year not support any person but i thik farmer is future how to help him thats way get knowledge for farmer. This year not experince how to suggest this product is good but little knowledge why use this chemicals/any products. </p>
                </div>
            </div>
            <div class="container5 right">
                <div class="content8">
                    <h2>2016</h2>
                    <p> Farmers are responsible for all crops and livestock that are needed for us to survive. Without food, the world would slowly die, and farmers work hard every day to keep plenty of crops and animal products in the market to keep that from happening. </p>
                </div>
            </div>
            <div class="container5 left">
                <div class="content8">
                    <h2>2017</h2>
                    <p>Suggest farmer main goal this year Water management is essential to crop survival and maximizing your corn’s yield potential. It’s important to ensure your crop is getting enough water, but also that they aren’t being over-watered. Developing a drainage system in your crops can help prevent waterlogging and salinization in your soil, both of which can stifle growth and production. </p>
                </div>
            </div>
            <div class="container5 right">
                <div class="content8">
                    <h2>2018</h2>
                    <p>How to growth your plant "The best way to grow healthy plants is by providing water, nutrients, and the proper environmental conditions for your type of plant. Research how much sunlight and space your plants need before planting. Water your plants when the soil is dry to the touch, and fertilize your plants around twice a week." And use natural product your farm.</p>
                </div>
            </div>
            <div class="container5 left">
                <div class="content8">
                    <h2>2019</h2>
                    <p>Agriculture is the most integral part of Indian economy, and at present the country is among the top farm producers in the world. Agriculture is a source of employment for over 50 percent of the population. Require farmer which product is best for farm making the best qulity costly price. Which product sutaible your plant and when use. </p>
                </div>
            </div>
            <div class="container5 right">
                <div class="content8">
                    <h2>2020</h2>
                    <p> once in a while in life you need a doctor, a lawyer, a policeman or maybe a preacher. But every day, three times a day, you need a farmer. My future plan is how to handle many farmer is one place standing how to provide my knowlegde. That's way make this website farmer any help then read this information not satisfied then contact me. </p>
                </div>
            </div>
        </div>


    </section>



    <!--Time line end-->
    <br><br>

    <!--    contact area start-->

    <section class="service-area aboutservr">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b>Contact Me</b></h1>
                        <hr>
                        <p>
                            Contact Area if any query then ask me. Also available my contact deatails.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="bgconno">
        <div class="container">
            <div class="row">
                <div class="conno">
                    <div>
                        <!--            <h1>Contact Me</h1>-->
                        <h1>91+ 7262005530</h1>
                    </div>
                    <h2>if any help belong farm then contact me. i will sure support how to hand this problems. just ask me which help you need.</h2>
                </div>
            </div>
        </div>
    </section>
    <br>




    <!--    contact form-->
    <section>

        <div class="container-contact100">
            <div class="wrap-contact100">
                <form method="post" enctype="multipart/form-data">
                    <span class="contact100-form-title">
                        Ask Your Problem..!!
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Your Name</span>
                        <input class="input100" type="text" name="name" placeholder="Enter your name" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" type="tel" tabindex="3" required>
                        <span class="label-input100">Mobile No.</span>
                        <input class="input100" name="mobile" placeholder="Enter your Mobile" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Address</span>
                        <input class="input100" type="text" name="address" placeholder="Enter your address" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 input100-select">
                        <span class="label-input100">Your Query</span>
                        <div>
                            <select class="selection-2" name="service">
                                <option value="non_choice">Choose Any One</option>
                                <option value="Adrak">Adrak</option>
                                <option value="Makka">Makka</option>
                                <option value="Kapas">Kapas</option>
                                <option value="Kanda">Kanda</option>
                                <option value="Mirchi">Mirchi</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 input100-select">
                        <span class="label-input100">Farm</span>
                        <div>
                            <select class="selection-2" name="acre">
                                <option value="non_select">Select Acre</option>
                                <option value="0-1 Acre">0-1 Acre</option>
                                <option value="1-2 Acre">1-2 Acre</option>
                                <option value="2-3 Acre">2-3 Acre</option>
                                <option value="3-5 Acre">3-5 Acre</option>
                                <option value="More Than 5 Acre">More Than 5 Acre</option>
                            </select>
                        </div>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <style>
                        .subt {
                            /*        opacity: 0.5;*/
                        }

                        .subt input {
                            opacity: 0.5;
                            border-radius: 50px;
                            color: red;
                        }

                    </style>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn">
                                <span class="subt">
                                    <input type="submit" name="submit">
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>



    <!--    maps -->
    <section>
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">

                        <h1><b>Map Area </b></h1>
                        <hr>
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.2158120868653!2d75.0672011082685!3d20.271627943941194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdbfa195669df1d%3A0xd0e344d18f7d213d!2sMundwadi%2C%20Maharashtra%20431103!5e0!3m2!1sen!2sin!4v1574502978514!5m2!1sen!2sin" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <style>
        .conttn {
            background-color: lightslategray;
        }

        .bmyprof {
            background-color: lightgreen;
            padding: 20px 0px 30px 0px;
            color: white;
            /*            height: 50vh;*/
        }

        .bmyprof img {
            height: 300px;
            width: 200px;
            border: 1px solid gray;
            background-color: white;
            margin-left: 25%;
        }

        .socill {
            margin-left: 22%;
        }

        .bmyprof3 p {
            font-size: 22px;
            color: white;

        }

    </style>
    <section class="bmyprof">
        <div class="container conttn ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title .bmyprof3 text-center ">

                        <h1 style="color:green;"><b>Web-Developer</b></h1>
                        <hr>
                        <p style="color:white;">
                            Make this website for farmer. How to help farmer inculde more data usefull for farmer growth plant. Any query releted farm then call suraj rajput.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 text-center bmyprof3">
                    <h1>Web-Developer</h1>
                    <p><strong>Dinesh Rajput</strong><br>
                        Making this website for farmar recommended by suraj Rajput.
                        I am maked this website. Add more information helpfull knowledge. If website releted query then say me will change my mistake...!!!<br>(Mobile No. 7768981882)
                    </p>



                </div>

                <div class="col-md-6">
                    <img src="img/dinu2.png" class="img-responsive">
                    <div class="single-footer socill">

                        <ul class="footer-social  list-inline">
                            <li><a href="https://m.facebook.com/dinesh.marmat.792?ref=bookmarks"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="pinterest.com"><i class="fa fa-pinterest"></i></a></li>

                            <li><a href="https://www.linkedin.com/in/dinesh-marmat-132b7017b"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="https://www.instagram.com/dinu4945/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
                <p><strong>&copy; </strong> 2019 Copyright by <strong><a href="adminpanel/sloginpage.php">Dinesh Rajput</a></strong></p>
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




    <!--    footer area end-->
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
    <script src="js/main.js"></script>

    <script>
        var preloader = document.getElementById('loading');

        function myfunction() {
            preloader.style.display = 'none';
        }

    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!--boostrap links-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>










    <!--    contact form-->

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="adminpanel/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminpanel/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminpanel/vendor/bootstrap/js/popper.js"></script>
    <script src="adminpanel/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="adminpanel/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

    </script>
    <!--===============================================================================================-->
    <script src="adminpanel/vendor/daterangepicker/moment.min.js"></script>
    <script src="adminpanel/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="adminpanel/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="adminpanel/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>





</body>

</html>
