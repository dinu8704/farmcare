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

                        <h1><b>Ginger info</b></h1>
                        <hr>
                        <p>
                            This website make for farmer
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row about_row">
                <div class="col-md-6 col-sm-6 ustaad2">
                    <img src="img/adrak3.jpg" class="img-responsive " alt="" title="Adrak" style=" height: 400px;">
                </div>
                <div class="who_we_area col-md-6 col-sm-6 ">
                    <div class="subtittle">
                        <h3>प्र. :आद्रक, लागवड, रोग नियंत्रण, सुधारीत जाती?</h3>
                    </div><hr>
                    <p style="font-size: 16px;">महाराष्ट्रातही <strong>आले (आद्रक)</strong> एका पैसे मिळवून देणारे पीक म्हणून शेतकरी त्याकडे आकर्षित होऊ लागले आहेत. महाराष्ट्रा प्रामुख्याने सातारा, सांगली, रायगड, ठाणे, औरंगाबाद, लातूर, नांदेड या जिल्ह्यामध्ये आल्याची लागवड मोठ्या प्रमाणावर केली जाते. आल्यापासून मिळणाऱ्या आर्थिक मोबदल्याचा विचार करता खानदेश व विदर्भातही या पिकाखालील क्षेत्रात वाढ होताना दिसून येत आहे<br><br><strong>आयुर्वेदिक गुणधर्म : </strong> आल्याचे आयुर्वेदातील स्थान महत्त्वाचे आहे. आल्याचा वापर मुख्यत: सर्दी, खोकल्यावरील औषधे तसेच पेय बनविण्यासाठी, जैविक किटकनाशकांमध्ये मोठ्या प्रमाणावर केला जातो. त्यामुळे आल्याचे महत्त्व दिवसेंदिवास वाढतच आहे <br>
<!--                        <a href="adrak.html">Read more</a>-->
                    </p>

<!--                    <a href="american.html" class="button_all">more details</a>-->
                </div>  
                </div>
                <div class="row nvadrk">
                <div class="col-md-6 col-sm-6 ">
                   <p> <br><strong>हवामान :</strong><br> आल्यास उष्ण व दमट हवामान मानवते, पण जेथे ओलीताची सोय आहे अशा उष्ण आणि कोरड्या हवामानातही आल्याची लागवड यशस्वी करता येते. समुद्रसपाटीपासून ते १५०० मीटर उंचीपर्यनच्या प्रदेशात आले चांगले येऊ शकते.<br><br>तापमानाचा विचार करता आले लागवडीच्या कालावधीतील एप्रिल - मे ३० डी. ते ३५ डी. से. तापमान फुटवे फुटून उगवण चांगली होण्यासाठी उत्तम असते. आल्याच्या वाढीसाठी सरासरी २० डी. ते ३० डी. से. तापमानाची आवश्यकाटा असते. <br>थंडीच्या दिवसातील कोरडे व थंड हवामान जमिनीतील कंद उत्तम प्रकारे पोसण्यासाठी अनुकूल असते. या पिकास लागवडीपासून काढणीपर्यंत सरासरी १५० ते ३८० सें. मी. पाऊस पुरेसा ठरतो. <br>जास्त पावसाच्या प्रदेशात विशेषत: कोकणात हे पीक पावसाच्या पाण्यावरही घेतले जाते. परंतु जमिनीमध्ये पाणी साठून राहिल्यास याचे कंद कुजण्यास सुरुवात होते, म्हणून जास्त पावसाच्या प्रदेशात पाण्याचा उत्तम निचरा होणे आवश्यक आहे. <br>साधारणत: २५% सावलीच्या ठिकाणी आल्याचे पीक उत्तम येते. परंतु आल्याच्या पिकास दिवसाचा सुर्यप्रकाश जास्त मिळाल्यास आल्याचा सुवास कमी होतो, असे प्रयोगांती आढळून आले आहे.<br><br>
                   <strong>जमीन :</strong> <br>आल्यास चांगली निचरा होणारी मध्यम प्रतीची भुसभुशीत, कसदार जमीन मानवते. नदीकाठची गाळाची जमीनदेखील कंद वाढण्याच्या दृष्टीने योग्य आहे. हलक्या जमिनीत भरपूर शेणखत व कंपोस्ट खत घातल्यास तसेच हिरवळीच्या खताचे पीक घेतल्यास हे पीक चांगले येते. आले लागवडीसाठी जमिनीची खोली कमीत - कमी ३० सें.मी. असावी.<br> या पिकाच्या लागवडीसाठी आम्लधर्मी, खारवट, चोपण जमिनी शक्यतो टाळाव्यात. कोकणातील जांभ्या खडकापासून तयार झालेल्या जमिनीत तसेच तांबड्या पोयाट्याच्या जमिनीत या पिकाचे चांगले उत्पादन मिळते. <br>या पिकासाठी किंचीत आम्लयुक्त सामू असलेली जमिन (सामू ६.५ ते ७) मानवते. कंदवर्गीय पीक असल्यामुळे कंदाची चांगली वाढ होण्यासाठी जमिनीत हवा खेळती राहणे गरजेचे असते. चुनखडक असलेला जमिनीत पीक चांगले येते, परंतु त्यावर पिवळसर छटा कायम दिसते. जमीन निवडताना त्यामध्ये लव्हाळा, हराळी, कुंदा इत्यादींसारखा बहुवार्षिक तणांचा प्रादुर्भाव नसावा.
                   </p> <hr>
                </div>
                <div class="col-md-6 col-sm-6 utaad">
                    <strong>महाराष्ट्र :</strong><br><br> रिओ - डी - जानिरिओ, माहीम, स्थानिक, या नावाने ओळखले जाणारे आले घेण्यात येते. तर काही जाती बाहेरच्या देशातून आयात केल्या आहेत. त्यामध्ये रिओडी जानरो, चायना, जमेका या जातींचा समावेश होतो. यापैकी प्रमुख जातींची वैशिष्ट्ये खालीलप्रमाणे.<br>
                    <ul>                    
                        <li> १ ) वरदा : ही जात भारतीय मसाला पिकाचे संशोधन केंद्र, कालिकत येथून १९९६ साली प्रसारित केली आहे. ही जात तयार होण्यास २०० दिवस लागतात.या जाती प्रति हेक्टरी २२.३ टन उत्पादन मिळते. या जातीमध्ये तंतूचे प्रमाण ३.२९ ते ४.५० % आढळते. या जातीस सरासरी ९ ते १० फुटवे येतात. ही जात रोग व किडीस सहनशील आहे. सुंठेचे प्रमाण या जातीमध्ये २०.०७% आढळते.</li><br>
                    
                   <li> २) महिमा : ही जात सुध्दा कालिकत येथील संशोधन केंद्रातून २००१ साली विकसित करून, प्रसारीत केली आहे. याही जातीला तयार होण्यास २०० दिवस लागतात. या जातीपासून सरासरी प्रती हेक्टरी २३.२ टन उत्पादन मिळते. या जातीमध्ये तंतुचे प्रमाण ३.२६ % असते.
                       या जातीस सरासरी १२ ते १३ फुटवे येतात. हि जात सुत्रकृमीस प्रतिकारक आहे. सुंठेचे प्रमाण १९ % आढळते.</li><br>
                    
                   <li> ३) रीजाथा : ही जात मसाला पिकाचे संशोधन केंद्र, कालिकत येथून २००१ साली प्रसारीत केली आहे. या जातीमध्ये तंतुचे प्रमाण ४% असून सुगंधी द्रव्याचे प्रमाण सर्वात जास्त २.३६% आहे.
                       ही जात तयार होण्यास २०० दिवस लागतात, तर सरासरी उत्पन्न प्रति हेक्टरी २२.४ टन मिळते. या जातीस ८ ते ९ फुटवे येतात. या जातीमध्ये सुंठेचे प्रमाण २३% आहे.</li><br>
                    
                    <li>४) माहीम : ही जात महाराष्ट्रामध्ये प्रचलित असून बहुतेक सर्व जिल्ह्यामध्ये ही जात लागवडीस योग्य आहे. ही जात मध्यम उंचीची, सरळ वाढणारी आहे. या जातीस ६ ते १२ फुटवे येतात . ही जात तयार होण्यास २१० दिवस लागतात. तर हेक्टरी सरासरी उत्पादन २० टन मिळते. या जातीमध्ये सुंठेचे प्रमाण १८.७% आहे. <hr></li></ul>

<!--                    <a href="american.html" class="button_all">more details</a>-->
                </div>  
                </div>
        </div>
        
        
        <br><br>
    </section>
    <section>
        <div class="container">
            <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a1.jpg"><img src="img/a1.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a3.jpg"><img src="img/a3.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a4.jpg"><img src="img/a4.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
             <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a5.jpg"><img src="img/a5.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a6.jpg"><img src="img/a6.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a7.jpg"><img src="img/a7.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
            <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a8.jpg"><img src="img/a8.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a9.jpg"><img src="img/a9.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a91.jpg"><img src="img/a91.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
             <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a92.jpg"><img src="img/a92.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a93.jpg"><img src="img/a93.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a94.jpg"><img src="img/a94.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
             <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a95.jpg"><img src="img/a95.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a96.jpg"><img src="img/a96.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a97.jpg"><img src="img/a97.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
             <div class="row ">
               <div class="col-md-4 col-sm-6 ">
                   <a href="img/a98.jpg"><img src="img/a98.jpg" class="img-responsive" ></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a99.jpg"><img src="img/a99.jpg" class="img-responsive"></a>
               </div>
               <div class="col-md-4 col-sm-6">
                   <a href="img/a999.jpg"><img src="img/a999.jpg" class="img-responsive"></a>
               </div>
            </div><hr>
             <div class="row ">
               <div class="col-sm-6 ">
                   <a href="img/a999b.jpg"><img src="img/a999b.jpg" class="img-responsive" style="height: 400px; width: 350px;" ></a>
               </div>
               <div class="col-sm-6">
                   <a href="img/a999bc.jpg"><img src="img/a999bc.jpg" class="img-responsive" style="height: 450px; width: 350px;"></a>
               </div>
            </div><hr>
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


</body>

</html>
