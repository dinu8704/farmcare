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





    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">

    <!--////////////////////watch///////////-->
    <link rel="stylesheet" href="css/flipclock.css">
    <!--  <link rel="stylesheet" href="css/aos.scss">-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--///////////////////////font cdn/////////////////////////-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    ///////////////////////////////////////////////////////////////////////////-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>










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
        <a id="top">
            <strong id="arrow"></strong></a>
    </div>
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

<!--
                <li class="nav-link ">
                    <a href="#" class="logoutbtn">Logout</a>
                </li>
-->
            </ul>
        </header>

        <!--//////////////////////////////////////////-->

        <div class="hero">
            <h1 class="type" data-aos="fade-down"></h1>
            <!--        <h1 data-aos="fade-down">शेतकरी माझा मित्र</h1>-->
        </div>


        <div class="clock"></div>

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
    <div id="services" class="section-title"></div>
    <br><br>
    <section class="service-area aboutservr">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b>Farmer is future</b></h1>
                        <hr>
                        <p>
                            Main purpose this website how to solve farmer problem. And give Suggestion which product use for plant. how to growth plant...!!
                        </p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-sm-6 col-xs-12 ">
                <div class="strdet ">
                    <h3 class="text-center ">PERFECT KNOWLEDGE PROVIDE</h3>
                    <p>
                        The Problems That An Average Indian Farmer Faces Are Multi-Fold. At Any Given Point In Time, A Farmer Is Facing Different Issues Simultaneously Such As Natural Calamities Like Droughts And Floods, Lack Of Proper Irrigation Systems And Therefore Water Scarcity, Low Market Prices, Mazes Of Middlemen, Low Return On Investment, Debts, No Facilities For Storage As Well As Transport, And A Lack Of Technical Know-How About Crop Patterns, Soil Types As Well As The Use Of Chemical Pesticides. Conventional Agricultural Practices Are Polluting Soils, Rivers And Oceans With Large Amounts Of Harmful Agricultural Chemicals. These Can Include: Nitrogen, Nitrates, Nitrites, Phosphorous, Phosphates Alongside Other Pesticides And Fertilizers. That's Way This Company Provide Products Is Not Harmful And Many Facility For Farmer Saving Balance, Helping Farmer, Provide The Services, Many Offers For Farmer.</p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 ">
                <div class=" ">
                    <h3 class="text-center ">FARMER HAPPY </h3>
                    <div class="centimgg ">
                        <img src="img/Agri2.png" alt="" class="img-responsive"><br>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="service-area" id="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1 data-aos="fade-up"><b>WHY MAKE</b></h1>
                        <hr>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            This website make main purpose for farmer. help any time just call and response by me.
                        </p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 " data-aos="fade-up-right">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h3>Qulity</h3>
                        <p>This is most important  topic for farmer. If there is quality to our crops. Farmer can get better price to his  crop. Suggest  the best quality product at the most competitive prices. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="zoom-out-up">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3>Health</h3>
                        <p>Farmers should take care of self. There should not heavy use of insecticide. There is too important of MRL( Maximum/minimum residue level) on vegetables and food. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="zoom-in-down">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-ambulance" aria-hidden="true"></i>
                        </div>
                        <h3>Help</h3>
                        <p>Farming techniques such as agroforestry, organic agriculture, and permaculture are more sustainable and practical on a small, rural scale. Poor farmers need to learn about these techniques.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="fade-up-right">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h3>Meet</h3>
                        <p> Here is my number (7262005530) for farmers field visit and you Will be recognized by our web to world. How to improve your income..!!👍</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="zoom-out-up">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3>Farmers</h3>
                        <p>A farmer is one of the most important members of society. He is the giver of food to the people, to all practical purposes.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="zoom-in-down">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h3>Suggestion</h3>
                        <p>Agricultural marketing should be improved so that the farmer gets proper price for their produce warehousing facilities should be improved. Means of Transport should be strengthened.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--////////////////////////////////////////////////////////////////////////////-->

    <!-- Our Features Area -->
    <section class="our_feature_area ">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1 data-aos="fade-up"><b>Best Features</b></h1>
                        <hr>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            Best Features for farmer provide and also good benefits to farmer.<br>
                            once in a while in life you need a doctor, a lawyer, a policeman or maybe a preacher. But every day, three times a day, you need a farmer.

                        </p><br>
                    </div>
                </div>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img img-responsive featureimgt">
                    <img src="img/adrak2.jpg" alt="" class="img-responsive"><br><br>
                    <img src="img/ginger3.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6 feature_content servexp">
                    <div class="subtittle">
                        <h2>WHY CHOOSE ME</h2>
                        <p>This is main reason It is very important for any farmer that wants to buy the best product at the best prices. Suggest which is the best quality product at the most competitive prices.</p>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-mortar-board" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">5+ YEARS OF EXPERIENCE</a>
                            <p>More than 5 years experience in this field. Farmer happy using my suggest which is the best knowledge for farmer. That's way in this field standing. </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body ">
                            <a href="#">Why meet with me??</a>
                            <p>Many farmer know that how to use the which product when use and control the scourge of plant fungal diseases, farmers have used fungicides. Choose disease-resistant varieties. Many ornamental plants and vegetables have proven resistance to diseases such as canker, mildew, and rust. Then i suggest which product take and improve your plant.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Customers </a>
                            <p>In this field so many get knowledge and make many clients. How to give best knowledge provide farmer. Thats way many farmer happy by me give the best suggest. </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Growth plants</a>
                            <p>The best way to grow healthy plants is by providing water, nutrients, and the proper environmental conditions for your type of plant. Research how much sunlight and space your plants need before planting. Water your plants when the soil is dry to the touch, and fertilize your plants around twice a week..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->



    <br>
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

        <!--number area starts-->

        <div class="number-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>My Skills</h2>
                            <hr><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="single-number text-center skill3 ">
                            <i class="glyphicon glyphicon-education"></i>
                            <h2 class="counter">2207</h2>
                            <!--edit-->
                            <p>Days</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="single-number text-center skill3 skill4bord">
                            <i class="fa fa-gear"></i>
                            <h2 class="counter">3015</h2>
                            <!--edit-->
                            <p>Worked </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="single-number text-center skill3 ">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            <h2 class="counter">43</h2>
                            <!--edit-->
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="single-number text-center skill3 skill4bord">
                            <i class="fa fa-users"></i>
                            <h2 class="counter">4723</h2>
                            <!--edit-->
                            <p>Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--number area ends-->

        <!--Portfolio Area Starts-->
<section>
        <div id="portfolio" class="portfolio-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>My Works</h2>
                            <hr><br>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="portfolio-items">

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">
                            <div id="inline-popups" class="port-box">
                                <a href="#test-popup" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7adrak.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Ginger</h2>
                                            <!--your project name-->
                                            <p>Ginger grows well in warm and humid climate and is cultivated from sea level. Humic acid is growth root.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12">
                                        <div class="por-img">
                                            <img src="img/a7adrak.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-12">
                                        <div class="por-text">
                                            <h2>Ginger</h2>
                                            <!--your project title-->
                                            <p>Ginger grows well in warm and humid climate and is cultivated from sea level. Humic acid is growth root.</p>
                                            <div class="por-text-details">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Saayaji Gadekar</p>
                                                        <!--edit here-->
                                                        <p>15/12/2019</p>
                                                        <!--edit here-->
                                                        <p>Growth Stoped</p>
                                                        <!--edit here-->
                                                        <p>Nidhona</p>
                                                        
                                                        <p>9158370964</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                            <div id="inline-popups-2">
                                <a href="#test-popup-2" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7adrak2.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Ginger</h2>
                                            <!--your project name-->
                                            <p>The most important nutrients for plants growing needs are nitrogen(N), phosphorus(P), potassium(K).</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup-2" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="por-img">
                                            <img src="img/a7adrak2.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="por-text">
                                            <h2>Ginger</h2>
                                            <!--your project title-->
                                            <p>The most important nutrients for plants growing needs are nitrogen(N), phosphorus(P), potassium(K).</p>
                                            <div class="por-text-details">
                                               <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Kamlesh Gadekar</p>
                                                        <!--edit here-->
                                                        <p>29/11/2019</p>
                                                        <!--edit here-->
                                                        <p>Growth Stoped</p>
                                                        <!--edit here-->
                                                        <p>Nidhona</p>
                                                        
                                                        <p>8007360854</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                            <div id="inline-popups-3">
                                <a href="#test-popup-3" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7kaps2.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Cotton</h2>
                                            <!--your project name-->
                                            <p>Nitrogen is necessary for making green leaves, phosphorus is needed for making big flowers and strong roots, and potassium helps the plants fights off disease.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup-3" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="por-img">
                                            <img src="img/a7kaps2.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="por-text">
                                            <h2>Cotton</h2>
                                            <!--your project title-->
                                            <p>Nitrogen is necessary for making green leaves, phosphorus is needed for making big flowers and strong roots, and potassium helps the plants fights off disease. </p>
                                            <div class="por-text-details">
                                               <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Ashok Mangate</p>
                                                        <!--edit here-->
                                                        <p>15/11/2019</p>
                                                        <!--edit here-->
                                                        <p>Nutrien Problem</p>
                                                        <!--edit here-->
                                                        <p>Lohgaon (Chincholi)</p>
                                                        
                                                        <p>9420484760</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                            <div id="inline-popups-4">
                                <a href="#test-popup-4" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7adrak4.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Ginger</h2>
                                            <!--your project name-->
                                            <p>ginger requires large amounts of nitrogen, phosphorus and potassium, collectively called macronutrients. </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup-4" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="por-img">
                                            <img src="project/img/a7adrak4.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="por-text">
                                            <h2>Ginger</h2>
                                            <!--your project title-->
                                            <p>ginger requires large amounts of nitrogen, phosphorus and potassium, collectively called macronutrients. </p>
                                            <div class="por-text-details">
                                               <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Bhagawan Dongarjal</p>
                                                        <!--edit here-->
                                                        <p>15/11/2019</p>
                                                        <!--edit here-->
                                                        <p>Growth Stoped</p>
                                                        <!--edit here-->
                                                        <p>Nidhona</p>
                                                        
                                                        <p>7262005530</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                            <div id="inline-popups-5">
                                <a href="#test-popup-5" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7sugar.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Sugarcane</h2>
                                            <!--your project name-->
                                            <p>Sugar cane must be planted on a grass block, dirt, sand, podzol, coarse dirt or red sand that is directly adjacent to water.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup-5" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="por-img">
                                            <img src="img/a7sugar.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="por-text">
                                            <h2>Sugarcane</h2>
                                            <!--your project title-->
                                            <p>Sugar cane must be planted on a grass block, dirt, sand, podzol, coarse dirt or red sand that is directly adjacent to water.</p>
                                            <div class="por-text-details">
                                               <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Sirj Gorakh</p>
                                                        <!--edit here-->
                                                        <p>11/12/2019</p>
                                                        <!--edit here-->
                                                        <p>Growth Stoped</p>
                                                        <!--edit here-->
                                                        <p>Nanded</p>
                                                        
                                                        <p>8806426047</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                            <div id="inline-popups-6">
                                <a href="#test-popup-6" data-effect="mfp-zoom-out">
                                    <div class="hovereffect">

                                        <img src="img/a7chilli.jpg" alt="portfolio image" class="img-responsive">
                                        <!--edit image-->
                                        <div class="overlay">
                                            <h2>Chilli</h2>
                                            <!--your project name-->
                                            <p>Make sure to start your seeds early, keep them warm, and use season extenders or indoor lights to help them grow faster until the warm weather comes to stay.</p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div id="test-popup-6" class="white-popup mfp-with-anim mfp-hide">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="por-img">
                                            <img src="img/a7chilli.jpg" alt="portfolio image" class="img-responsive">
                                            <!--edit image-->
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="por-text">
                                            <h2>Chilli</h2>
                                            <!--your project title-->
                                            <p>Make sure to start your seeds early, keep them warm, and use season extenders or indoor lights to help them grow faster until the warm weather comes to stay.</p>
                                            <div class="por-text-details">
                                               <div class="row">
                                                    <div class="col-xs-4">
                                                        <p>Farmer: </p>
                                                        <p>Completed:</p>
                                                        <p>Type:</p>
                                                        <p>Village:</p>
                                                        
                                                        <p>Mobile:</p>
                                                    </div>
                                                    <div class="col-xs-offset-1 col-xs-7">
                                                        <p>Gorakh Najire</p>
                                                        <!--edit here-->
                                                        <p>15/11/2019</p>
                                                        <!--edit here-->
                                                        <p>Chemical Problem</p>
                                                        <!--edit here-->
                                                        <p>Shirajgaon</p>
                                                        
                                                        <p>7262005530</p>
                                                        <!--edit here-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <!--end portfolio grid -->

                </div>


            </div>
        </div>


        <!--Portfolio Area Ends-->

       <!--Testimonial Section Starts-->
<section>
        <div id="testimonial" class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center client_say">
                            <h2>What Farmers Say..!!</h2>
                            <hr><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="review-area">
                            <div id="testimonial-carousel" class="owl-carousel owl-theme">
                                <div class="single-testi text-center item">
                                    <div class="testi-img">
                                        
                                        <img src="images/a7kaps2.jpg" alt="">
                                        <!--edit image-->
                                    </div>
                                    <div class="block-quote">
                                        <p>It is good experience with Suraj Rajput. He always try to take care of farmer and there is always ready for Farmers problem. And   I hope upcoming days will be great with  him. </p>
                                        <!--edit here-->
                                        <h2>Ashok Mangate</h2>
                                        <!--edit here-->
                                        <h3>Lohgaon (Chincholi)</h3>
                                        <!--edit here-->
                                    </div>
                                </div>
                                <div class="single-testi text-center item">
                                    <div class="testi-img">
                                        <img src="images/kpkp.jpg" alt="testimonial image">
                                        <!--edit image-->
                                    </div>
                                    <div class="block-quote">
                                        <p>My Experience working with Suraj has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind.</p>
                                        <!--edit here-->
                                        <h2>Gorakh Najire</h2>
                                        <!--edit here-->
                                        <h3>Shirajgaon</h3>
                                        <!--edit here-->
                                    </div>
                                </div>
                                
                                <div class="single-testi text-center item">
                                    <div class="testi-img">
                                        <img src="images/client.jpg" alt="testimonial image">
                                        <!--edit image-->
                                    </div>
                                    <div class="block-quote">
                                        <p>It is good experience with Suraj Rajput has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind. Thanks</p>
                                        <!--edit here-->
                                        <h2>Sachin </h2>
                                        <!--edit here-->
                                        <h3>Shirajgaon</h3>
                                        <!--edit here-->
                                    </div>
                                </div>
                                <div class="single-testi text-center item">
                                    <div class="testi-img">
                                       <img src="images/ppp.jpg" alt="">
                                        <!--edit image-->
                                    </div>
                                    <div class="block-quote">
                                        <p>My Experience working with Suraj has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind.</p>
                                        <!--edit here-->
                                        <h2>Pavan Bansod</h2>
                                        <!--edit here-->
                                        <h3>Mundwadi</h3>
                                        <!--edit here-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Testimonial Section Ends-->

    

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
    <script type="text/javascript" src="js/typed.js"></script>

    <!--//////////////////////////////////watch/////////////////////////-->
    <script type="text/javascript" src="js/flipclock.js"></script>
    <script type="text/javascript">
        var clock = $('.clock').FlipClock({
            clockFace: 'TwelveHourClock'
        });

    </script>

    <!--///////////////////////////////////////////////////////////////////////////-->

    <script>
        var typed = new Typed(".type", {
            strings: [
                "<strong style='color:greenyellow'>शेतकरी माझा </strong><strong style='color:orange'>मित्र... </strong>",
                "<strong style='color: lime'>काही मदत लागल्यास</strong>",
                "<strong style='color:yellow'> फोन करा ...!!!</strong>",
                "<strong style='color:gold'>+91 7262005530</strong>"

            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });

    </script>


    <!--//////////////////////////////////////////////////////////////////////////////-->
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