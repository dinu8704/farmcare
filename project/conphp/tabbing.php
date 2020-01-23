<?php
echo '

   <style>
   

#services-02 {
    font-family: "Roboto Condensed", sans-serif;
    background: #f4f4f4;
}

#services-tabs {
    margin-top: 20px;
}

#services-tabs ul {
    margin-bottom: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px 0 20px 0;
    list-style: none;

}

#services-tabs ul li {
    padding: 5px 30px;
}

#services-tabs ul li a {
    font-family: "Roboto Condensed", sans-serif;
    ;
    font-size: 14px;
    color: #212226;
    text-transform: uppercase;
    font-weight: bold padding: 0;
    text-decoration: none;

}


/* Tab active state */

#services-tabs ul li.r-tabs-state-active a {
    color: #fb527a;
    font-weight: 700;
    border-bottom: 3px solid #fb527a;
    padding-bottom: 5px;
    -webkit-transition: border-color 300ms linear;
    transition: border-color 300ms linear;
}

.service-tab .col-md-6 {
    padding: 0;
}

.service-tab img {
    width: 100%;
    margin: 0 auto;
}

.service-tab .tab-bg {
    background: #fff;
    padding: 59px 30px;
    min-height: 481px;
}

.service-tab h2 {
    font-size: 48px;
    color: #bbb;
    margin-bottom: 20px;
    font-weight: 100;
}

.service-tab h3 {
    font-size: 32px;
    margin-bottom: 30px;
}

.service-tab p {
    line-height: 24px;
    margin-bottom: 30px;
}

.btn-general {
    font-family: "Roboto Condensed", sans-serif;
    border-radius: 28px;
    font-size: 13px;
    text-transform: uppercase;
    margin: 0 6px;
    padding: 12px 46px 12px 46px;
    -webkit-transition: all .5s;
    transition: all .5s;
}

.btn-yellow {
    color: #fff;
    border: 1px solid #fb527a;
    background-color: #fb527a;
}

.btn-yellow:hover,
.btn-yellow:focus {
    color: #fff;
    background-color: #212226;
    border: 1px solid #212226;
}

.btn-white {
    color: #212226;
    border: 1px solid #fff;
    background-color: #fff;
}

.improv {
    padding: 20px 20px;
    font-weight: bold;
    font-size: 25px;
    color: gray;
}



.improv hr {
    width: 30%;
    border: 2px solid greenyellow;
    border-radius: 50%;
    margin-left: 34%;
}
@media only screen and (max-width: 800px){
.hidetabbing{
        display: none;
    }
}
   </style>









   <script>
    
   $(function () {

    $("#services-tabs").responsiveTabs({
        animation: "slide"
    });

          
    
     $(".gallery").magnificPopup({
        delegate: ".popimg",
        type: "image",
        gallery: {
            enabled: true
        }
    });
      $(".gallery").isotope({
      // options
      itemSelector: ".items"
    });

    var $gallery = $(".gallery").isotope({
      // options
    });

    // filter items on button click
    $(".filtering").on( "click", "span", function() {

        var filterValue = $(this).attr("data-filter");

        $gallery.isotope({ filter: filterValue });

    });

    $(".filtering").on( "click", "span", function() {

        $(this).addClass("active").siblings().removeClass("active");

    });

}); 

    
    
    </script>

   <section class="hidetabbing">

     <div id="services-02">

            <div class="content-box-md container">

                <div id="services-tabs">
  <br>
                    <div class="text-center mb-5 improv ">IMPROVEMENT <br> <hr></div><br><br>
                    <ul class="text-center improv1">
                        <li><a href="#service-tab-1">Responsive</a></li>
                        <li><a href="#service-tab-2">Optimization</a></li>
                        <li><a href="#service-tab-3">Web Design</a></li>
                        <li><a href="#service-tab-4">Development</a></li>
                    </ul>
<br>  
                    <!-- Service Tab 01 -->
                    <div id="service-tab-1" class="service-tab">

                        <div class="container">
                            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <div class="col-md-6">
                                    <img src="tabbing/a5.jpg" alt="creativity">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>01</h2>
                                        <h3>When Creativity Matters in life</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem perferendis quod debitis ab sed sapiente. Ducimus tempore, doloremque asperiores natus reprehenderit dignissimos beatae molestias tenetur cupiditate architecto culpa quibusdam velit magnam sapiente accusantium, repellat earum!</p>

                                        <div id="services-02-btn-01">
                                            <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Service Tab 02 -->
                    <div id="service-tab-2" class="service-tab">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="tabbing/r.jpg" alt="strategy">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>02</h2>
                                        <h3>All Web Needs Optimization to rank </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem perferendis quod debitis ab sed sapiente. Ducimus tempore, doloremque asperiores natus reprehenderit dignissimos beatae molestias tenetur cupiditate architecto culpa quibusdam velit magnam sapiente accusantium, repellat earum!</p>

                                        <div id="services-02-btn-02">
                                            <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Service Tab 03 -->
                    <div id="service-tab-3" class="service-tab">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="tabbing/j.jpg" alt="design">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>03</h2>
                                        <h3>Design Which Makes Wow</h3>
                                        <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem perferendis quod debitis ab sed sapiente. Ducimus tempore, doloremque asperiores natus reprehenderit dignissimos beatae molestias tenetur cupiditate architecto culpa quibusdam velit magnam sapiente accusantium, repellat earum!
                                        </p>

                                        <div id="services-02-btn-03">
                                            <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Service Tab 04 -->
                    <div id="service-tab-4" class="service-tab">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="tabbing/a3.jpg" alt="development">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>04</h2>
                                        <h3>Development and Interactivity in Web</h3>
                                        <p>
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem perferendis quod debitis ab sed sapiente. Ducimus tempore, doloremque asperiores natus reprehenderit dignissimos beatae molestias tenetur cupiditate architecto culpa quibusdam velit magnam sapiente accusantium, repellat earum!
                                        </p>

                                        <div id="services-02-btn-04">
                                            <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
    </div>
    </section>

'?>
