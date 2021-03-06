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
        <a href="american.php" class="btn1"> American</a>
        <a href="sugarcane.php" class="btn2"> Sugarcane</a>
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

                        <h1><b>कापूस info</b></h1>
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
                    <a href="img/cotton6.jpg"><img src="img/cotton6.jpg" alt="" class="img-responsive" title="cotton" style=" height: 400px;"></a>
                </div>
                <div class="who_we_area col-md-7 col-sm-6 amlastext">
                    <div class="subtittle amhtag">
                        <h3>प्र. :कापसावरील कीड, रोग व त्यावरील उपाय?</h3>
                    </div>
                    <hr>
                    <p>भारतात कापूस जगातील कपाशीखालील क्षेत्राच्या एक चतुर्थांश क्षेत्र भारतात कापूस लागवडीखाली आहे. भारतात महाराष्ट्रात मोठ्याप्रमाणात कापसाचे पिक घेतले जाते तसेच गुजरात, आंध्रप्रदेश आणि मध्यप्रदेश या राज्यातही कापसाची लागवड केली जाते.<br><br>कापसाच्या जातीचे शास्त्रीय नाव गॉसिपियम आहे. व्यापारी तत्त्वावर वापरला जाणाऱ्या कापसाची झाडे बहुधा गॉसिपियम हिर्सुटम व गॉसिपियम बार्बाडेन्स या दोन उपजातींची असतात.

                        <br><br> महाराष्ट्रात कापूस हे प्रमुख नगदी पीक आहे. विदर्भात कापसाच्या पिकाला आवश्यक असणारी काळी कसदार मृदा व कोरडे हवामान असल्यामुळे तेथे कापसाचे सर्वाधिक उत्पादन होते. विदर्भातील यवतमाळ जिल्ह्याला पांढरे सोने पिकवणारा म्हणजेच सर्वाधिक कापूस पिकवणारा जिल्हा असेसुद्धा म्हणतात. कापसापासून मोठ्या प्रमाणात सुती कापडाची निर्मिती करतात. महाराष्ट्रात अकोला येथे कापसाच्या पिकासाठी सर्वात मोठी बाजारपेठ उपलब्ध आहे.
                        <!--                        <a href="cotton.html">Read more</a>-->
                    </p>

                </div>
            </div>
            <div class="row" style="margin-top: : 30px; padding-bottom: 20px;">
                <div class="col-md-6 col-sm-6 amlastext">
                    <div class="subtittle amhtag">
                        <hr>
                        <h3>कापसावरील कीड</h3>
                    </div>
                    <hr>
                    <ul>
                        <li><strong>१) मावा : –</strong><br> माव्याचा जीवनक्रम - मावा हा किटक लहान (१ ते २ मिमी ), मऊ शरीर असलेले पिवळसर, हिरवट, तपकिरी किंवा काळसर हिरवट रंगाचे असून झाडाच्या कोवळ्या भागावर आढळतो, ह्या किडीच्या पोटाच्या वरील भागावर दोन सुक्ष्म नलिका असून त्याद्वारे ही कीड चिकट, गोड द्रव बाहेर टाकते. हा द्रव खाण्यासाठी मुंग्या रोपावर आढळतात. ह्या मुंग्याच्या पाठीवर माव्याची पिले बसून ती एका झाडावरून दुसर्‍या झाडावर जातात. ही कीड अंडी घालीत नाही. तिचे प्रजनन संयोगाविना होत असते. माद्या बिन पंखाच्या, आकाराने मोठ्या, फिक्कट रंगाच्या असतात. एक मादी दररोज ८ ते २२ पिलांना जन्म देते. पिले चार वेळा कात टाकून प्रौढावस्थेत जातात. किडीची वाढ ७ ते ९ दिवसात पुर्ण होऊन पौढ मावा २ ते ३ आठवडे जगतो. वर्षभरात १२ ते १४ पिढ्या उपजतात.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">माव्यापासून दोणारे नुकसान :</span><br> मावा हा कोवळ्या पानाच्या खालच्या बाजूला समूहाने राहून रस शोषतो. परिणामी झाडे कमजोर होऊन पाने मुरडतात. पानांचा रंग फिक्कट पडतो. माव्याचा प्रादुर्भाव अधिक झाल्यास झाडे कापल्यासारखी दिसतात. यामध्ये जुन्या झाडांपेक्षा कोवळ्या झाडांचे नुकसान अधिक होते. पावसामुळे मावा धुवून खाली जमिनीवर पडतो व मरतो. खडकाळ, हलक्या जमिनीत किंवा भारी चिकण जमिनीत कापसाच्या मुळ्या शिरत नाहीत. अशा झाडांवर मावा किडीचा प्रादुर्भाव अधिक जाणवतो. माव्यामुळे कापसावर चिकटा येतो.</li><br>

                        <li><span style="color: green; font-style: normal; font-size: 16px;">मावा किडीचे नैसर्गिक शत्रू :</span><br>लेडीवर्ग बिटल (ढाल किडा किंवा कॉक्सीनेलीड किटक ) हे किटक मावा कीड खावून आपली भूक भागवितात. तसेच क्रायसोपा व सिरकीड माशी (हॉपर फ्लाय ) मावा किटक खातात. चाल्सीड नावाचे परजीवी किटक मावा किडीची संख्या वाढू देत नाही.</li><br>

                        <li><span style="color: green; font-style: normal; font-size: 16px;">उपाय: </span><br>माव्याचा प्रादुर्भाव जाणवताच सप्तामृत औषधांमध्ये प्रोटेक्टंटचे प्रमाण १ लि. पाण्याला ५ ग्रॅम घेऊन ४ -५ दिवसाच्या अंतराने दोन दाट फवारण्या कराव्यात .</li>
                    </ul><br><br>

                    <ul>
                        <li><strong>२) तुडतुडे : –</strong><br> फिक्कट हिरव्या रंगाचे पौढ किटक, पानावर तिरकस चालतात. नर आणि मादीचे मिलन झाल्यावर मादी २ ते ७ दिवसांनी पानांच्या वरील पृष्ठभागावरील शिरामध्ये १ -१ पिवळी अंडी घालते. एक मादी ३० ते ४० पर्यंत अंडी घालते. अंडी घालण्यासाठी ३५ ते ४० दिवसाची कापसाची पाने आवडतात . ४ ते ११ दिवस अंडी अवस्था राहते. पिल्ले पानांच्या खालील पृष्ठभागावरून रस शोषतात व २१ दिवसात त्यांची वाढ पुर्ण होते. तुडतुडे मोठे होताना दर २ -३ दिवसांनी कात टाकतात. दिवस पानांच्या खालील बाजूस व रात्री पानांवरील बाजूस आढळतात. मादीशी संगम न झालेले तुडतुडे ३ महिन्याहून अधिक काळ जगतात. संगम झालेले तुडतुडे उन्हाळ्यात ५ आठवड्यापेक्षा व हिवाळ्यात ७ आठवड्यापेक्षा अधिक काळ जगत नाहीत. ऋतुमानानुसार १५ ते १६ दिवसात जीवनक्रम सुरू होतो. वर्षभरामध्ये ११ पिढ्या तयार होतात.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">तुडतुड्यापासून होणारे नुकसान :</span><br>प्रौढ तुडतुडे व पिल्ले पानांतील रस शोषतात आणि पानांच्या पेशीत ओली विषारी लाळ टाकतात. त्यामुळे पानांची कडा प्रथम फिकट हिरवी व नंतर पिवळी आणि शेवटी विटकरी लाल ते तपकिरी दिसते. पानांचा रंग बदलून पाने वाळू लागतात आणि नंतर गळतात. झाडांची वाढ खुंटते. परिणामी फुलांची व बोंडांची संख्या घटते. कापसाचे उत्पादन कमी, वजन कमी भरून कापसाची प्रत ढासळते. या किडीचा प्रादुर्भाव लवकर पेरणी केलेल्या पिकामध्ये अधिक जाणवतो. पुर्ण वाढ झालेल्या पण अद्याप पंख न फुटलेला लहान तुडतुड्यापासून जास्त नुससान होते. ही कीड पानांच्या शिरेमध्ये सुईसारखी सोंड खुपसून पानातील रस शोषतात.</li><br>

                        <li><span style="color: green; font-style: normal; font-size: 16px;">तुडतुड्याचे नैसर्गिक शत्रू:</span><br>दोन प्रकारचे क्रायसोपा तुडतुडे खातात. लेडीबर्ड बिटल (ढाल किडा ) बरेच प्रकारचे कोळी (अष्टपदी ) व मुंगळे हें तुडतुड्यांचे शत्रू आहेत. मात्र या नैसर्गिक परजीवी कीटकांचा परिणाम तुडतुड्यांची संख्या कमी करण्यासाठी फारसा होत नाही. Cephalospemum नावाची बुरशी तुडतुड्याचा नाश करते.</li><br>

                        <li><span style="color: green; font-style: normal; font-size: 16px;">तुडतुड्यांच्या प्रादुर्भावाची लक्षणे: </span><br>तुडतुडे हिरवे किंवा पिवळसर हिरवे असतात. स्पर्श केल्यास ते तिरपे चालतात. प्रादुर्भाव झालेल्या पानाच्या कडा प्रथम पिवळसर होतात व त्यावर तुडतुड्याच्या काती दिसतात. तुडतुड्यांचा प्रादुर्भाव अधिक झाल्यास पानाच्या कडा खालच्या बाजूने कोकाडतात. पानाच्या कडा नंतर लालसर होतात व प्रादुर्भाव कायम राहिल तर जळल्यासारखा दिसतो. तुडतुड्याचा जास्त प्रादुर्भाव झाल्यास बोंडे गळून पडतात व बोंडातील घागा कच्चा राहतो .</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">तुडतुड्यांना प्रतिकारक कापसाच्या जाती : </span><br> ए. एच. एच. ४६८, डी.एच. वाय. २८६, अबाधिता, एल.आर.के. ५१६, अंकुर ६५१ ह्या जाती तुडतुड्यांन प्रतिकारक आहेत. या वाणांच्या पानांना लव अधिक असते. मात्र लव नसलेल्या पानांपेक्ष ही पाने हिरव्या बोंड अळीला जास्त बळी पडतात.
                    </ul><br><br>

                    <ul>
                        <li><strong>३) फुलकिडे : –</strong><br> फुलकिडे अत्यंत लहान असतात ते भिंगाच्या सहाय्याने पहावे लागतात. फुलकिडे दोन प्रकारचे असतात. एक म्हणजे काळ्या रंगाचे फुलकिडे याला कॅलिओथ्रिप्स इंडिकस म्हणतात आणि दुसरे पिवळसर पांढरर्‍या रंगाचे फुलकिडे याला फ्रॅक्लीनिओन शुल्टझी म्हणतात.<br>
                            काळ्या फुलकिड्यामुळे झाडाच्या खालच्या पानावर वरच्या बाजूने अतिशय पांढरे ठिपके पडतात. तर पिवळसर पांढर्‍या रंगाच्या फुल किड्यांमुळे खालच्या बाजूने पाने काळपट तर वरच्या बाजुने कोकडल्यासारखी व कडक होतात. व्यवस्थित पानाचे निरिक्षण केल्यास त्यावर काळ्या रेघा किंवा जळाल्यासारखा भाग दिसतो. काळे फुलकिडे पानाच्या वरच्या पृष्ठ भागावर असल्याने पाऊस पडल्यास वाहून जातात, मात्र पिवळे फुलकिडे झाडावरील मधल्या व कोरड्या पानाच्या खालच्या भागात राहतात. त्यामुळे जोराचा पाऊस किंवा पानाच्या खालच्या बाजूने फवारणी केल्यास त्याचा नाश होतो</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">जिवनक्रम व प्रादुर्भाव : </span><br> फुलकिडे आकाराने लहान १ ते २ मिमी लांब सडपातळ, नाजूक व लांबोळे असतात. उष्ण व आर्द्र वातावरणात फार झपाट्याने वाढतात. पिल्ले गवती रंगाची असतात. प्रौढ किटकांच्या पंखावर दाट झालर असते. नरमादीचा संगम होऊन किंवा न होताही प्रजनन होते. दररोज २ ते ४ अंडी पानाच्या कोवळ्या उतीमध्ये घालते. एक मादी २० ते ४० दिवस जगते आणि ५० ते १०० अंडी देते. १० ते १४ दिवसात नवीन पिढी तयार होते. फुलकिड्यांच्या तोंडात भाल्यासारखा एक अवयव असतो त्याला मँडीबल म्हणतात. हा 'मँडीबल' वारंवार पानात टोचून अनेक जखमा करून त्यातून निघणारा द्रव तोंडाद्वारे शोषून घेतात.<br>
                            जखमेतील रस शोषल्यानंतर जखमेत पोकळी निर्माण होते व त्यात हवा शिरते. जखम भरल्यानंतर हवा आतमध्ये राहते व त्याचा आरशासारखा चमकदार भाग तयार होतो. म्हणून फुलकिड्यांचा प्रादुर्भाव झाल्यास पाने खालच्या बाजूने कडक होऊन चमकतात. पानांचा रंग तपकिरी होऊन शेवटी पाने विटकरी दिसतात. किडीची तिव्रता वाढल्यास पाने चंदेरी, मुरडलेली, भुरकट तपकिरी दिसतात. शेवटी पाने वळतात. झाडवर मधल्या व खालच्या पानापेक्षा शेंड्याकडील पानावर किटकांचा प्रादुर्भाव जास्त दिसतो.</li>
                    </ul>
                    <ul>
                        <li><br><br><strong>४) पांढरी माशी: –</strong><br>कापसाच्या कोवळ्या पानावर खालच्या बाजूने पांढरी माशी अंडी घालते. ०.२० मिलीचे अंडे असते. अंडी घालताना मादी मेणासारखा पांढरा पदार्थ पानावर सोडते. त्यामुळे अंडी पानावर चिकटतात. जास्त अंडी घातली असल्यास पाने खालच्या बाजूने पांढरट दिसतात. प्रत्येक मादी जास्तीत जास्त १२० ते सरासरी २८ ते ४३ अंडी घालते. अंडी अवस्था उन्हाळ्यात ९ ते १४ आणि हिवाळ्यात १७ ते ८१ दिवस असते. कोषावस्था २ ते ८ दिवस असते. पांढर्‍या माशीचा जीवनक्रम पुर्ण होण्यास हवामानानुसार १४ ते १०७ दिवस लागतात. वर्षभर प्रजनन होत असल्याने सर्व अवस्थेतील कीड कापूस पिकावर आढळते. बर्‍याच वेळा तर मादीचे मिलन न होताच प्रजनन होते असते. वर्षभरात १० ते १२ पिढ्या तयार होतात.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">प्रादुर्भाव : </span><br> किटकनाशकांच्या सतत फवारणीमुळे पांढर्‍या माशींचा प्रादुर्भाव फार मोठ्या प्रमाणात वाढतो. कारण पांढर्‍या माशीमध्ये प्रतिकार क्षमता निर्माण झालेली आहे. मे -जून महिन्यात पेरलेल्या नवीन कापसाचे पिकावर ही कीड येते. जून ते ऑगस्ट महिन्यात किडीचा प्रादुर्भाव वाढतो. पावसाळ्यात प्रादुर्भाव कमी होतो. मात्र पाऊस संपल्यावर पुन्हा वाढतो. जास्त तपमाना व कमी पाऊसमान ह्या किडीस अनुकूल असते. त्यामुळे पानांच्या प्रकाश संश्लेषण क्रियेत अडथळा येतो.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नुकसानीचा प्रकार : </span><br> ही माशी पानातील रस शोषून घेते. त्यामुळे पानांवर पांढरे डाग पडून पान जळल्यासारखे दिसते. नंतर गळून पडते. पांढरी माशी रस शोषून घेतल्यानंतर विष्टेद्वारे गोड पदार्थ शरीराबाहेर टाकते. यावर काळी बुरशी वाढते. संपुर्ण पान काळे पडते. या बुरशीलाच 'कोळशी' म्हणतात. यामुळे बोंडे, पाती गळतात किंवा गोंड पुर्ण उमलले जात नाही.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">पांढर्‍या माशीचे जैविक नियंत्रण : </span><br>पांढर्‍या माशींना प्रतिकारक असणार्‍या जणींची (कांचन, सुप्रिया, सीआयसीआर २, सीआयसीआर ४ ) लागवड करावी. या जातींची पाने चोपडी दाट किंवा आखूड लावा असणारी सिलीका व फेनालचे प्रमाण अधिक असून पाने रसदार नसलेली असतात. तसेच पिवळ्या रंगाकडे पांढरी माशी लगेच आकर्षित होत असल्याने तेलाचे पिवळे डबे अथवा पिवळे कापड एरंड तेलामध्ये बुडवून कापसाच्या झाडाच्या १ फुट उंच बांधावे किंवा मजुरांकडून एरंड तेलामध्ये बुडविलेले पिवळे कापड कापसाच्या पिकातून फिरवावे म्हणजे असंख्य पांढर्‍या माशी कापडाकडे आकर्षित होऊन चिकटून मरतात.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">उपाय: </span><br>कडू निंबाचे ते आणि कडूनिंबाचा निंबोळी अर्क प्रत्येकी ५ मिली प्रति लि. पाण्यातून फवारणी करावी. त्यामुळे मावा, तुडतुडे, फुलकिडे यांना प्रतिकार होतो किंवा कॉटन थ्राईवर ५०० मिली + क्रॉंपशाईनर ५०० मिली + प्रोटेक्टंट ५०० ग्रॅमची फवारणी १५० लि. पाण्यातून दोन वेळा ८ -८ दिवसांचे अंतराने करावी.</li>
                    </ul><br>

                </div>
                <div class="col-md-6 col-sm-6 amlastext">
                    <div>
                        <a href="img/cotton8.jpg"><img src="img/cotton8.jpg" title="cotton" class="img-responsive damimag"></a>
                    </div>


                    <ul>
                        <li><br><strong>५) लाल ढेकण्या जीवनक्रम : –</strong><br>प्रौढ अवस्थेतील लाल ढेकण्या सडपातळ व समोरचे पंख नारंगी, गर्द लाल किंवा पिवळ्या रंगाचे असतात. पिल्ले बहुदा लाल किंवा पिवळ्या रंगाची असतात. पुर्ण वाढ झालेले किटक १२ ते १८ मिमी लांब असतात. मादी पिवळसर रंगाची असून ती १०० ते १३० अंडी झाडाच्या खाली ओलसर जमिनीत घालते. ५ ते ८ दिवसात अंडी उबवतात. ५० ते ९० दिवसात पिल्लाची पुर्ण वाढ होते. वर्षातून ३ ते ४ पिढ्या निजतात.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">प्रदुर्भावाचे स्वरूप : </span><br> लाल ढेकण्या सुईसारख्या सोंडेने नुकत्याच फुटलेल्या बोंडातून बियामधील रस (द्रव) शोषतात. शिवाय सोंडेतून नेमाटोस्पोरा गॉसीपी नावाची बुरशी बोंडात सोडतात. त्या बुरशीमुळे कापूस पिवळा पडतो. बोंड सडते.</li>
                    </ul>

                    <ul>
                        <li><br><br><strong>६) पाने गुंडाळणारी अळी : –</strong><br>अळीचे मादी पतंग, कोवळ्या पानाच्या मागील बाजूस चपटी, गुळगुळीत पांढर्‍या पिवळसर हिरावत रंगाची अंडी घालते. अंडी ६ ते ७ दिवसात उबतात. १५ ते २० दिवस अळी पानाच्या कडेने कडा खाऊन उपजिविका करते. पानांची गुंडाळी करून कोषावस्थेत जाते. ६ ते ७ दिवस कोषावस्था टिकते. पुर्ण वाढलेली अळी १ इंच लांब, चकचकीत हिरव्या रंगाची असून डोके गर्द हिरवे असते. जीवनक्रम १ महिन्याचा असून हिवाळ्यात बांधावरील झुडपात ही कीड राहते. दमट ढगाळ हवेमध्ये प्रादुर्भाव मोठ्या प्रमाणात जाणवतो.</li>
                    </ul>
                    <ul>
                        <li><br><br><strong>७) बोंड अळी : –</strong><br>कापसावर मुख्यत ठिपक्याची बोंडअळी, हिरवी बोंडअळी (घाटेअळी) आणि शेंदरी बोंड अळी (गुलाबी) या तीन प्रकारच्या बोंड अळ्यांचा प्रादुर्भाव जाणवतो.<br>
                            ठिपक्याची व गुलाबी बोंडअळी पक्क बोंडाचे नुकसान करते. जास्त करून गुलाबी बोंड अळी पक्क बोंडाचे नुकसान करते. त्याचबरोबर ठिपक्याची बोंड अळीमुळे बोंडात बुरशी वाढल्याने बोंडे निरोपयोगी होतात. हिरव्या बोंड अळीमुळे कळ्या, पात्या आणि बोंडाचेही नुकसान मोठ्या प्रमाणात होते.<br><br>
                            यामुळे झाडावरील पुर्ण कापूस वेचता येत नाही कारण निकृष्ट कापूस वेचणीस योग्य नसतो. तसेच वेचणीस उशीर लागून दर्जा ढासळलेला असतो व अशा कापसाचे प्रमाण जास्त असते. बोंड अळीमुळे सामान्य बोंडापेक्षा अशी बोंडे ३ दिवस लवकर उमलतात. त्यामुळे बियाचे, रूईचे वजन कमी होऊन उतार कमी पडतो. शिवाय बोंड अळीने डागाळलेला, कमजोर तंतू असलेला, पोकळ सरकीचा कापूस निघतो.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">अ) ठिपक्याची बोंडअळी : </span><br>ठिपक्याच्या बोंड अळीचा रंग करडा असून तिच्या अंगावर बरेच काळे व बदामी ठिपके असतात. पतंगाचा विस्तार २५मिमी असून एरीएस इन्सुलाना जातीच्या पतंगाच्या पुढील पायाचा रंग गवती हिरवा असतो. तर एरीएस फॅब्रीया जातीच्या पतंगाच्या मध्यावर पाचरीच्या आकाराचे पांढरे पट्टे असतात. अंडी निळसर हिरवी व गोल मुकूटासारखी असतात. जिवनक्रम मात्र दोन्ही जातींचा सारखाच असतो.<br><br>
                            सुर्य मावल्यानंतर कोषातून पतंग निघतात. २ -३ दिवस नर- मादीचा संगम झाल्यानंतर मादी रात्री पात्या, फुले कळ्या बोंड किंवा झाडाच्या शेंड्यावर लव असणार्‍या भागावर १ -१ याप्रमाणे एक मधी २०० ते ३०० जास्तीत जास्त ७०० पर्यंत अंडी घालते. उबदार हवामानात २ ते ४ दिवस आणि थंडीमध्ये ८ ते ९ दिवसात अंडी उबतात. त्यातून बारीक अळी बाहेर पडते ही अळी फांद्या फुलाच्या कळ्या किंवा बोंडामध्ये शिरून आतील पेशीवर आपली उपजीविका करते. उबदार हवामानात अळीची पुर्ण वाढ व्हायला ९ ते २० दिवस तर थंडीमध्ये ५० ते ६० दिवस लागतात. पुर्ण वाढ झालेली अळी १.९ सेमी लांब, तपकिरी रंगाची असते. तिच्या लांबीला समांतर अंगावर पांढर्‍या व फिक्कट पिवळ्या किंवा हिरव्या रेषा असतात. एरीएस इन्सुलाना ह्या जातीच्या अळीचा रंग मळकट, हिरवट पांढरा असतो. अंगावर काळे नारंगी ठिपके असतात. झाडाचे खाली पडलेल्या पात्या, बोंड किं</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नुकसानीचा प्रकार : </span><br>ठिपक्याची बोंड अळी कापसाचे शेंडे, फुले व बोंडाचे नुकसान करते. शेंडे सुकतात, खाली वाकतात व मारतात. किडलेली फुले, पाती गळतात. बोंडे लालसर होऊन गळतात. मोठी बोंडे अपरिपक्क अवस्थेत फुटतात. त्यामुळे कापसाची प्रत खालावते. अळी नव्या फुटीस जास्त नुकसान करते. बोंडाची गळ होत नाही मात्र बोंडावर विष्टेने बंद झालेली छिद्रे दिसतात. बोंडातील आतील भाग पोखारल्याने बोंडे निकामी होऊन रूइचि प्रत खालावते. या अळीमुळे ७० ते ८०% बोंडगळ व ४० ते ५०% शेंडे मर होते.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">ब) हिरवी बोंड अळी : </span><br>बोंड अळीच्या पतंगाचे शरीर १६ ते १८ मिमी लांब असून पंखाचा विस्तार ३२ ते ३८ मिमी असतो. पंखाची समोरची जोड पिवळसर, तपकिरी करडी तपकिरी किंवा तांबूस तपकिरी बदामी रंगाची असून पंखावर रेषा असतात. मागील पंखाची जोडी घुरकट, पांढरट असून त्यावर रुंद, गर्द, करड्या किंवा तपकिरी रंगाचे पट्टे असतात. त्यावर फिक्कट दोन ठिपके असतात.<br><br><br>

                            हिरव्या बोंड अळीचे पतंग कोषातून संध्याकाळी ६ नंतर बाहेर येतात. प्रामुख्याने ८ ते १० च्या दरम्यान जास्त पतंग बाहेर पडतात. दिवसा एकही पतंग बाहेर येत नाही. कोषातून नुकतेच निघाल्याने पतंगाचे पंख ओलसर व सुरकुतलेले असतात. ते हळूहळू झाडावर चढून २ ते ४ तास शांत बसून पंखामध्ये हवा भरून पंख पुर्णपणे उमलतात पंख पक्के झाल्यानंतर उडतात.<br><br>

                            मादी पतंग कोषातून बाहेर पडल्यानंतर दुसर्‍या दिवशी तीचा नराशी संबंध येतो. रात्री २ ते ४ नर पतंग शेतातून उडत असतात, तर मादी पतंग पानावर बसून फेरोमोन नावाचे संजीवक (हार्मोन ) निर्माण करून हवेत सोडतात. या संजीवकाच्या वासामुळे नर पतंग मादीकडे आकर्षित होतात. दोन्हींचा संगम झाल्यानंतर १ ते ४ मादी ३ ते ५ दिवस शेंड्यावर कोवळ्या पानावर एक एक अंडी घालते. अंडी चकचकीत, गोल, घुमटाच्या आकाराचे हिरवट पिवळी असतात. अंड्यातून अळ्या निघण्यासाठी तापमानानुसार २ ते ४ दिवस ते थंडीमध्ये ८ दिवस लागतात. वाढीस लागलेल्या अळ्या, पात्या, कळ्या, फुले व हिरवी बोंड ह्यांना छिद्र पाडून आतील भाग खातात. अंड्यातून नुकतीच बाहेर आलेली अळी बोंडला छिद्र पाडू शकत नाही. त्यामुळे दोन आळ्या एकत्र आल्यावर, एकमेकींना जखमा करून खाण्याचा प्रयत्न करतात. त्यामुळे एका बोंडामध्ये एकापेक्षा अधिक अळ्या आढळत नाहीत.<br><br>
                            पुर्ण वाढलेल्या अळीचा रंग पिवळसर, फिक्कट ते गडद हिरवा, तपकिरी, लालसर गुलाबी, नारंगी आणि थोडासा काळसर असते. अंगावर तुरट गर्द करड्या रेषा असून पाय तपकिरी असतात. अळीची लांबी ३७ ते ५० मिमी असते. हिरव्या अळीची २० ते २१ दिवसात पूर्ण वाढ होते. अळी बोंडाना छिद्र पाडून तोंडाकडील भागाने आत अर्धी शिरून आतील भाग पोखरते. मात्र अर्धा भाग बाहेर राहत असल्याते नैसर्गिक शत्रुंना ही लवकर बळी पडते. ही अळी पुर्ण जीवनात ५ वेळा कात टाकते. कात टाकल्यानंतर नवीन कात पक्की होण्यास २ -३ तास लागतात. पुर्ण वाढ झालेली अळी पानावरून खाली उतरून ओलसर जमिनीत १ ते ६ इंच छिद्र करून आत घुसते व कोषावस्थेत जाते. कोष फिक्कट तपकिरी रंगाचा, १५ ते २० मिमी लांब असतो. कोषावस्था दोन आठवड्यापासून अनेक आठवडे असते. बहुतेक पतंग जून, ऑगस्ट, डिसेंबर, जानेवारी महिन्यात आढळतात, पतंग दिवसा दिसत नाहीत. ते रात्री सक्रिय असतात. औषधांना प्रतिकारक पतंग शेतापासून लांब जातात.<br><br>हिरव्या अळीला कापसाच्या बोंडातील वाढणारा कोवळा सेल्युलोज खाद्य म्हणून आणि सरकीच्या तेलाचा वास फार आवडतो. त्यामुळे किटकनाशकामध्ये सरकी तेलाचा अंश असला म्हणजे अळी अकर्षित होते.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">नुकसानीचा प्रकार : </span><br>हिरव्या बोंड अळीमुळे किडलेल्या पात्या, फुले, कळ्या व लहान बोंडे गळतात. मोठी बोंडे गळत नाहीत. मात्र अळीने आतील भाग पोखरल्याने बोंड निकामी होते व रूईची प्रत खालवते. त्यमुळे उत्पादनावर विपरीत परिणाम होतो.</li><br>
                        <li><span style="color: green; font-style: normal; font-size: 16px;">क) शेंदरी बोंडअळी (गुलाबी बोंडअळी) : </span><br> शेंदरी बोंड अळीचे मादी पतंग कोवळ्या पानाच्या मागील भागावर, पात्या, कळ्या व पुष्य कोषावर बारीक फटीत अलग अलग लांबोळी, पांढरी, गोल, चपटी अंडी घालते. सर्व साधारण ४ ते ५ दिवसात अंडी उबतात. १५ ते १६ मिमी लांबीची अळी असते. अळ्या रात्री पात्यामध्ये बोंडात शिरायला ५ ते ६ दिवस लागतात.<br><br>

                            बोंडामध्ये अळी शिरल्यानंतर ओल्या विष्टेने छिद्र बंद करते. त्यामुळे वरून छिद्र जाणवत नाही. बोंडातील अळ्या रुईमधील सरकी खातात. सरकीची प्रत व तेलाचे प्रमाण कमी होते. ९ ते २१ दिवसात अळीची पुर्ण वाढ होते. गुलाबी रंगाच्या आळ्यांचे डोके बदामी रंगाचे असते. पुर्ण वाढ झालेली अळी बोंडाच्या टोकावरील भागावर गोल छिद्र करून बाहेर पडते. नंतर ती रेशमी आवरणात कोष तयार करते. कोषावस्था बोंडात, रुईमध्ये, खाली पडलेल्या पाल पाचोळ्यात ६ ते २० दिवस टिकते. एकूण जीवनक्रम २३ ते ३१ दिवसात पुर्ण होतो.<br><br>

                            नर व मादीचा रात्री होतो. नंतर ३ दिवसात मादी अंडी घालते. पतंग आकाराने लहान असतात. त्यांची पुढील पंखाची जोडी विटकरी रंगाची असून त्यावर काळपट ठिपके असतात. कीड ग्रस्त पात्या व फुले अर्धवट उमललेल्या गुलाबाच्या कळीसारखी दिसतात.<br><br>
                           
                        </li>
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
                    <h2>कापुस - पाणी आणि खत व्यवस्थापन</h2>
                    <h3>
                        <a href="pdf/%E0%A4%95%E0%A4%BE%E0%A4%AA%E0%A5%81%E0%A4%B8%20-%20%E0%A4%AA%E0%A4%BE%E0%A4%A3%E0%A5%80%20%E0%A4%86%E0%A4%A3%E0%A4%BF%20%E0%A4%96%E0%A4%A4%20%E0%A4%B5%E0%A5%8D%E0%A4%AF%E0%A4%B5%E0%A4%B8%E0%A5%8D%E0%A4%A5%E0%A4%BE%E0%A4%AA%E0%A4%A8.pdf">Download pdf</a></h3>
                   
                </div>
            </div>
        </div><br>
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
