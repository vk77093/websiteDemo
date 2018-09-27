
<!DOCTYPE html>
<html>
<title>New Products range</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Cookie";}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 78px;
  bottom: 0;
  height: inherit;
}
    .active, .btn:hover {
    background-color: #666;
    color:red;
}
    #myDIV:hover{
        background-color: aqua;
        font-family: monospace;
        color: red;
    }
/*
    .w3-bar-item{
        color: red;
    }
*/
    
    
    .mytop{
       background-color: white;
    shadow: 10px 10px 25px 15px grey;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
</style>
    <style>
#myimage2:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

</style>
<body>

<!-- Navbar -->
<?php include("mainNavbar.php") ?>

<!-- Sidebar -->
    <div id="myDIV">
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-red w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>OUR PRODUCT</b></h4>
    
  <a class="one w3-bar-item  w3-button w3-hover-red" href="#firstside">Mayonnaise</a>
  <a class="one w3-bar-item w3-button w3-hover-red" href="#sandwichSpread">Sandwich Spread</a>
    
    


    <a class="w3-bar-item w3-button w3-hover-red" href="#secondSide">Salad Dressing</a>
  <a class="w3-bar-item w3-button w3-hover-red" href="#tomatokatchup">Tomato Ketchups</a>
    <a class="w3-bar-item w3-button w3-hover-red" href="#gravies">Gravies & Pastes</a>
    <a class="w3-bar-item w3-button w3-hover-red"href="#sauces">Sauces</a>
    <a class="w3-bar-item w3-button w3-hover-red"href="#dips">Dips</a>
    <a class="w3-bar-item w3-button w3-hover-red"href="#chocolate">Chocolate & Toppings</a>
    <a class="w3-bar-item w3-button w3-hover-red"href="#fruitPunches">Fruit Punches</a>
    <a class="w3-bar-item w3-button w3-hover-red"href="#global">Our Global Network</a>
    
<!--
    <a href="#firstside"><button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'firstside')">Mayonnaise</button></a>
  <a href="#sandwichSpread"><button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'sandwichSpread')">Sandwich Spread</button></a>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Tokyo')">Tokyo</button>
-->
</nav>
</div>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-conatiner w3-padding-16 w3-animate-left"id="firstside">
<div class="w3-main" style="margin-left:250px;margin-top:60px" >
<div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Our Wide Range of Mayonnaise</p>

        <div class="w3-third ">
           
                <div class="img-magnifier-container" style="shadow:box">
                <img id="myimage2" src="ResizedPhotos/Real%20Mayonnaise.jpg" style="width:60%">
                    </div>
                <div class="w3-container">
                    <h6>Real Mayo</h6>
<!--                    <a href="https://www.amazon.in/MuscleBlaze-Creatine-Monohydrate-Powder-100/dp/B00LLZ82O4" target="_blank"><button class="w3-button w3-hover-black">Add to Cart</button></a>-->
                     <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">SEE ME</button>
                    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4"style="max-width:400px">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>REAL MAYO</h2>
      </header>
      <div class="w3-container">
        <p>about me 1</p>
        <p>about me 2</p>
          <p>about me 3</p>
          <p>about me 4</p>
      </div>
        <hr>
        <p>Quantity :1.2kg</p>
      <footer class="w3-container w3-teal">
          <a href="https://www.amazon.in/MuscleBlaze-Creatine-Monohydrate-Powder-100/dp/B00LLZ82O4" target="_blank"> <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Add To Cards</button></a>
          <span class="w3-right w3-padding w3-hide-small">Price  &#x20B9; 150</span>
      </footer>
    </div>
  </div>
                </div>
            
        </div>

        <div class="w3-third">
            

                <img id="myimage2" src="ForWeb/02_Classic_Mayo.jpg" style="width:40%">

                <div class="w3-container">
                    <h6>Classic Mayo</h6>
                    <button onclick="document.getElementById('id02').style.display='block'"class="w3-button w3-green">SEE ME</button>
                    <div id="id02" class="w3-modal">
                        <div class="w3-modal-content w3-animate-right w3-card-4" style="max-width:400px">
                            <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
                            <h2>Classic Mayo</h2>
                            <div class="w3-container">
        <p>about me 1</p>
        <p>about me 2</p>
          <p>about me 3</p>
          <p>about me 4</p>
      </div>
        <hr>
        <p>Quantity :1.2kg</p>
      
          <a href="https://www.amazon.in/MuscleBlaze-Creatine-Monohydrate-Powder-100/dp/B00LLZ82O4" target="_blank"> <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Add To Cards</button></a>
          <span class="w3-right w3-padding w3-hide-small">Price  &#x20B9; 150</span>
      
                            
                        </div>
                    </div>
                </div>
    
    </div>



        <div class="zoomStyle w3-third">
            
                <img id="myimage2" src="ResizedPhotos/Mayo_Lite.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Mayo Lite</h6>
                     <button class="w3-button w3-red" style="width:40%;cursor:pointer"
    onclick="openModal();currentDiv(1)" class="w3-hover-shadow"> SEE ME</button>
                </div>
            <div id="myModal" class="w3-modal w3-black">
 <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal()" style="cursor:pointer">×</span>
 <div class="w3-modal-content">

  <div class="w3-content" style="max-width:300px">
   <img class="mySlides" src="ResizedPhotos/Mayo_Lite.jpg" style="width:100%">
   <img class="mySlides" src="ResizedPhotos/Mayo_Lite_A.jpg" style="width:100%">
   <img class="mySlides" src="ForWeb/03_Mayo_Lite.jpg" style="width:100%">
   <div class="w3-row w3-black w3-center">
    <div class="w3-display-container">
     <p id="caption"></p>
     <span class="w3-display-left w3-btn" onclick="plusDivs(-1)">❮</span>
     <span class="w3-display-right w3-btn" onclick="plusDivs(1)">❯</span>
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="ResizedPhotos/Mayo_Lite.jpg" style="width:100%" onclick="currentDiv(1)" alt="Front">
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="ResizedPhotos/Mayo_Lite_A.jpg" style="width:100%" onclick="currentDiv(2)" alt="back">
    </div>
    <div class="w3-col s4">
     <img class="demo w3-opacity w3-hover-opacity-off" src="ForWeb/03_Mayo_Lite.jpg" style="width:100%" onclick="currentDiv(3)" alt="Nutritions Fact">
    </div>
   </div> <!-- End row -->
  </div> <!-- End w3-content -->
  <div class="w3-container">
                    <button class="w3-button w3-red">Add To Cards</button>
                </div>
 </div> <!-- End modal content -->
                
</div> <!-- End modal -->
        </div>

        

    </div>
    <!---- Ist line Second Line----->
    <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
            <div class="">


            <img id="myimage2" src="ResizedPhotos/Cheese_Chilli_Mayonnaise.jpg" style="width:30%">

            <div class="w3-container">
                <h4>Tomato Chilli Mayo</h4>
                   <button onclick="document.getElementById('id03').style.display='block'"class="w3-button w3-green">SEE ME</button>
                    <div id="id03" class="w3-modal">
                        <div class="w3-modal-content w3-animate-bottom w3-card-4" style="max-width:400px">
                            <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
                            <h2>Tomato Chilli Mayo</h2>
                            <div class="w3-container">
                                <img src="ResizedPhotos/Cheese_Chilli_Mayonnaise_B.jpg" class="w3-circle" style="width:20%">
        <p>about me 1</p>
        <p>about me 2</p>
          <p>about me 3</p>
          <p>about me 4</p>
      </div>
        <hr>
        <p>Quantity :1.2kg</p>
      
          <a href="https://www.amazon.in/MuscleBlaze-Creatine-Monohydrate-Powder-100/dp/B00LLZ82O4" target="_blank"> <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Add To Cards</button></a>
          <span class="w3-right w3-padding w3-hide-small">Price  &#x20B9; 150</span>
      
                            
                        </div>
                    </div>
                
            </div>
        </div>
            </div>


            <div class="zoomStyle w3-third">
                <div class="">
                <img id="myimage2"src="ForWeb/05_Cheese_Chilli_Mayo.JPG" style="width:25%">
                <div class="w3-container">
                <h4>Tomato Cheesn Chilli Mayo</h4>
                </div>
            </div>
                </div>
    </div>
  
  </div>
        </div>
    <hr>

    <!---- second Data Line----->
    <div class="w3-conatiner w3-padding-16 w3-animate-top"id="secondSide">
    <div class="w3-main" style="margin-left:250px;margin-top:60px" >
        <div class="w3-row-padding w3-padding-32 w3-margin-top w3-center" style="margin-top: auto">

<p class="w3-center w3-xlarge">Wide Range of salad Dressing</p>
        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/06_Cheezy_Dressing.jpg" style="width:40%">
                    </div>
                <div class="w3-container">
                    <h6>Cheezy Dressing</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="ForWeb/07_Cheese_Sauce.jpg" style="width:40%">

                <div class="w3-container">
                    <h6>Cheese Sauce</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ForWeb/08_Thousand_Island.jpg" style="width:40%">
                <div class="w3-container">
                    <h6>Thousand Island</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage2" src="ForWeb/09_Chipotle_Mayonnaise.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Chipotle</h6>
                </div>
            </div>
        </div>

    </div>
        <!--- 2nd row second Line----->
        <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
            <div class="">


            <img id="myimage2" src="ForWeb/10_Honey_Mustard.JPG" style="width:30%">

            <div class="w3-container">
                <h4>Honey Mustard</h4>
            </div>
        </div>
            </div>


            <div class="zoomStyle w3-third">
                <div class="">
                <img id="myimage2" src="ForWeb/11_Sweet_Onion.JPG" style="width:30%">
                <div class="w3-container">
                <h4>Sweet Onion</h4>
                </div>
            </div>
                </div>

        <div class="zoomStyle w3-third">
        <div class="">
            <img id="myimage2" src="ForWeb/12_South_West.JPG" style="width:30%">
            <div class="w3-container">
            <h4>South West</h4>
            </div>
            </div>
        </div>
        </div>

 
  </div> 
    </div>
    <hr>
        
        <!--- Third side---->
     <div class="w3-conatiner w3-animate-zoom w3-padding-32 "id="dips">
        <div class="w3-main" style="margin-left:250px;margin-top:60px" >

  <div class="w3-row-padding w3-padding-32 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of salad Dips</p>

        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ResizedPhotos/Cheese_Jalapeno.jpg" style="width:50%">
                    </div>
                <div class="w3-container">
                    <h6>Cheese Jalapeno</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Mint Mayonnaise</h6>
                </div>
        
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ResizedPhotos/Mexican_Salsa_EVOH.jpg" style="width:54%">
                <div class="w3-container">
                    <h6>Mexican Salsa</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Chilli Garlic</h6>
                </div>
            </div>
        </div>
 
    </div>
            <!---- third line 2nd row---->
            <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ResizedPhotos/Red_Chilli_Sauce.jpg" style="width:35%">
                    </div>
                <div class="w3-container">
                    <h6>Red Chilly Sauce</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Thai Chilli</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Black Paper Yougurt</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Kabab Mint Yogurt</h6>
                </div>
            </div>
        </div>
 
    </div>
           
         </div>
    </div>
         <hr>
    <!----- sandwich Spread Data----->
         <div class="w3-conatiner w3-padding-16"id="sandwichSpread">
<div class="w3-main" style="margin-left:250px;margin-top:60px" >
<div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of Sandwich Spread</p>

        <div class="w3-third">
           
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Sandwich Spread</h6>
                </div>
            
        </div>

        <div class="w3-third">
            

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Tandoori Mayo</h6>
                </div>
    
    </div>



        <div class="zoomStyle w3-third">
            
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Tandoori Pizza Gravy</h6>
                </div>
            
        </div>

        

    </div>
    <!---- Ist line Second Line----->
    <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
            <div class="">


            <img src="Catalogue/Litchi%20Crush.jpg" style="width:25%">

            <div class="w3-container">
                <h4>Junglee Sandwich Spread</h4>
            </div>
        </div>
            </div>


            <div class="zoomStyle w3-third">
                <div class="">
                <img src="Catalogue/Pineapple%20Crush.jpg" style="width:25%">
                <div class="w3-container">
                <h4>Tartar Sauce</h4>
                </div>
            </div>
                </div>
    </div>
  
  </div>
        </div>
    <hr>
    <!---- Tomato Ketchups Data-----12 items--->
    <div class="w3-conatiner w3-padding-32"id="tomatokatchup">
        <div class="w3-main" style="margin-left:250px;margin-top:60px" >

  <div class="w3-row-padding w3-padding-32 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of Tomato Ketchups</p>

        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ResizedPhotos/Snack_Dressing.jpg" style="width:45%">
                    </div>
                <div class="w3-container">
                    <h6>Snack Dressing</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="ResizedPhotos/Snack_Dressing_EVOH.jpg" style="width:65%">

                <div class="w3-container">
                    <h6>Snack Dressing</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ResizedPhotos/Tomato_Ketchup.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Tomato Katchup</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="ResizedPhotos/Tomato_Ketchup_G.jpg" style="width:50%">
                <div class="w3-container">
                    <h6>Tomato Katchup NOG</h6>
                </div>
            </div>
        </div>
 
    </div>
            <!---- third line 2nd row---->
            <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/30_Tomato_Ketchup_Squeezy.JPG" style="width:40%">
                    </div>
                <div class="w3-container">
                    <h6>Tomato Katchup Squeezy</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="ResizedPhotos/Tomato_Ketchup_H.jpg" style="width:45%">

                <div class="w3-container">
                    <h6>Tomato Katchup 8g</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ForWeb/31_Tomato_Ketchup_Glass_Bottle.JPG" style="width:30%">
                <div class="w3-container">
                    <h6>Tomato Katchup Bottel</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="ForWeb/33_Tomato_Ketchup_9g.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Tomato Katchup 9g</h6>
                </div>
            </div>
        </div>
 
    </div>
            <!---- 3rd Line ----->
            <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/34_Tomato_Ketchup_12g.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Tomato Katchup 12g</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="ForWeb/39_Tomato_Ketchup_15g.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Tomato Katchup 15g</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ResizedPhotos/Tomato_Ketchup_EVOH.jpg" style="width:75%">
                <div class="w3-container">
                    <h6>Tomato Katchup</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="ResizedPhotos/Tomato_Ketchup_I.jpg" style="width:55%">
                <div class="w3-container">
                    <h6>Tomato Katchup</h6>
                </div>
            </div>
        </div>
 
    </div>
           
         </div>
    </div>
    <hr>
    <!----- Sauces sections----->
<div class="w3-conatiner w3-padding-32"id="sauces">
        <div class="w3-main" style="margin-left:250px;margin-top:60px" >

  <div class="w3-row-padding w3-padding-32 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of Our Sauces</p>

        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/40_Pizza_Topping.JPG" style="width:48%">
                    </div>
                <div class="w3-container">
                    <h6>Pizza Tropping</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="ResizedPhotos/Caramel_Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Caramel Tropping</h6>
                    
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Pasta Sauce</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="ResizedPhotos/Italian_Pizza_Pasta.jpg" style="width:55%">
                <div class="w3-container">
                    <h6>Italian Pizza Pasta</h6>
                </div>
            </div>
        </div>
 
    </div>
            <!---- third line 2nd row---->
            <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Italian Pizza Pasta NOG</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Pizza Americana</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Mustard Sauce</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Schezwan Sauce</h6>
                </div>
            </div>
        </div>
 
    </div>
           
         </div>
    </div>
    <hr>
    <!---- Gravies Secotion----->
    <div class="w3-conatiner w3-padding-32"id="gravies">
        <div class="w3-main" style="margin-left:250px;margin-top:60px" >

  <div class="w3-row-padding w3-padding-32 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of Our Gravies & Paste</p>

        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Makhni Gravy</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>White Gravy</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Yellow Gravy</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Brown Gravy</h6>
                </div>
            </div>
        </div>
 
    </div>
            <!---- third line 2nd row---->
            <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>BHunna Masala</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Chunky Choopad Masala</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ResizedPhotos/Mexican_Salsa_EVOH.jpg" style="width:55%">
                <div class="w3-container">
                    <h6>Mexican Patse</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Italian Paste</h6>
                </div>
            </div>
        </div>
 
    </div>
           <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-third">
           
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Green Thai Paste</h6>
                </div>
            
        </div>

        <div class="w3-third">
            

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Red Thai Paste</h6>
                </div>
    
    </div>



        <div class="zoomStyle w3-third">
            
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Chinese Paste</h6>
                </div>
            
        </div>

        

    </div> 
           
         </div>
    </div>
    <!---- chocolate and Troppping Section----->
    <div class="w3-conatiner w3-padding-32"id="chocolate">
        <div class="w3-main" style="margin-left:250px;margin-top:60px" >
     <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">

<p class="w3-center w3-xlarge">Wide Range of Our Chocolate & Toppings</p>
        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/59_Chocolate_Dressing.JPG" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Chocolate Dressing</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:35%">

                <div class="w3-container">
                    <h6>Butterscotch Dressing</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="ForWeb/61_Caramel_Dressing.JPG" style="width:30%">
                <div class="w3-container">
                    <h6>Caramel Dressing</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="zoomStyle">
                <img id="myimage3" src="Catalogue/Chilli%20Garlic.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Hot Fudge</h6>
                </div>
            </div>
        </div>

    </div>
        </div>
    </div>
    <!----- Fruit punches Side----->
    <div class="w3-conatiner w3-padding-16"id="fruitPunches">
<div class="w3-main" style="margin-left:250px;margin-top:60px" >
<div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">
<p class="w3-center w3-xlarge">Wide Range of Fruit Punches</p>

        <div class="w3-third">
           
                <div class="img-magnifier-container">
                <img id="myimage2" src="ForWeb/63_Pineapple.jpg" style="width:25%">
                    </div>
                <div class="w3-container">
                    <h6>Pineapple</h6>
                </div>
            
        </div>

        <div class="w3-third">
            

                <img id="myimage2" src="ForWeb/64_Strawberry.jpg" style="width:25%">

                <div class="w3-container">
                    <h6>Strawberry</h6>
                </div>
    
    </div>



        <div class="zoomStyle w3-third">
            
                <img id="myimage2" src="ResizedPhotos/Mango_Crush.jpg" style="width:40%">
                <div class="w3-container">
                    <h6>Mango</h6>
                </div>
            
        </div>

        

    </div>
    <!---- Ist line Second Line----->
    <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
            <div class="">


            <img src="ResizedPhotos/Litchi_Crush.jpg" style="width:30%">

            <div class="w3-container">
                <h4>Litchi Crush</h4>
            </div>
        </div>
            </div>


            <div class="zoomStyle w3-third">
                <div class="">
                <img src="Catalogue/Pineapple%20Crush.jpg" style="width:30%">
                <div class="w3-container">
                <h4>Blackcurrant</h4>
                </div>
            </div>
                </div>
        
        <div class="zoomStyle w3-third">
                <div class="">
                <img src="ResizedPhotos/Kiwi_Crush.jpg" style="width:30%">
                <div class="w3-container">
                <h4>Kiwi </h4>
                </div>
            </div>
                </div>
    </div>
  
  </div>
        </div>
    <!---- Global Partner---->
    <div class="w3-conatiner w3-padding-16"id="global">
    <div class="w3-main" style="margin-left:250px;margin-top:60px" >
    
    <?php include('globalpartner.php') ?>
    </div>
    </div>
    <!---- Foooter Side---->
    <div class="w3-main" style="margin-left:150px;margin-top:60px" >

  <?php include("footer.php") ?>
    </div>
<!-- END MAIN -->


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
    
   

</script>
   <script>
    <script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
    
    <!---- image with Modal Image---->
    
        <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
      
    
        
     
       
</body>
</html>