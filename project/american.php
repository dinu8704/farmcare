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
<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>

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
        <a href="adrak.php" class="btn1"> Adrak</a>
        <a href="tomato.php" class="btn2"> Tomato</a>
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

                        <h1><b>अमेरिकन लष्करी अळी info</b></h1>
                        <hr>
                        <p>
                            This website make for farmer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bgconno"><br>
        <div class="container">
            <div class="row">
                <div class="conno">
                    <div>
                        <h1>Imporatant Knowledge in pdf</h1>
                    </div>
                    <h2>How to Control lashkar ali </h2>
                    <h3>
                        <a href="pdf/gvckid.pdf">Download pdf</a></h3>
                   
                </div>
            </div>
        </div><br>
    </section>
         <section class="about_us_area  row ">
        <div class="container amlastext">
            
            <div class="row"  style="margin-top: : 30px; padding-bottom: 20px;">
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                  <a href="img/american-fall-army-worm.jpg"><img src="img/american-fall-army-worm.jpg" alt="" class="img-responsive" title="अमेरिकन लष्करी अळी" style=" height: 440px;"></a>  
                </div>
                <div class="who_we_area col-md-7 col-sm-6 amlastext">
                   <div class="subtittle amhtag">
                        <h3>प्र. : अमेरिकन लष्करी अळी, ओळख, नियंत्रण?</h3>
                    </div><hr>
                    <ul><li><p>भारतात मका पिकावर अमेरिकन लष्करी अळी (स्पोडोप्टेरा फ्रुजीपर्डा) या बहुपिकांवर उपजिविका करणाऱ्या विदेशी कीडीचा प्रादुर्भाव आढऴून आला आहे. ही कीड जगभर वेगाने पसरण्याची मुख्य कारण म्हणजे या किडीची स्थलांतर करण्याची क्षमता असू शकते. एका वर्षात या किडीचा पतंग १७०० किलोमिटर अंतर पार करू शकतो. भारतात या किडीचा शिरकाव दक्षिण अफ्रिकेतून दक्षिण-पश्चिम मोसमी वाऱ्यामार्फत झाल्याची शक्यता वर्तवण्यात येत आहे. या किडीच्या वाढीसाठी आर्द्रतायुक्त हवामान व तापमान २० ते ३५ अंश सेल्सिअस पोषक असून पावसाळ्यात भारतातील हवामान या किडीची वाढ व प्रसार होण्यासाठी अनुकुल आहे. <br><br>ही कीड प्रामुख्याने मका, ऊस, ज्वारी, कपाशी तसेच भाजीपाला या पिकांवर उपजिविका करते. महाराष्ट्रात सद्यस्थितीत ही कीड ऊस पिकावर आढळून आली आहे. या उपद्रवी किडीचे नियंत्रण करण्यासाठी प्रथम त्याच्या जीवनावस्था समजावून घेणे गरजेचे आहे.<br><br>ही कीड, अंडी-अळी-कोष-पतंग या चार अवस्थांमध्ये आपला जीवनक्रम पूर्ण करते. यातील अळी ही अवस्था ही पिकांसाठी अतिशय हानीकारक असून दरम्यान अळी सहा वाढीच्या अवस्थातून नंतर कोषावस्थेत जाते</p></li></ul>

<!--                    <a href="#" class="button_all">more details</a>-->
                    
                        
                </div>
            </div>
            <div class="row" style="margin-top: : 30px; padding-bottom: 20px;" >
                       <div class="col-md-6 col-sm-6 amlastext">
                   <div class="subtittle amhtag"><hr>
                        <h3>अमेरिकन लष्करी अळी, ओळख</h3>
                    </div><hr>
                           <ul><li><strong>अंडी –</strong><br>अंडी अर्थ गोलाकार असून पानावर समूहात १०० ते २०० अंडी आढळतात. एक मादी सरासरी १५०० ते २००० अंडी देते. अंडी पुंजक्यावर पांढऱ्या रंगाचे केसाळ आवरण असते. नंतर पिवऴसर काळ्या रंगाचे होऊन अळ्या बाहेर येतात. ही अवस्था २ ते ३ दिवसांची असते.</li><br>
                            <li><strong>अळी –</strong><br>ही अवस्था शेतकऱ्यांच्या दृष्टीने अतिमहत्वाची असून ती सर्वसाधारणपणे २० ते ३० दिवसांची असते. दरम्यान अळी वाढीच्या <span style="font-weight: bold">६ अवस्थांमधून</span> जाते. </li></ul>
                           
                           <ol class="olacls"><li>प्रथम अवस्था – प्रथम अवस्थेतील अळी अंड्यातून बाहेर आल्यानंतर कोवळ्या पानांवर उपजीविका करते. ही हिरव्या रंगाची असून डोकं काळ्या रंगाचे असते. या अवस्थेत ही अळी साधारणतः ३ ते ४ दिवस असते. त्यानंतर डोक्याचा रंग गडद केसरी रंगाचा होतो. </li><br>
                           <li>व्दितीय अवस्था – या अवस्थेतील अळी रंगाने साधारणतः तपकिरी रंगाची असते. ही अवस्था १.५ ते २ दिवसांची असते. या अवस्थेतील अळी खोडास छिद्र पाडून आत प्रवेश करते. तसेच पाने बाहेरून आतल्या बाजूस कुरतडून खाते. </li><br>
                           <li>तिसरी अवस्था – या अवस्थेतील अळी रंगाने साधारणतः तपकिरी रंगाची असते. ही अवस्था १ ते २ दिवसांची असते.  अळी खोडास छिद्र पाडून आत प्रवेश करते. तसेच पाने बाहेरून आतल्या बाजूस कुरतडून खाते.  </li><br>
                           <li>चौथी अवस्था – या अवस्थेत अळीचे डोके लालसर तपकिरी रंगाचे असते. तसेच पाठीवर दोन्ही बाजूस सरळ रेषेत गडद ठिपके दिसतात. ही अवस्था देखील १ ते २ दिवसांची असून यामध्ये अळीचे खाण्याचे प्रमाण वाढते.</li><br>
                           <li>पाचवी अवस्था – या अवस्थेत अळीचे डोके लालसर तपकिरी रंगाचे दिसते. तसेच पाठीवर दोन्ही बाजूस सरळ रेषेत गडद ठिपके दिसतात. ही अवस्था २ ते २.५ दिवसांची असून यामध्ये अळी पिकांचा फडशा पाडत असून खादाड म्हणू ओळखली जाते.</li><br>
                           <li>सहावी अवस्था – या अवस्थेत अळीच्या अंगावरील गडद ठिपके स्पष्ट दिसून येतात. तसेच डोक्यावर पांढऱ्या रंगाचा उलटा Y आकार स्पष्ट दिसतो. या अवस्थेत सुरवातील अळी मोठ्या प्रमाणात पिकांचे नुकसान करते. ही अवस्था साधारणतः ३.५ ते ४ दिवसांची असते. त्यानंतर अळी कोषावस्थेत जाण्यासाठी मातीत शिरते व कोषावस्थेत जाते.</li><br></ol> 
                </div>
                <div class="col-md-6 col-sm-6 amlastext">
                    <div>
                   <a href="img/amlashkar.jpg"><img src="img/amlashkar.jpg" title="अमेरिकन लष्करी अळी" class="img-responsive damimag" ></a> 
                    </div>
                    <ul><li><br><br><strong>कोषावस्था –</strong><br>या अळीचा कोष जमिनीत २ ते ८ सेंमी खोलीवर मातीच्या अवेष्टनात गुंडाळलेला आढळतो. जर जमीन कठीण असेल तर कोषाभोवती पानांचे तुकडे व मातीचे आवरण तयार केले जाते. कोष लालसर तपकिरी रंगाचे असून १४ ते  १८ मिमी लांब असतात. ही अवस्था ९ ते ३० दिवसांपर्यंत असू शकते.</li><br><br>
                        <li><strong>पतंग –</strong><br>या किडीचा पतंग हा करड्या रंगाचा असून नर पतंगामध्ये समोरच्या पंखावर राखाडी व तपकिरी रंगाच्या छटा असतात. तसेच टोकाला व मध्य भागावर त्रिकोणी पांढरे ठिपके असतात. पतंगाचे मागील दोन्ही पंख चंदेरी पांढरे असून त्यावर आखूड, गडद रंगाची किनार असते. पतंग निशाचर असून रात्रीच्या वेळी दमट व उष्ण हवामानात हे पतंग जास्त सक्रीय बनतात. <br>मादी पतंग मक्याच्या पोंग्यात कोवळ्या पानांवर वरच्या बाजूने पुंजक्यात अंडी घालते. मादीचा जीवनकाळ सर्वसाधारणपणे १० ते १२ दिवसांचा असतो. एक मादी सरासरी १००० ते २००० अंडी घालते. यावरून किडीच्या नुकसानीची तिव्रता लक्षात येते.</li> <br><br>
                    <li><strong>नुकसानीचा प्रकार –</strong><br>या किडीची अळी आपली उपजीविका पानंवर करते. सुरवातीच्या अवस्था कोवळ्या पानांवर उपजिविका करतात. नंतर पोंग्यात छिद्र पाडून आत शिरतात. व आतील भागावर उपजिविका करतात. दुसऱ्या व तिसऱ्या अवस्थेतील अळी काहीवेळा पानाच्या कडा पासून आतल्या बागापर्यंत पाने खातात. नंतरच्या अवस्था या प्रामुख्याने मका पिकाचा वाढीचा भाग खातात, त्यामुळे तुरा बाहेर येत नाही. काहीवेळा ही कीड कणसांचे केसर खाते. व नंतर कणसातील कोवळा भाग खाऊन टाकते. </li></ul>
                    
                </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-sm-6 amlastext">
            <ul><li>
               <a href="img/makka2.jpg"><img src="img/makka2.jpg" title="अमेरिकन लष्करी अळी" class="img-responsive" style="width: 500px; height: 400px;" ></a> <br>
                <strong>एकात्मिक नियंत्रण –</strong><br>या किडीचा प्रादुर्भाव ओळखून वेळीच अळीच्या वाढीच्या पहिल्या २ ते ३ अवस्थांमध्ये योग्य उपाययोजना केल्यास नियंत्रण करणे सोपे जाते. व नुकसान पातळी देखील कमी ठेवता येते. किडीच्या नियंत्रणासाठी पुढीलप्रमाणे उपाययोजना कराव्या.</li><br>
                <li><strong>भौतिक नियंत्रण –</strong><br>१ – शक्य असल्यास अंडीपुंज गोळा करून नष्ट करावेत.<br> २ – किडीचा प्रादुर्भाव दिसून येताच पोंग्यामध्ये वाळू टाकावी. असे केल्याने अळीला मका पिकाच्या खोडातील भाग खाण्यापासून परावृत्त करता येईल व शेंड्याचे नुकसान होणार नाही.</li><br>
                <li><strong>जैविक नियंत्रण – </strong><br>१ – अंड्यावर उपजिविका करण्याऱ्या ट्रायकोग्रामा या परोपजीवी किटकाची हेक्टरी ५० हजार अंडी दहा दिवसाच्या अंतराने तीन वेळा शेतात सोडावीत.<br> २ – नोमुरिया रिलाय या बुरशीजन्य किटकनाशकाची २ ते ३ ग्रॅम प्रतीलिटर पाणी या प्रमाणात फवारणी करावी. <br>३ – अथवा ई.पी.एन किंवा मेटारायझियम ची ५ ते ७ ग्रॅम प्रतीलिटर पाणी या प्रमाणे किडग्रस्त शेतात फवारणी करावी.</li>
                <br>
                <li><strong>रासानिक नियंत्रण – </strong><br>१ – अंड्यावर उपजिविका करण्याऱ्या ट्रायकोग्रामा या परोपजीवी किटकाची हेक्टरी ५० हजार अंडी दहा दिवसाच्या अंतराने तीन वेळा शेतात सोडावीत.<br> २ – नोमुरिया रिलाय या बुरशीजन्य किटकनाशकाची २ ते ३ ग्रॅम प्रतीलिटर पाणी या प्रमाणात फवारणी करावी. <br>३ – अथवा ई.पी.एन किंवा मेटारायझियम ची ५ ते ७ ग्रॅम प्रतीलिटर पाणी या प्रमाणे किडग्रस्त शेतात फवारणी करावी.</li>
                </ul>
               </div> <br>
                <div class="col-md-6 col-sm-6 amlastext">
                    <br> <br><ul>
                <li><strong>जैविक नियंत्रण – </strong><br>१ –अळीच्या वाढीच्या सुरवातीच्या काळात (१ ते ३ अवस्था) निमअर्क १५०० पीपीएम किंवा निंबोळी अर्क ५% यांची ५ मिली प्रतीलिटर पाणी या प्रमाणात फवारणी करावी. <br>२ – अथवा थायमेथोक्झाम १२.६% + लॅम्डा सायहेलोथ्रीन ९.५% झेड सी या मिश्र कीटकनाशकाची ०.५ मिली प्रतीलिटर पाणी या  प्रमाणात फवारणी करावी. <br>३ – प्रादुर्भाव मोठ्या प्रमाणात असल्यास इमामेक्टीन बेन्झोएट ५ एम.जी या कीटकनाशकाची ०.४ ग्रॅम प्रती लिटर पाणी या प्रमाणात फवारणी करावी. <br>४ –मधुमका असल्यास स्पिनोसॅड ४५ एम.सी कीटकनाशकाची ०.३ मिली प्रतीलिटर पाणी या प्रमाणात फवारणी करावी. <br>५ – अथवा भाताचा भुसा १० किलो व गुळ २ किलो पाण्यात एकत्र भिजत ठेवावे व दुसऱ्या दिवशी त्यात १०० ग्रॅम थायोडीकार्ब ७५ डब्लू.पी. मिसळून लहान गोळ्या तयार कराव्यात व अशाप्रकारे तयार गोळ्या मक्याच्या पोंग्यात टाकाव्यात. </li><br><br>
                   <a href="img/makka3.jpg"> <img src="img/makka3.jpg" title="अमेरिकन लष्करी अळी" class="img-responsive" style="width: 500px; height: 400px;" ></a><br>    <br>
                        
                <li><strong>स्थानिक प्रयोगांचे निष्कर्ष –</strong><br>या किडीचा वाढता प्रादुर्भाव लक्षात घेऊन शेतकरी हितार्थ अ.भा.स.का. मका सुधार प्रकल्प, कोल्हापूर येथे दोन चाचणी प्रयोग घेण्यात आले. त्यांच्या निष्कर्षानुसार इमामेक्टीन बेन्झोएट ५% एसजी हे कीटकनाशक ४ ग्रॅम १० लिटर पाण्यातून फवारल्यानंतर या किडीचा १०० % बंदोबस्त झाल्याचे दिसून आले. तसेच क्लोरांट्रानिलीप्रोल १८.५% एस.सी. हे कीडनाशक ३ मिली १० लिटर पाण्यातून फवारल्यानंतर या किडीचा ९० ते ९५ टक्के बंदोबस्त झाल्याचे दिसून आले आहे.</li>
                                  <a href="pdf/Fall%20Armyworm%20BVB%202019.pdf" class="button_all">More Read</a></ul>
            </div></div>
        </div>
    </section><br>
    
    <section class="mkkbgimg">
        <div class="container">
            <div class="row"  style="margin-top: : 30px; padding-bottom: 20px;">
                <div class="col-md-6 col-sm-6 "> 
                   <div class="subtittle pdfamdet"><hr>
                        <h3>American lashakar ali solution More detail in <strong style="color: darkorange;">PDF</strong> </h3>
                    </div><hr> <p class="pamd"> Your not satisfied our information then etrxa more details provide for farmer.<br></p>
                    <div class="cta-div4">
                        <a href="pdf/gvckid.pdf" class="btn4"> More</a>
                    </div>
                </div>
                
                
                <div class="col-md-6 col-sm-6 "> 
                    <div class="subtittle pdfamdet"><hr>
                        <h3>American lashakar ali solution More detail in <strong style="color: darkorange;">mp3</strong></h3>
                    </div><hr>
                    <p class="pamd"> Your not satisfied our information then etrxa more details provide for farmer.<br></p>
                    <div class="cta-div4">
                        <a href="aud/AUD-20190705-WA0006.m4a" class="btn4"> More</a>
                    </div>
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
