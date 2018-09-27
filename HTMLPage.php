<!DOCTYPE html>
<html>

<title>FOODCOAST project 2 </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Raleway", sans-serif
}

body,
html {
    height: 100%;
    line-height: 1.8;
}



.w3-bar .w3-button {
    padding:16px;

}
.w3-bar .w3-button:hover{
  background-color: blue;

}


    #upcoming {
        background-image: url('Images/forestbridge.jpg');
        min-height: 90%;
        background-position: center;
        background-size: cover;
    }


    .mySlides{
        min-height: 50%;
    }
    .slideshow-container {
  max-width: 100%;
    margin-top: 10px;
  position: relative;
  margin: auto;
}
.myaction:hover{
    margin-left:15px;


}
    .mytop{
       background-color: yellow;
       
    box-shadow: 10px 10px 5px #C8C8C8;
        
    }
    .mytop2{
         
    }


     .backgroundStyle{
        background-color: antiquewhite;
/*
         background-image: url("Images/tree2.jpg");
         background-repeat: repeat-y;
*/
         

    }
   /* .backproduct{
        background-image: url(Images/productBack.gif);
    }
    .stback{
        background-image: url(Images/flowerBack.gif)
    } */


</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top ">

        <div class="w3-bar w3-white mytop" id="myNavbar">
            <!---<a href="#home" class="w3-bar-item w3-button w3-wide"><<b>FOODCOAST INTERNATIONAL</b></a>--->
               <a href="#home"> <img src="Images/FCI%20Logo%2080x140.jpg" class="w3-red"w3-bar-item w3-button w3-wide alt="LOGO" style="width: auto;background-color:red"></a>
            <!-- Right-sided navbar links -->

            <div class="w3-right w3-hide-small">
                <div class="w3-dropdown-hover">

                    <a href="#about"><button class="w3-button w3-white mytop2">ABOUT US <!--<i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i>---></button></a>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4 ">
                        <a href="#coprateJourney" class="w3-bar-item w3-button myaction">Our Coporate Journey</a>
                        <a href="#vison" class="w3-bar-item w3-button  myaction">Mission & Vision</a>
                        <a href="#ethics" class="w3-bar-item w3-button myaction">Work Ethics </a>
                        <a href="certificate.php" class="w3-bar-item w3-button myaction">Certificate</a>
                        <a href="carrierForm.php"class="w3-bar-item w3-button myaction">Career</a>
                        <!--                        <a href="#team" class="w3-bar-item w3-button">Our Team </a>-->


                    </div>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button mytop2">FOOD SERVICE <!---<i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i>---></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <!--        <a href="#work" class="w3-bar-item w3-button">Our Products</a>-->
                        <a href="newproductdemo.php" class="w3-bar-item w3-button myaction">Institutional Product Range </a>
                        <a href="mapsPic.php" class="w3-bar-item w3-button myaction">	Nationwide/ Our Presence</a>


                    </div>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button mytop2">RECIPE <!---<i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i>---></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="MainSalads.php" class="w3-bar-item w3-button myaction">Salads</a>
                        <a href="deserts.php" class="w3-bar-item w3-button myaction">Desert's</a>
                        <a href="drinkCoofiee.php" class="w3-bar-item w3-button myaction">Drink</a>
                        <a href="party.php" class="w3-bar-item w3-button myaction">Party</a>

                    </div>
                </div>

                <div class="w3-dropdown-hover">
                    <button class="w3-button mytop2">MEDIA <!---<i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i>--></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="pressRoom.php" class="w3-bar-item w3-button myaction">Press Room </a>
                        <a href="Glimps2.php" class="w3-bar-item w3-button myaction">Glimpse 2017-18</a>
                        <a href="blog.php" class="w3-bar-item w3-button myaction">Blog</a>

                    </div>
                </div>




                <!--      <a href="" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Blog</a>-->
                <a href="#pricing" class="w3-bar-item w3-button"><i></i>UPCOMING</a>
                <a href="#contact" class="w3-bar-item w3-button"><i></i>CONTACT US</a>
            </div>
            <div class="w3-display-bottomright w3-xlarge" style="padding:-5px 48px; margin-top: 400px">
                   <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official w3-hover-blue" style="color:blue"></i></a>
   <i class="fa fa-instagram  w3-hover-red" style="color:#ff531a"></i>
    <i class="fa fa-twitter w3-hover-blue" style="color:lightblue"></i>
<i class="fa fa-linkedin w3-hover-blue" style="color:#4da6ff"></i>
   <i class="fa fa-pinterest-p w3-hover-red " style="color:red"></i>


 </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <div class="w3-right w3-hide-small">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close &times;</a>

            <div class="w3-dropdown-hover">

                <a href="#about" class="w3-button w3-mobile" onclick="w3_close()">ABOUT US <i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i></a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#coprateJourney" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Our Corporate Journey </a>
                    <a href="#vison" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Mission & Vision </a>
                    <a href="#ethics" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Work Ethics </a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Certificate</a>
                    <!--                        <a href="#team" class="w3-bar-item w3-button w3-mobile">Our Team </a>-->




                </div>
            </div>

                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-mobile" onclick="w3_close()">Food Service <i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <!--        <a href="#work" class="w3-bar-item w3-button">Our Products</a>-->
                            <a href="Iamges.html" onclick="w3_close()" class="w3-bar-item w3-button w3-mobile">Institutional Product Range </a>
                            <a href="mapsPic.html" target="_blank" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">	Nationwide/ Our Presence</a>


                        </div>
                    </div>


                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-mobile" onclick="w3_close()">Recipe <i class="fa fa-angle-double-down" style="font-size:18px;color:red"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Food</a>
                            <a href="#" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Cook 2</a>
                            <a href="#" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Drink</a>
                            <a href="#" class="w3-bar-item w3-button w3-mobile" onclick="w3_close()">Quick Prepare </a>

                        </div>
                    </div>

                    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button w3-mobile">UPCOMING</a>
                    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-mobile">CONTACT</a>
        </div>
    </nav>

    <!-- Header with full-height image -->
    <div class="backgroundStyle mytop">
    <div class="slideshow-container" style="width:75%">
<!--        <div class="w3-content w3-display-container" style="max-width:90%;min-height: 400px; padding-bottom:1px" >-->
<!--         <header class="bgimg-1 w3-content w3-display-container" style="max-width:100%" id="home">-->




    <div class="w3-display-left w3-text-white" style="padding:10px">
    <span class="w3-jumbo w3-hide-small w3-hide-medium"><!--Taste Something that Matters--></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium" ><!--Taste Something Matters--></span><br>
   <blockquote> <span class="w3-large"><!--The Authentic Taste And Flavour which you wants to Taste--></span></blockquote>
    <p><a href="#about" class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">See more and start today Flavour</a></p>
  </div>
<!--           <div class="w3-container" style="max-width: 100%;max-height: 50%">-->
  <img class="mySlides" src="Images/one_opt.jpg" style="width:100%">
  <img class="mySlides" src="Images/two_opt.jpg" style="width:100%;">
  <img class="mySlides" src="Images/three_opt.jpg" style="width:100%">
  <img class="mySlides" src="Images/fourth_opt.jpg" style="width:100%">
        <img class="mySlides" src="Images/five_opt.jpg" style="width:100%">
        <img class="mySlides" src="Images/six_opt.jpg" style="width: 100%">
        <img class="mySlides" src="Images/seven_opt.jpg" style="width: 100%">
        <img class="mySlides" src="FoodImages/_MG_7096_opt%20(1).jpg" style="width: 100%">
        <img class="mySlides" src="Images/nine_opt.jpg" style="width: 100%">
        <img class="mySlides" src="Images/ten_opt.jpg" style="width: 100%">
        <img class="mySlides" src="Images/elven_opt.jpg" style="width: 100%">
        <img class="mySlides" src="Images/12th_opt.jpg" style="width: 100%">

<!--             </div>-->

          <!-- <div class="w3-xxlarge w3-section">
    <div class="w3-display-bottomleft w3-text-grey w3-xxlarge" style="padding:14px 48px">
    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
          </div> -->
<button class="w3-button w3-light-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-light-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>

        </div>
        </div>





      <!-- About Section -->

    <div class="w3-container" style="padding:38px 10px" id="about">

        <h3 class="w3-center w3-text-red w3-hover"style="font-family:sans-serif;color:  #ff0000"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000" > ABOUT THE COMPANY</span></h3>
        <p class="w3-large w3-serif" style="margin-left:150px;margin-right:150px">Foodcoast International is a part of HR Group of Industries and is into manufacturing of processed food products like Mayonnaise, Ketchups, Sandwich Spreads, Dips, Gravies, Pastes and Crushes for both Indian and world cuisines under the brand name FOODCOAST. The company was established in 2009 as a trading unit. We initiated with a pilot setup in 2010 and now are spread over an area of 12000 sq meters. The prime focus of the company has been on food service sector and HoReCa since its inception. The company is also selling through modern trade in stores such as Metro, Walmart, Auchan and Reliance. The effort and team work of more than 500 distributors together with our employees has helped Foodcoast to grow remarkably. The group is an ISO 9001:2000, FSSC-22000, SA 8000 and ISO 14000 Certified. It has an annual turnover of USD 60 million and a workforce of over 3500 employees.
        </p>
        <hr>
        <h3 class="w3-center w3-text-dark-black"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000" >INFRASTRUCTURE</span></h3>
        <p class="w3-serif w3-large" style="margin-left:150px;margin-right:150px">FCI is spread over an area of 12000 sq meters and is equipped with World- class machinery. State-of-the- art infrastructure, unique quality policy and dedicated workforce are the strongest pillars behind its success code. FCI operates its business with more than 500 prominent distributors across the globe.</p>
        </div>

       <hr>
    <!---- Our coprate Journey -->
    <div class="w3-container w3-light-white" style="padding:5px 10px" id="coprateJourney">
        <p class="w3-center w3-xlarge w3-text-dark-black w3-bold"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000">Our Corporate Journey So Far</span></p>
        <p class="w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">
            <sapn>The solid foundation of the HR Group of Industries was laid in 1952 by a futuristic visionary it's Chairman, Late Pandit Harbans Lal Sharma, an ex- air force officer. The Group though had a modest start, is, today the biggest hand tools manufacturing group in India. The group is selling engineering products in various parts of the world including Europe, United States, Canada, Middle East, Far East and catering to Indian market as well. The group has grown manifolds in the last decade and has indulged in manufacturing of high-pressure pipe fittings, automotive parts, spanners, pliers, wrenches, hammers, axes and processed food products like ketchups, dips, mayonnaise, crushes etc. Total dedication to quality has made it possible for the group to achieve a proud position in the global market.</sapn>
        </p>
    </div>
        <hr>
    <!---Mission And Vison center-->
    <div class="w3-container w3-white" style="padding:30px 16px" id="vison">
        <p class="w3-center w3-xlarge w3-text-dark-black"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000">Our Vison And Mission</span></p>

            <h2 class="w3-xlarge w3-text-red"style="margin-left:150px;margin-right:150px">Vision</h2>

        <p class=" w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px" >To transform Indian food processing industry by catering real Indian flavors across the globe. Delivering committed, customized and consistent service, thus, making FOODCOAST, a force to reckon with.</p>

        <h2>
        <p class="w3-xlarge w3-text-red" style="margin-left:150px">Mission</p>
        </h2>
        <p class=" w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">We create the most authentic and finest flavors for Indian palates for catering organic Indian tastes worldwide, thereby taking “ Foodcoast to every coast” at affordable prices. </p>
    </div>
        <hr>

    <!---- Works ethics Section-->
    <div class="w3-container w3-light-white" style="padding:50px 10px" id="ethics">
        <h3 class="w3-center w3-xlarge w3-text-dark-black"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000">Our Core Work Ethics</span></h3><br>
        <ul>
            <h3 class="w3-xlarge w3-text-red"style="margin-left:105px">Commitment to Serve</h3>
        </ul>

        <p class="w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">We see our business associates and customers as our core strength. We connect with the customers to deliver extraordinary services anywhere and everywhere. We envisage the company to become an outstanding partner to our customers by ensuring commitment of delivering the best quality of products and contemporary flavours to relish.</p>

        <ul>
            <h3 class="w3-xlarge w3-text-red"style="margin-left:105px">RIGHT IN FIRST TIME</h3>
        </ul>
        <p class="w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">Foodcoast believes in - RIGHT IN FIRST TIME. To achieve this Foodcoast has engaged a team for quality assurance to review all the factors related to production - from raw material to finished goods. We are equipped with both chemical and microbiological labs integrated with the latest testing equipment. A team for R&D has also been engaged to create new products so as to offer great choices to the consumers, reduce costs, improve nutritional value of food "Keeping Indian palates in Mind"

        <ul>
            <h3 class="w3-xlarge w3-text-red"style="margin-left:105px">Total Quality Management</h3>
        </ul>
        <p class="w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">We endeavor to manufacture and develop products of finest quality and the taste by means of
            world-class machinery and a dedicated workforce. Our production is based on time tested principles of
            JIT (Just In Time) and TQM (Total Quality Management) to keep us abreast with a wide spectrum of
            products which are manufactured in accordance with the set standards
        </p>

        <ul>
            <h3 class="w3-xlarge w3-text-red"style="margin-left:105px">Quality Check</h3>
        </ul>
        <p class="w3-lobster w3-serif w3-large"style="margin-left:150px;margin-right:150px">FCI endeavors to keep up its commitment to customer service by relying upon time tested principals of “Just in Time” (JIT) and “Total Quality Management” (TQM). Quality assurance department conducts a standard quality check procedure to ensure premium quality of products. Top- notch chemical & microbiological labs are equipped with the latest testing equipment to deliver the best quality
        <blockquote style="margin-left:150px;margin-right:150px"><p class="w3-wide w3-large"><strong>"FCI quality assurance team ensures optimal nutritional value infused with great flavor packaged in a
            secure packaging as a gift to mankind"</strong></p></blockquote>
    </div>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-light-grey" style="padding:12px 10px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>We know How To make Food Delcious</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
                <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th">&nbsp;</i> View Our Products</a></p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large" src="FoodImages/cake2.jpg" alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>


    <!-- Team Section -->
    <div class="stback">
        <div class="w3-container" style="padding: 20px 10px"id="team">
            <h3 class="w3-center"style="line-height: 1.2px"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000">THE TEAM</span></h3>

             <div class="w3-row-padding" style="margin-top:0px">
                 <h3 class="w3-center">Our Inspiration</h3>


                     <div class="w3-container w3-center" style="width: 40%;margin-left: 400px">
                         <img src="Catalogue/2.jpg" style="width:40%">
                         <h6>Late Pandit Harbans Lal Sharma</h6>
                            <p class="w3-opacity"style="line-height: 1.2px">Founder, HR Group of Industruies</p>
                     </div>


                 <!--- 2nd Line--- ist img---->


                 <div class="w3-row-padding w3-margin-top" style="margin-left: 280px;margin-right: 180px">
                     <div class="w3-third w3-center">
                    <div class="w3-container" style="width: 70%">
                        <img src="Catalogue/3%20sir.jpg" style="width:100%">

                           <h6>Sudarshan Sharma</h6>
                            <p class="w3-opacity" style="line-height: 1.2px">Managing Director</p>
                        </div>

                </div>
                     <!---- 2nd imgae---->
                     <div class="w3-third w3-center">
                     <div class="w3-container" style="width: 70%">
                        <img src="Catalogue/4.jpg" style="width: 100%" >

                            <h6>Suresh Sharma</h6>
                            <p class="w3-opacity" style="line-height: 1.2px">Director</p>
                        </div>

                </div>
                     <!--- 3rd image---->
                     <div class="w3-third w3-center">
                         <div class="w3-container" style="width: 70%">
                             <img src="Catalogue/5.jpg" style="width: 100%">

                             <h6>Naresh Sharma</h6>
                             <p class="w3-opacity" style="line-height: 1.2px">Director</p>
                         </div>
                     </div>


                 </div>
                 <!--- 3rd line 1st image----->

                     <div class="w3-row-padding w3-margin-top"style="margin-left: 280px;margin-right: 180px">
                     <div class="w3-third w3-center">
                   <div class="w3-container" style="width: 70%">
                        <img src="Catalogue/6.jpg" style="width: 100%">

                           <h6>Sushant Sharma</h6>
                            <p class="w3-opacity" style="line-height: 1.2px">Director</p>
                        </div>

                </div>
                         <!--- 2nd image---->
                         <div class="w3-third w3-center">
                    <div class="w3-container" style="width: 70%">
                        <img src="Catalogue/7.jpg" style="width: 100%">

                           <h6>Rishi Raj Sharma</h6>
                            <p class="w3-opacity" style="line-height: 1.2px">Director</p>
                        </div>

                </div>
                         <!----3rd image---->
                         <div class="w3-third w3-center">
                   <div class="w3-container" style="width: 70%">
                        <img src="Catalogue/8.jpg" style="width: 100%">

                           <p>Shivam Sharma</p>
                            <p class="w3-opacity" style="line-height: 1.2px">Director</p>
                        </div>

                </div>


                 </div>

            </div>
        </div>
        </div>




    <!-- Promo Section "Statistics" -->
<!--
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">27+</span>
            <br>States
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">55+</span>
            <br>Wide range of Products
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">800+</span>
            <br>Distributors
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">42+</span>
            <br>Super Stockiest
        </div>
    </div>
--><


    <!-- Work Section -->
    <hr>
    <div class="w3-conatiner w3-center">
  <img src="menuImages/creativehomepage.png" style="width:100%">
</div>
<hr>
    <div class="w3-container" style="padding:8px 7px" id="work">
        <h3 class="w3-center"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000">OUR PRODUCTS</span></h3>
        <p class="w3-center w3-large">Our some Products Which You Wants To Taste</p>

        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-col l3 m6">
                <img src="FoodImages/one_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Fruits">
            </div>
            <div class="w3-col l3 m6">
                <img src="FoodImages/second.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
            </div>
            <div class="w3-col l3 m6">
                <img src="FoodImages/three_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
            </div>
            <div class="w3-col l3 m6">
                <img src="Images/fourth_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
            </div>

        </div>

        <div class="w3-row-padding w3-section">
            <div class="w3-col l3 m6">
                <img src="Images/five_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
            </div>
            <div class="w3-col l3 m6">
                <img src="FoodImages/6th.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
            </div>
            <div class="w3-col l3 m6">
                <img src="Images/seven_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
            </div>
            <div class="w3-col l3 m6">
                <img src="Images/12th_opt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
            </div>
        </div>
        <div>
            <a href="FoodMenu.php" target="_self"><button class="w3-button w3-light-white w3-block"><i class="fa fa-hand-o-right" style="font-size:36px;color:greenyellow" ></i>See More products</button></a>

        </div>
    </div>


    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">&times;</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>

        </div>
    </div>


    <!-- Skills Section -->
    <div class="w3-container w3-light-grey w3-padding-64">

        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Its all About Customer Taste</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Sauoses</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Creams</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Mayonnasise</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                </div>
            </div>
        </div>
    </div>

    <!---New Products Section --->
    <h1>Upcoming Products</h1>
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div id="upcoming" style="background-image:url('Images/forestbridge.jpg')">
            <div class="w3-container w3-center w3-dark-grey" style="padding:240px 160px" id="pricing">

                <div class="w3-display-middle">
                    <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
                    <hr class="w3-border-grey" style="margin:auto;width:40%">
                    <p class="w3-large w3-center">35 days left</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:12px 16px" id="contact">
        <h3 class="w3-center"><span class="w3-text-red" style="font-family:sans-serif;color:  #ff0000">CONTACT</span></h3>
        <p class="w3-center w3-large"style="line-height: 1.2px">Lets get in touch. Send us a message:</p>
        <div class="w3-row-padding" style="margin-top:34px">
            <div class="w3-half">
                <p class="w3-small"><i class="fa fa-map-marker fa-fw w3-xlarge w3-margin-right"></i>Foodcoast International A-23A Focal Point Extension,Jalandhar-144004</p>

                <p class="w3-small"><i class="fa fa-phone fa-fw w3-xlarge w3-margin-right"></i><b> Phone: 1800 274 274 0 ,  91 181 5077771/72</b></p>
                <p class="w3-small"><i class="fa fa-envelope fa-fw w3-xlarge w3-margin-right"> </i> Email:     info@foodcoast.com</p>
                <br>
                <form action="" target="_blank">
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" name="name"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" name="emails"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject" name="subjects"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Query" required name="Message" name="queryData"></p>
                    <p>
                        <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND QUERY
          </button>
                    </p>
                </form>
            </div>
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3" style="width:100%;height:410px;"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer class="w3-center w3-black w3-padding-64">
        <a href="" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>

        <p>Crafted by <i class="fa fa-hand-peace-o" style="font-size:24px;color:red"></i> <a href="" title="W3.CSS" target="" class="w3-hover-text-green">Vijay Kumar</a></p> -->
                <?php include('footer.php') ?>
    </footer>


    <!-- Add Google Maps -->
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(31.366778, 75.574660);
            var mapOptions = {
                center: myCenter,

                zoom: 12,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE,
            });
            marker.setMap(map);
        }map

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

    </script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBYyj0lk0Lp8wR1wxnUGPvkt4caXJAeIs&callback=myMap"></script>

    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 3 seconds
        }

    </script>
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>

</html>
