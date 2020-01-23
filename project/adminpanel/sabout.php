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

    <!-- Latest compiled JavaScript -->

</head>

<body onload="myfunction()">
    <div id="loading"></div>

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
                    <a href="#">About</a>
                </li>
                <li class="nav-link">
                    <a href="#">Portfolio</a>
                </li>
                <li class="nav-link">
                    <a href="#">Services</a>
                </li>
                <li class="nav-link">
                    <a href="#">Contact</a>
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

                        <h1><b>ABOUT US</b></h1>
                        <hr>
                        <p>
                            This website make for farmer
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
                    <img src="img/info2.png" alt="" class="img-responsive"><br>

                </div>
            </div>

        </div>
    </section>
    <style>
        .afbfr h2:nth-last-child(1) {
            font-size: 22px;
            background-color: white;
            border: none;
        }

        .afbfr h2 {
            margin-bottom: 30px;
            text-align: center;
            border: 1px solid gray;
            /*            border-top-left-radius: 15px;*/
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 600;
            background-color: gainsboro;
        }

        .afbfr img {
            min-height: 200px;
            min-width: 200px;
        }

        .aftrr h2 {
            color: coral;
        }

        .befrr h2 {
            color: forestgreen;
        }

        .descr h4 {
            text-align: center;
            line-height: 25px;
            padding: 18px;
            text-align: justify;
        }

        .descr strong {
            font-size: 25px;
            color: gray;
        }

        .conttn {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 0px 40px;
            margin-top: 25px;

        }

        .fardett {
            padding-top: 40%;
            text-align: center;
        }


        /*/////////////////////android//////*/
        @media only screen and (max-width: 784px) {
            .fardett {
                padding: 10% 0 10% 0;
                text-align: center;
            }
        }

    </style>

    <section class="service-area aboutservr">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">

                        <h1><b>My Work</b></h1>
                        <hr>
                        <p>
                            many farmer request how it solve the problem.

                        </p>
                    </div>
                </div>
            </div>
            <br><br>



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
                            <a href="img/adrak2.jpg" data-lightbox="mygallery" data-title="This plant is chilli"><?php echo"  <img src='gaming chairs/$img1' class='img-thumnail img-responsive' />"?></a>

                            <h2>Date:<?php echo $row["date1"];?></h2>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="fardett">
                            <h3>Farmer Name: Ramukaka yadhav</h3>
                            <h3>Address:rampurwadi kannad aurangabad</h3>

                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="afbfr befrr">
                            <h2>Before</h2>
                            <a href="img/adrak2.jpg" data-lightbox="mygallery" data-title="This plant is chilli"><?php echo"  <img src='gaming chairs/$img2' class='img-thumnail img-responsive' />"?></a>
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


            <div class="conttn">
                <div class="row ">
                    <div class="col-sm-4 col-xs-12 ">
                        <div class="afbfr aftrr">
                            <h2>After</h2>
                            <a href="img/adrak2.jpg" data-lightbox="mygallery" data-title="This plant is chilli"><img src="img/adrak2.jpg" alt="" class="img-responsive"></a>

                            <h2>Date:12/12/2019</h2>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="fardett">
                            <h3>Farmer Name: Ramukaka yadhav</h3>
                            <h3>Address:rampurwadi kannad aurangabad</h3>

                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="afbfr befrr">
                            <h2>Before</h2>
                            <a href="img/adrak2.jpg" data-lightbox="mygallery" data-title="This plant is chilli"><img src="img/adrak2.jpg" alt="" class="img-responsive"></a>
                            <h2>Date:12/12/2019</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="descr">
                            <h4><strong>Descriptions:</strong>
                                <p> The Problems That An Average Indian Farmer Faces Are Multi-Fold. At Any Given Point In Time, A Farmer Is Facing Different Issues Simultaneously Such As Natural Calamities Like Droughts And Floods, Lack Of Proper Irrigation Systems And Therefore Water Scarcity, Low Market Prices, Mazes Of Middlemen, Low Return On Investment, Debts, No Facilities For Storage As Well As Transport, And A Lack Of Technical Know-How About Crop Patterns, Soil Types As Well As The Use Of Chemical.</p>
                            </h4>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" aboutservr">
        <div class="container ">
            <br><br>
        </div>
    </section>






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
