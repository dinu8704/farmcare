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



    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">



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
        <a href="index.php" class="btn1"> home</a>
        <a href="information.php" class="btn2"> info</a>
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
    <section class="service-area ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b><span style="color: red;">टोमॅटोवरील किड, रोग व त्यावरील उपाय</span> Information</b></h1>
                        <hr>
                        <p>
                            This website make for farmer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about_us_area  row ">
        <div class="container amlastext">

            <div class="row" style="margin-top: : 30px; padding-bottom: 20px;">
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                    <a href="img/tamato1.png" data-lightbox="mygallery" data-title="टोमॅटोवरील किड, रोग व त्यावरील उपाय"><img src="img/tamato1.png" alt="" class="img-responsive" title="cotton" style=" height: 400px;"></a>
                </div>
                <div class="who_we_area col-md-7 col-sm-6 amlastext">
                    <div class="subtittle amhtag">
                        <h3>प्र. :टोमॅटोवरील किड, रोग व त्यावरील उपाय?</h3>
                    </div>
                    <hr>
                    <p><strong>संकरित टोमॅटोचे लाभ व तोटे :</strong><br> संकरित बियाणाचा शोध मेक्सिकन शास्त्रज्ञ नोबेल विजेते डॉ. नॉर्मन बोलॉग यांनी १९६० च्या सुमारास तिसऱ्या जगाला दिला. त्यांनी अनेकविध अधिक उत्पन्न देणाऱ्या बुटक्या जातीचा शोध लावला. भूकबळी ठरू नयेत म्हणून केवळ उदरभरणासाठी म्हणून या जाती ठीक आहेत. संकरित जातीचे ते धान्यपीक असो, तेलबिया असोत, फळझाडे असोत, मसाला पिके व टोमॅटो - वांग्यासारखे फळझाड असो. यातील मादी वाण अधिक उत्पादन देणारा परंतु रोग व किडीस झटकन बळी पडणारा डावा (निकृष्ट ) असतो. नर वाण कमी उत्पन्न देणारा पण जंगली जातीचा असल्याने रोग व किडीस सहसा बळी पडता नाही. म्हणजे त्यात रोगविरूद्ध झगडण्याची प्रतिकार शक्ती जास्त असते. दोन्ही वाणातील चांगल्या गुणांचा संकर करून नवीन जाती निर्माण होतात. मात्र यासाठी अथक संशोधन, चिकाटी, दिर्धकाळ परिश्रमाची गरज असते. अशी एखादी सर्वगुणसंपन्न जात निर्माण करायला ५० वर्षापर्यंतचा काळही अपूर पडतो. एवढे प्रयत्न करतांना अचानकही चांगले शोध लागल्याचे आढळून आले आहे.
                        <!--                        <a href="cotton.html">Read more</a>-->
                    </p>

                </div>
            </div>
            <hr style="color: black;">

            <div class="row" style="margin-top: : 30px; padding-bottom: 20px;">
                <div class="col-md-6 col-sm-6 amlastext">
                    <div class="subtittle amhtag">

                        <h3>टोमॅटोवरील किडी:</h3>
                    </div>
                    <hr>
                    <ul>
                        <li><strong>1. मावा,तुडतुडे व फुलकिडे:</strong><br>
                            <div>
                                <a href="img/tamato4.jpg" data-lightbox="mygallery" data-title="मावा,तुडतुडे व फुलकिडे"><img src="img/tamato4.jpg" title="मावा,तुडतुडे व फुलकिडे" class="img-responsive "></a>
                            </div>

                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या किडी झाडातील अन्नरस शोषतात परिणामी पान पिवळे पडते.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    पुढे या किडी विषाणूजन्य रोगाचा प्रसार करतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    विषाणूजन्य रोगांवर कुठलाही उपाय उपलब्ध नाही.</li>
                            </ol>
                        </li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    टोमॅटो रोपांची लागवड करण्यापूर्वी, रोपांची मुळे इमिडाक्‍लोप्रिड किंवा थायामेथोक्‍झाम 5 मिली प्रति 10 लिटर या द्रावणात अर्धा तास बुडवून ठेवावीत. त्यानंतर लागवड करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या किडीचा प्रादुर्भाव प्रथम पानांवर दिसताच, निंबोळी अर्क पाच टक्के किंवा निंबोळी तेल 20 मिली प्रति 10 लिटर पाण्यातून फवारणी करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    प्रादुर्भावग्रस्त पाने, फळे ही किडीच्या अवस्थांसह गोळा करून नष्ट करावीत.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    कामगंध सापळे 5 हेक्‍टरी शेतात लावावेत. काळ्या रंगाचे चिकट सापळे, वॉटर ट्रॅप, प्रकाश सापळे तसेच चिकट प्लॅस्टिक फिल्मचा वापर करावा. त्यामुळे या किडीचे सर्वेक्षण व नियंत्रणासाठी मदत होते.</li>
                            </ol>
                        </li><br>
                        <li><strong>2. फळे पोखरणारी अळी:</strong><br>
                            <div>
                                <a href="img/tamato5.jpg" data-lightbox="mygallery" data-title=" फळे पोखरणारी अळ "><img src="img/tamato5.jpg" title="फळे पोखरणारी अळ" class="img-responsive "></a>
                            </div>
                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    मादी पतंग पानावर, फुलांवर अंडी घालतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    अंड्यातून बाहेर पडल्यानंतर अळी कोवळी पाने खाऊन वाढते.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    नंतर फळे आल्यावर फळे खाऊ लागते.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    अळी फळावर छिद्रे पाडून पुढील अर्धे शरीर फळांत ठेवते.त्यमुळे फळे सडतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    जानेवारी ते मे दरम्यान या अळीचा प्रादुर्भाव जास्त असतो.</li>
                            </ol>
                        </li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    बॅसिलस थुरीन्जिएन्सीस प्रतिहेक्‍टरी 25 किलो किंवा ऍझाडीरेक्‍टीन (1 टक्के) 25 मिलि किंवा प्लुबेडिंयामाईड 2 मिलि.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    डायमेथोएट (30 टक्के प्रवाही) 16 मिलि, किंवा इमिडाक्‍लोप्रीड 3 मिलि, किंवा मिथाईल डेमेटॉन (25 टक्के प्रवाही) 15 मिलि.</li><br>
                            </ol>
                        </li><br>

                        <li><strong>3. नागअळी:</strong><br>
                            <div>
                                <a href="img/tamato6.jpg" data-lightbox="mygallery" data-title=" नागअळी"><img src="img/tamato6.jpg" title="नागअळी" class="img-responsive "></a>
                            </div>
                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    अळी रंगाने पिवळी असते. माशी अगदी लहान असून सहजासहजी दृष्टीस पडत नाही.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    परंतु अळीमुळे प्रादुर्भाव झालेली पाने मोठ्या प्रमाणात दिसू लागतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    अळी पानाच्या वरील पापुद्र्याखाली राहून आतील भाग कुरतडत पुढे सरकते. ही अळी जशी पुढे सरकते तशा पानांवर पांढर्‍या नागमोडी रेषा पडतात. किडीच्या प्रादुर्भावमुळे पानांची अन्न तयार करण्याची क्रिया कमी पडते. त्यामुळे उत्पादन घटते.</li>
                            </ol>
                        </li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    बॅसिलस थुरीन्जिएन्सीस प्रतिहेक्‍टरी 25 किलो किंवा ऍझाडीरेक्‍टीन (1 टक्के) 25 मिलि किंवा प्लुबेडिंयामाईड 2 मिलि.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    टोमॅटो रोपांची लागवड करण्यापूर्वी, रोपांची मुळे इमिडाक्‍लोप्रिड किंवा थायामेथोक्‍झाम 5 मिली प्रति 10 लिटर या द्रावणात अर्धा तास बुडवून ठेवावीत. त्यानंतर लागवड करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    फिप्रोनील 15 मि.लि. किंवा डायमेथोएट किंवा मिथिल डिमेटॉन 10 मि.लि. प्रति 10 लिटर पाण्यात मिसळून रोपावर फवारावे.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    सूत्रकृमींचा उपद्रव कमी होण्यासाठी टोमॅटोच्या पिकाभोवती झेंडू, सदाफुली यासारख्या फुलांची लागवड करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    60-100 मेश नायलॉन नेट किंवा पांढरे पातळ मलमल कापड 2 मीटर उंचीपर्यंत मच्छरदाणीसारखे गादीवाफ्यास लावावे. यामुळे रोगाचा प्रसार करणाऱ्या किडींना रोखणे शक्‍य होईल.</li><br>
                            </ol>
                        </li><br>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 amlastext">
                    <div class="subtittle amhtag">

                        <h3>टोमॅटोवरील रोगी:</h3>
                    </div>
                    <hr>
                    <ul>
                        <li><strong>1. करपा :</strong><br>
                            <div>
                                <a href="img/tamato7.jpg" data-lightbox="mygallery" data-title="करपा"><img src="img/tamato7.jpg" title="करपा" class="img-responsive "></a>
                            </div>

                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    हा एक बुरशीजन्य रोग आहे.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    यामुळे पानांवर तपकिरी रंगाचे ठिपके पडतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    नंतर ते आकाराने वाढतात संपूर्ण पान वाळते.
                                </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    दमट हवामान ह्या रोगासाठी पोषक आहे.
                                </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या रोगामुळे फळांवरही चट्टे पडुन फळांची प्रत खालावते.
                                </li>
                            </ol>
                        </li><br>



                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या रोगाचे नियंत्रण करण्यासाठी झायनेब, डायथेन एम-45 किंवा डायफोलटान यापैकी एका बुरशीनाशकांची फवारणी 2 किलो / हेक्‍टरी करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    मॅन्कोझेब 25 ग्रॅम किंवा कॉपर ऑक्‍झीक्‍लोराईड 30 ग्रॅम / क्‍लोरोथॅलोनील 25 ग्रॅम प्रति 10 लिटर पाण्यात मिसळून 15 दिवसांच्या अंतराने आलटून-पालटून फवारावे. आवश्‍यकतेनुसार तीन ते चार फवारण्या कराव्यात.</li><br>
                            </ol>

                        </li><br>
                        <li><strong>2. बोकड्या / पर्णगुच्छ:</strong><br>
                            <div>
                                <a href="img/tamato8.jpg" data-lightbox="mygallery" data-title="बोकड्या / पर्णगुच्छ"><img src="img/tamato8.jpg" title="" class="img-responsive "></a>
                            </div>
                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    हा एक विषाणूजन्य रोग आहे.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या रोगामुळे पाने बारीक, खडबडीत होऊन सुरकुत्या पडल्यासारखी दिसतात व झाडाची वाढ खुंटते.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    नंतर फळे आल्यावर फळे खाऊ लागते.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    अळी फळावर छिद्रे पाडून पुढील अर्धे शरीर फळांत ठेवते.त्यमुळे फळे सडतात.</li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    जानेवारी ते मे दरम्यान या अळीचा प्रादुर्भाव जास्त असतो.</li>
                            </ol>
                        </li><br>
                        <!--
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    बॅसिलस थुरीन्जिएन्सीस प्रतिहेक्‍टरी 25 किलो किंवा ऍझाडीरेक्‍टीन (1 टक्के) 25 मिलि किंवा प्लुबेडिंयामाईड 2 मिलि.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    डायमेथोएट (30 टक्के प्रवाही) 16 मिलि, किंवा इमिडाक्‍लोप्रीड 3 मिलि, किंवा मिथाईल डेमेटॉन (25 टक्के प्रवाही) 15 मिलि.</li><br>
                            </ol>
                        </li><br>
-->

                        <li><strong>3. टोमॅटो स्पॉटेड विल्ट व्हायरस:</strong><br>
                            <div>
                                <a href="img/tamato9.jpg" data-lightbox="mygallery" data-title="टोमॅटो स्पॉटेड विल्ट व्हायरस"><img src="img/tamato9.jpg" title="" class="img-responsive "></a>
                            </div>
                            <span style="font-size: 18px; color: orange">लक्षणं:</span>
                            <ol>

                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    शेंड्याकडील नवीन पानांवर प्रथम लहान, तांबूस-काळसर ठिपके-चट्टे दिसतात.
                                </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    रोगाचे प्रमाण वाढून तीन-चार दिवसांत कोवळी पाने करपून काळी पडतात व शेवटी झाड करपते व मरते.
                                </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    फळावर पिवळसर-लाल डाग तसेच गोलाकार एकात एक वलये दिसून येतात.
                                </li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    फळे पूर्ण वाढ होण्यापूर्वीच पिकतात आणि त्यांना एकसारखा आकर्षक लाल रंग येत नाही

                                </li>
                            </ol>
                        </li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नियंत्रणाचे उपाय:</span><br>
                            <ol>



                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    या रोगाच्या नियंत्रणासाठी फुलकिडे, पांढरी माशी, मावा, तुडतुडे या रसशोषण करणा-या किडींचे नियंत्रण करणे गरजेचे आहे.li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    बियाणे पेरणीपूर्वी इमिडाक्‍लोप्रीड किंवा कार्बोसल्फान (पाच ग्रॅम प्रति किलो) अधिक ट्रायकोडर्मा (पाच ग्रॅम प्रति किलो) यांची बीजप्रक्रिया करून बियाणे पेरावे.
                                </li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    पेरणीपूर्वी गादीवाफ्यावर फोरेट 25 ग्रॅम प्रति 3 x 1 मीटर आकाराच्या गादीवाफ्यात मिसळावे.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    इमिडाक्‍लोप्रीड 10 मि.लि. किंवा कार्बोसल्फान 20 मि.लि. अधिक ट्रायकोडर्मा पावडर 50 ग्रॅम प्रति 10 लिटर पाण्यात मिसळून त्यात रोपांची मुळे 10 ते 15 मिनिटे बुडवून नंतर लागवड करावी.</li><br>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    रोगाची लक्षण दिसताच रोगग्रस्त झाडे उपटून जमिनीत गाडून टाकावी किंवा जाळून नष्ट करावीत.
                                </li><br>
                            </ol>
                        </li><br>
                        <div>
                            <a href="img/tm..jpg" data-lightbox="mygallery" data-title="tomato"><img src="img/tm..jpg" title="" class="img-responsive " style="height: 450px;"></a>
                        </div>
                    </ul>
                    

                </div>
            </div>
        </div>
    </section><br>
    
    
    <section class="bgconno"><br>
        <div class="container">
            <div class="row">
                <div class="conno">
                    <div>
                        <h1>Imporatant Knowledge in pdf</h1>
                    </div>
                    <h2>How to growth your tomato</h2>
                    <h3>
                        <a href="pdf/tomato.pdf">Download pdf</a></h3>
                   
                </div>
            </div>
        </div><br>
    </section>
    <section>
        <div class="container">
            <div class="">

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


</body></html>
