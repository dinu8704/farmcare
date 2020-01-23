
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

    <!--- jQuery library -->

    




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

    <!-- Latest compiled JavaScript -->

</head>

<body >
     
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
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1>My Works</h1>
                            <hr><p>
                            many farmer request how it solve the problem.

                        </p>
                        </div>
                    </div>
                </div>
            <br><br>
            <div class=" col-xs-12 ">
                <div class="strdet ">
                    <h3 class="text-center ">PERFECT KNOWLEDGE PROVIDE</h3>
                    <p>
                        The Problems That An Average Indian Farmer Faces Are Multi-Fold. At Any Given Point In Time, A Farmer Is Facing Different Issues Simultaneously Such As Natural Calamities Like Droughts And Floods, Lack Of Proper Irrigation Systems And Therefore Water Scarcity, Low Market Prices, Mazes Of Middlemen, Low Return On Investment, Debts, No Facilities For Storage As Well As Transport, And A Lack Of Technical Know-How About Crop Patterns, Soil Types As Well As The Use Of Chemical Pesticides. Conventional Agricultural Practices Are Polluting Soils, Rivers And Oceans With Large Amounts Of Harmful Agricultural Chemicals. These Can Include: Nitrogen, Nitrates, Nitrites, Phosphorous, Phosphates Alongside Other Pesticides And Fertilizers. That's Way This Company Provide Products Is Not Harmful And Many Facility For Farmer Saving Balance, Helping Farmer, Provide The Services, Many Offers For Farmer.</p>
                </div>
            </div>


        </div>
    </section>
    
    
    
<br><br><br>
    
        <section>

        <!--Services Area Starts-->

        <div id="services" class="services-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header wow fadeInDown section-title" data-wow-delay="0.2s">
                            <h2>Happy farmer response</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div id="services-carousel" class="owl-carousel owl-theme ">
                        <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/adrak22.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/adrak22.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Pavan Bansod</h4>
                                    <p class="card-text">Best information provide by Suraj Rajput. I am happy for given greatfull impormation growth my ginger. Thanks suraj.</p>
                                </div>
                            </div>
                        </div>


                        <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/adrak3.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/adrak3.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Shankar Tayde</h4>
                                    <p class="card-text">Suraj Rajput give me best advise growth my ginger. Which product usefull and important my farm his suggest me thanks suraj.</p>
                                </div>
                            </div>
                        </div>


                         <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/makka3.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/makka3.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Santosh Rajput</h4>
                                    <p class="card-text">Soil temperature ranging from 50 to 55 degrees Fahrenheit may take 18 to 21 days to emerge, while between 60 to 65 degrees Fahrenheit can emerge in 8 to 10 days.</p>
                                </div>
                            </div>
                        </div>


                         <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/pape3.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/pape3.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Akshay sawant</h4>
                                    <p class="card-text">Lot of water in warm weather, so they need a lot of water. But unfortunately papayas are very susceptible to root rot, especially in cool weather.</p>
                                </div>
                            </div>
                        </div>


                         <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/tarbuj3.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/tarbuj3.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Ranjit Dongarjal</h4>
                                    <p class="card-text">Growing watermelons requires lots of space, lots of sun, lots of water and lots of nutrients. Sow seeds 1 inch deep and keep well watered until germination.</p>
                                </div>
                            </div>
                        </div>


                         <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/tomato3.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/tomato3.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Bhagwan Dongarjal</h4>
                                    <p class="card-text">Use a large pot or container with drainage holes in the bottom. Use loose, well-draining soil. Growth tomato. You take advise suraj. Thanks</p>
                                </div>
                            </div>
                        </div>


                         <div class="serkk2">
                            <div class="card single-services text-center item serkk">
                                 <a href="img/agri/adrak44.jpg" data-lightbox="mygallery">
                                     <img class="card-img-top" src="img/agri/adrak44.jpg" alt="Card image" style="width:100%"></a>
                                <div class="card-body services-content">
                                    <h4 class="card-title">Saayaji Gadekar</h4>
                                    <p class="card-text">Ginger grows well in warm and humid climate and is cultivated from sea level. Humic acid is growth root. Also grow my income Thanks suraj</p>
                                </div>
                            </div>
                        </div>


                        
                    </div>

                </div>
            </div>
        </div>
    </section>
        <!--Services Area Ends-->
<br><br>
    <section class="service-area aboutservr">
        <div class="container ">
             <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1>My Works</h1>
                            <hr><p>
                            many farmer request how it solve the problem.

                        </p>
                        </div>
                    </div>
                </div>
            




            <?php    
    $connect = mysqli_connect("localhost:3307", "root", "", "sdata");  
if(isset($_REQUEST['delid'])){
    $delid=$_REQUEST['delid'];
    mysql_query("delete from stable where id='$delid'");
}
                $query = "SELECT * FROM stable";  
   $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
                  $img1=$row['img1'];
                  $img2=$row['img2'];
                 
                 ?>


            <div class="conttn">

                <div class="row ">

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="afbfr aftrr">
                            <h2>After</h2>
                            <a <?php echo"  href='adminpanel/gaming chairs/$img1' class='img-thumnail img-responsive' data-lightbox='mygallery' />"?><?php echo"  <img src='adminpanel/gaming chairs/$img1' class='img-thumnail img-responsive' height='300' width='320' />"?></a>

                            <h2>Date:<?php echo $row["date1"];?></h2>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="fardett">
                            <h3><strong>Farmer Name:</strong>
                                <p><?php echo $row["farname"];?></p>
                            </h3>
                            <h3><strong>Address:</strong>
                                <p><?php echo $row["faraddress"];?></p>
                            </h3>

                        </div>
                    </div>
<a></a>
                    <div class="col-sm-4 col-xs-12 ">
                        <div class="afbfr befrr">
                            <h2>Before</h2>
                            <a <?php echo"  href='adminpanel/gaming chairs/$img2' class='img-thumnail img-responsive' data-lightbox='mygallery' />" ?><?php echo"  <img src='adminpanel/gaming chairs/$img2' class='img-thumnail img-responsive' height='300' width='320' />"?></a>
                            <h2>Date:<?php echo $row["date2"];?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="descr">
                            <h4><strong>Descriptions:</strong>
                                <p> <?php echo $row["desc"];?></p>
                            </h4>


                        </div>
                    </div>
                </div>
            </div>
            <?php    
} ?>

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

 


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            
            
            
            
            
            
            
            
            
            
            


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
