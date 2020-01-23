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

    <!--- jQuery library -->

    <!-- Latest compiled JavaScript -->

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
        <a href="cotton.php" class="btn1"> Kapas</a>
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
    <br><br><br><br>
   
    <section class="service-area aboutservr">
        <div class="container">
            
        </div>
    </section>
    
   

    <section class="about_us_area row amtopmar">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b>Technology</b></h1>
                        <hr>
                        <p>
                            This website make for farmer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    

    <section class="flpetalf">
        <div class="container">
            <div class="row">
                <br>
                <div id="fpetald1"><strong>Agriculture Technology</strong></div><br>
                <hr>
                <div class="col-md-3 col-sm-6 petaldt">
                   <strong>Water pump used in agriculture</strong><br>
                    <a href="img/cover.png" data-lightbox="mygallery" data-title="Petal Flower"> <img src="img/cover.png" alt="" class="img-responsive" title="Petal Flower"></a><br>
                   
                    <i class="fa fa-hand-o-right icohand"></i> Irrigation is an artificial application of water to plant roots with the purpose of assisting the growth of agricultural crops. Fertilizer and chemicals can be added to an irrigation system<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  Pumps that increase the pressure within the distribution system or raise water into an elevated storage tank are called booster pumps. Well pumps lift water from underground and discharge it directly into a distribution system.<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  We live in a world where technology is at the heart of our everyday lives. Similar to the transformations in other sectors, technology is sure to shape farming practices. Technology can transform Indian agriculture by addressing challenges related to quality, quantity, distribution and storage. <br><br><i class="fa fa-hand-o-right icohand"></i> GSM based Pump Controllers (Mobile Pump Starter) are specifically designed to operate remotely located submersible pumps and motors. It is beneficial to farmers, agricultural sectors and industries where wireless pump and motor control required. Our GSM based mobile pump controllers are manufactured with advanced micro controller technology under high quality process.<br><br>
                        <hr>
                </div>
                <div class="">
                    <div class="col-md-3 col-sm-6 petaldt ">
                        <strong>Cell phone motor starter</strong>
                        <a href="img/motor.png" data-lightbox="mygallery" data-title="Petal Flower"> <img src="img/motor.png" alt="" class="img-responsive" title="Petal Flower"></a><br><br><i class="fa fa-hand-o-right icohand"></i>This product helps to switch on and off the pump set through mobile phone This mobile operated GSM motor controller protects the pump set from dry run, phase failure and low voltage. Farmer will receive SMS from mobile starter for electricity resume and electricity fail. This GSM on off motor controller keep on sending alert SMS to farmer. It will confirm through SMS if anybody switches on or off pump set manually.<br><br><i class="fa fa-hand-o-right icohand"></i>GSM/SMS based motor starters are also known as mobile based motor starters and find applications where water pumps are installed far away from the residential colonies. So the opeartor can switch ON the pump motor by sending an SMS from a registered mobile phone. Same way the pump motor can be switched OFF by sending another SMS from the registered mobile phone. So a GSM/SMS based motor starter is also well known as mobile based motor starter. Each time we send an SMS from our mobile phone to GSM/SMS motor starter controller we get a reply status whether the pump motor is ON or OFF. GSM or SMS or Mobile based motor starter controllers are widely being used now a days.<br><br>
                        <hr>

                    </div>

                    <div class="col-md-3 col-sm-6 petaldt">
                        <strong>Its Features are:</strong><br> <br><br>
                        <i class="fa fa-hand-o-right icohand"></i> 01.Motor ON/OFF control through message,missed call and IVRS system<br><br>
                        <i class="fa fa-hand-o-right icohand"></i> 02.IVRS voice available in all regional languages<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  03.IVRS to tell all voltage and amps rating also<br><br>
                      <i class="fa fa-hand-o-right icohand"></i>   04.Motor status check through message and call<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  05.Motor ON/OFF indication<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  06.Motor running history<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  07.Power recover indication<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  08.Power Failure indication<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  09.Motor ON/OFF control timer<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  10.Star delta timer<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  11.Auto starter<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  12.Preventer<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  13.Volt Meter<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  14.Amps Meter<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  15.Voltage via SMS<br><br>
                      <i class="fa fa-hand-o-right icohand"></i>   16.Amps Via SMS<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  17.Power Of Message<br><br>
                      <i class="fa fa-hand-o-right icohand"></i>   18.Voice Control<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  19.Dry Run Preventer<br><br>
                      <i class="fa fa-hand-o-right icohand"></i>  20.Cyclic Timer<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  21.Real Time Clock Timer<br><br>
                       <i class="fa fa-hand-o-right icohand"></i>  22.Internal Battery<br><br>
                      <br><br>
                        <hr>
                    </div>
                    <div class="col-md-3 col-sm-6 petaldt">
                        <strong>Motor start by using mobile</strong><br><i class="fa fa-hand-o-right icohand"></i> This product helps to switch on and off the pump set through mobile phone This mobile operated GSM motor controller protects the pump set from dry run, phase failure and low voltage. Farmer will receive SMS from mobile starter for electricity resume and electricity fail. This GSM on off motor controller keep on sending alert SMS to farmer. It will confirm through SMS if anybody switches on or off pump set manually.
                        <br><br>
                        <strong>Control Settings:</strong><br>
                        <i class="fa fa-hand-o-right icohand"></i> PUMP Current Setting is easy, accurate, auto setting type, with digital display.<br><br>
                           <i class="fa fa-hand-o-right icohand"></i> Pump current setting can be done through SMS, Mobile phone & on site.<br><br>
                            <i class="fa fa-hand-o-right icohand"></i>Overload is site selectable from 20 to 50 % of set current.<br><br>
                            <i class="fa fa-hand-o-right icohand"></i>Dry run setting from 75 to 95 %.<br><br>
                            <i class="fa fa-hand-o-right icohand"></i>Dry run bypass facility by SMS / PHONE.<br><br>
                            
                            <strong>Protections</strong><br>
                       
                           <i class="fa fa-hand-o-right icohand"></i> Phase failure / loss from the supply side.<br><br>
                           <i class="fa fa-hand-o-right icohand"></i> Phase reversal / wrong phase sequence from the supply side.<br><br>
                           <i class="fa fa-hand-o-right icohand"></i> Phase to phase voltage unbalance.<br><br>
                           <i class="fa fa-hand-o-right icohand"></i> Electronic overload ( site selectable).<br><br>
                           <i class="fa fa-hand-o-right icohand"></i> Remote sensing dry run / No load current ( site selectable).<br><br>
                        
                            
                        <hr>
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
                        <h1>Imporatant Knowledge in pdf</h1>
                    </div>
                    <h2>About Mobile Pump Starter </h2>
                   <label><button class="button1"><a href="pdf/Influx%20Mobile%20Pump%20Starter%20(English).pdf"><span>More Details</span></a></button></label>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="margin-top: 50px; margin-bottom: 50px; margin-left: 13px;">
        <div class="humicbg container">
            <div class="row">
                <div style="text-align: center;">
                    <strong>
                        <h2>Solar Powered Agricultural Tools in India</h2>
                    </strong><br>

                    <h4 id="humpar">Solar Energy</h4><br>
                    <p class="humipara"> Solar energy is an alternative renewable energy that is increasingly becoming mainstream due to cost feasibility and higher efficiency. Apart from producing power for offices and households, solar energy can be used to power dryers, cookers, solar stills, lighting, refrigeration and even air conditioning. There is increasing usage of solar energy for agricultural purposes, which consumes considerable amount of power in India.<br><br>
                        Solar power technology would be a reasonable choice for agricultural tools. Solar Photovoltaic cells (SPV) directly convert the light energy from the sun into electricity. Concentrated solar power (CSP) systems use an indirect method for the conversion process. Other than SPVs and CSPs, there are other new techniques such as dye-sensitized solar cells, luminescent solar concentrators, bio-hybrid solar cells, photon enhanced thermionic emission systems, etc. All these tools can be produced in small volumes; they are portable which makes it easier to use them in agriculture.</p>
                    <hr><br><br>
                    <div class="imcenttec"><a href="img/solar2.jpg" data-lightbox="mygallery" data-title="solar pumping"><img src="img/solar2.jpg" alt="" class="img-responsive"> </a></div>
                    <br>
                    <p class="humipara"><strong id="humpar">Solar Farming </strong><br>Solar farming uses power generated from solar energy to operate agricultural or farming tools. It is simple, cost effective, reliable and long lasting. Most common agricultural tools such as tractors, watering systems, rotator, roller, planter, sprayers, broadcast seeder etc. work on battery power and fuel oil. In solar farming, the battery power is replaced with solar power, so that the usage of electricity from grid-power and non-renewable sources can be reduced. Here is a list of agricultural tools that are currently being operated in India using solar energy:</p>
                    <hr><br><br>
                    <div class="imcenttec"><a href="img/solar1.jpg" data-lightbox="mygallery" data-title="solar pumping"><img src="img/solar1.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">1. Solar Water Pumping System</strong><br>
                    <p class="humipara">A solar photovoltaic (SPV) water pumping system consists of solar panels, an on-off switch, a control &amp; tracking mechanism, and a motor pump. This system essentially uses SPV cells for converting solar energy into electric current. A SPV cell array capacity can range around 200 watts to 5KWp (kilowatt-peak) based on the needs of different water sources such as bore-wells, open wells, reservoirs, streams, etc.<br><br>

                        Parameters such as the daily water requirement, water source and geographic location must be kept in mind before selecting a suitable solar pump. Although its operation is similar to other pump systems, the duration and quantity of pumping water might vary, depending on the solar radiation intensity, location, season, etc. A system with 1,000Wp capacity can irrigate about two acres of land, pumping approximately 40,000 liters of water per day. A solar pump system with 5HP capacity costs around INR439,000. Some states in India offer subsidies of up to 80% to farmers for encouraging the use of solar energy. Several manufacturers such as Kirloskar, Schneider Electric, Tata Solar, etc. offer a wide range of solar pumping systems in India.<br><br>

                        Solar water pumping requires less power and is cost-effective because they do away with the need for expensive fuel like diesel to operate. A solar pumping system with 1,000Wp capacity can give savings of up to INR45,000 per year as compared to a diesel-operated pump. The system’s environmental impact is nearly zero since there is no internal combustion engine as found in regular motors.</p>
                    <hr><br><br>


                   <div class="imcenttec"><a href="img/solar4.jpg" data-lightbox="mygallery" data-title="solar pumping"><img src="img/solar4.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">2. Solar Dryer</strong><br>
                    <p class="humipara">Solar dehydrators or dryers are used in farms to dry crops before sending them to the market. These dryers commonly use passive solar panels for generating energy. A large-scale solar dryer usually consists of a shed, drying racks and a solar collector (panels). The crops are dried when hot air is circulated through the shed by natural convection or using a fan.br><br>
                        Domestic and compact solar dryers can handle farm produce like vegetables, fruits, spices, etc. Solar cabinet dryers can be used for drying perishable, semi-perishable and wet processed food material (such as potato chips, leafy vegetables) without contamination. Forced circulation solar dryers use an array of solar collectors connected together to maximize airflow. This type of dryers have components such as solar air heaters, an electric blower, connecting ducts, a drying chamber and control systems for air temperature and flow rate. These dryers are used to dehydrate high value products.<br><br>
                        Natural convection solar tunnel dryers are another type that can be used for drying bulk material with high moisture content. These dryers have exhaust fans at the upper end of the tunnel to drive away humid air. Adequate insulation is ensured on the floor and upper sides of the dryer to prevent heat loss.<br><br>
                        Dryers are sold in India by various manufacturers within a cost range of INR15,000-20,000. Subsidies are also available for dryers just like any other solar installations.</p>
                    <hr><br><br>
                    
                   <div class="imcenttec"><a href="img/solar5.jpg" data-lightbox="mygallery" data-title="solar "><img src="img/solar5.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">3. Solar Greenhouse</strong><br>
                    <p class="humipara">Solar Greenhouses make optimum use of solar energy for providing heating and insulation. Specialized solar greenhouses can collect and store energy for night-time use or during cloudy weather. SPV cells can be used to collect solar energy for additional insulation in colder climates. Another solution is to use water tanks heated by solar power for circulating heat, which maintains the temperature at a level suitable to grow vegetables throughout the year, enabling vegetable production during off-seasons. Such greenhouses using passive solar technology have been built for costs starting at INR30,000 in Ladakh.<br><br>In warmer climates, solar greenhouses can be used to create a cooler zone required for certain crops. Cooling pumps can be powered by SPV cells placed either on top or along the sides of the greenhouse. Greenhouses also require proper ventilation with exhaust mechanisms to reduce humidity and get fresh air inside. Solar energy can be used for such ventilation systems. Simple vents using natural convection and heat from the sun is one option and another is to have a solar-powered exhaust fan. </p>
                    <hr><br><br>
                    <div class="imcenttec"><a href="img/solar6.jpg" data-lightbox="mygallery" data-title="solar "><img src="img/solar6.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">4. Solar Electric Fence</strong><br>
                    <p class="humipara">Solar powered electric fences are highly effective and dependable for large fields and cattle farms. These fences typically consist of a SPV unit as a source of power, an energizer that produces high voltage impulses (8kv) emitted in intervals of 0.9 to 1.2 seconds, along with a 12V battery. The impulse carries 10 mA of current and delivers a shock lasting for a fraction of a second. The batteries can be recharged using readymade solar fence chargers. Battery operated solar fences may cost from INR45,000-50,000 per acre. Cheaper versions costing as low as INR10,000-25,000 per acre have been developed using locally made materials in some places in India.</p>
                    <hr><br><br>
                    <div class="imcenttec"><a href="img/solar7.jpg" data-lightbox="mygallery" data-title="solar "><img src="img/solar7.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">5. Solar Milking Machine</strong><br>
                    <p class="humipara">Milking machines for cows operated on solar power instead of diesel or electric power are another innovation. A SPV module connected to batteries powers the machine. A mobile milking machine along with solar panels and battery backup is available for INR70,000. Some states like Karnataka provide subsidies of up to 50% for these machines. There are manual milking machines that can be either hand operated or connected to solar power as well.</p>
                    <hr><br><br>
                     <div class="imcenttec"><a href="img/solar8.jpg" data-lightbox="mygallery" data-title="solar "><img src="img/solar8.jpg" alt="" class="img-responsive" style="width:50%;"> </a></div>
                    <br>
                    <strong id="humpar">6. Solar Mowers &amp; Tractors</strong><br>
                    <p class="humipara">Milking machines for cows operated on solar power instead of diesel or electric power are another innovation. A SPV module connected to batteries powers the machine. A mobile milking machine along with solar panels and battery backup is available for INR70,000. Some states like Karnataka provide subsidies of up to 50% for these machines. There are manual milking machines that can be either hand operated or connected to solar power as well.</p>
                    <hr><br><br>
                     <strong id="humpar">7. Advantages of solar powered farming</strong><br>
                    <p class="humipara">So solar farming is not only environmentally friendly, but also reliable and cost effective. Maintenance cost is low, since there will be fewer moving parts and lesser impact of oil corrosion. The Indian government is also helping farmers by providing subsidies and loans to acquire solar powered agricultural tools. Agricultural experts are being encouraged to guide farmers in operating them. The time has come to switch to solar power on Indian farms!</p>
                    <hr><br><br>


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


</body>

</html>