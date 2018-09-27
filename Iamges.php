
<!DOCTYPE html>
<html>
<title>our Instutional </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!---- Magnigfy style---->
    <style>
/* * {box-sizing: border-box;}
.img-magnifier-container {
  position:relative;
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 150px;
  height: 150px;
} */
</style>
    <!---- New image Shake Style---->
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
    <!----- Image Flip Demo---->
    <style>
#myimage3:hover {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    background-image: url('Catalogue/Cheezy%20Dressing.jpg');
}
/*
        #myimage3:hover{
             background-image: url('Catalogue/Cheezy%20Dressing.jpg');
            min-height: 100%;
        background-position: center;
        background-size: cover;
        }
*/
</style>
    <!---- style for image over Style Like some show text uper--->
    <style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.myimage4 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color:lightblue;
}

.container:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
</style>
    <!---- Slide In right side Overalay of image ----->
    <style>
.container2 {
  position: relative;
  width: 100%;
}

.myimage5 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay2 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: lightskyblue;
  overflow:hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}
        .overlayLeft{
            position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: lightskyblue;
  overflow:hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
        }

.container2:hover .overlay2,.overlay3 {
  width: 100%;
}
        .container2:hover .overlay3 {
  width: 100%;
            left: 0;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}
#side{
    margin-left:5px;
    margin-top: 90px;
}
</style>
<!-- <script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script> -->

<body>


  <?php
include("mainNavbar.php");
  ?>
<div id="side">
    <div class="w3-row-padding w3-padding-16 w3-margin-top w3-center" style="margin-top: auto">


        <div class="w3-quarter">
            <div class="">
                <div class="img-magnifier-container">
                <img id="myimage2" src="Catalogue/Buttor%20Scotch.jpg" style="width:30%">
                    </div>
                <div class="w3-container">
                    <h6>Butter Scotch</h6>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class=" ">

                <img id="myimage2" src="Catalogue/Caramel%20Topping.jpg" style="width:30%">

                <div class="w3-container">
                    <h6>Caramel Tropping</h6>
                </div>
            </div>
    </div>



        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage2" src="Catalogue/Cheezy%20Dressing.jpg" style="width:46%">
                <div class="w3-container">
                    <h6>Cheezy Dressing</h6>
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
    <div class="w3-row-padding w3-padding-16 w3-center">

        <div class="zoomStyle w3-quarter">
            <div class="">
                <img id="myimage3" src="Catalogue/Chinese%20Paste.jpg" style="width:48%">
                <div class="w3-container">
                    <h6>Chinese Paste</h6>
                </div>
            </div>
        </div>

        <div class="zoomStyle w3-quarter">
            <div class="">
                <div class="w3-hover w3-animate-zoom"><img src="Catalogue/Chocolate%20Dressing.jpg" style="width:26%">
                </div>
                <div class="w3-container">
                    <a href="https://www.amazon.com/True-Made-Foods-Vegetable-Friendly/dp/B01F2EN23U/ref=sr_1_1_sspa?ie=UTF8&qid=1519375636&sr=8-1-spons&keywords=ketchup%2Bbottle&th=1" target="_blank"><p class="w3-small w3-tag w3-green w3-center" style="font-size:2px">Buy our Products</p></a>

                    <h6>Chocolate Dressing</h6>
                </div>
            </div>
        </div>
        <!--- adding up same---->
        <div class="zoomStyle w3-quarter">
            <div class="">
                <div class="w3-hover w3-animate-zoom"><img src="Catalogue/Classic%20Mayonnaise.jpg" style="width:38%">
                </div>
                <div class="w3-container">
                    <a href="https://www.amazon.com/True-Made-Foods-Vegetable-Friendly/dp/B01F2EN23U/ref=sr_1_1_sspa?ie=UTF8&qid=1519375636&sr=8-1-spons&keywords=ketchup%2Bbottle&th=1" target="_blank"><p class="w3-small w3-tag w3-green w3-center" style="font-size:2px">Buy our Products</p></a>

                    <h6>Classic Mayonnasise</h6>
                </div>
            </div>
        </div>

        <!---- adding one More--->
        <div class="zoomStyle w3-quarter">
            <div class="">
                <div class="w3-hover w3-animate-zoom"><img src="Catalogue/Kiwi%20Crush.jpg" style="width: 26%">
                </div>
                <div class="w3-container">
                    <a href="https://www.amazon.com/True-Made-Foods-Vegetable-Friendly/dp/B01F2EN23U/ref=sr_1_1_sspa?ie=UTF8&qid=1519375636&sr=8-1-spons&keywords=ketchup%2Bbottle&th=1" target="_blank"><p class="w3-small w3-tag w3-green w3-center" style="font-size:2px">Buy our Products</p></a>

                    <h6>Kiwi Crush</h6>
                </div>
            </div>
        </div>

        <!-- <div class="zoomStyle w3-quarter">
            <div class="">
                 <div class="container">
                <img class="myimage4" src="Catalogue/Classic%20Mayonnaise.jpg"  style="width:28%">
                <div class="overlay">
                    <h2>Our best Product</h2>

    <a href="#" class="icon" title="User Profile">
      <i class="fa fa-user"></i>
    </a>




                <div class="w3-container">
                   <a href="https://www.amazon.in/Food-Coast-Mayo-Lite/dp/B01KAAHDDQ" target="_blank"><button class="w3-button w3-green w3-center">Buy our Products</button></a>
                    <h4>Classic Mayonnasise</h4>
                </div>
            </div>
        </div>
      </div>
    </div> -->

        <!-- <div class="zoomStyle w3-quarter">
        <div class="">
            <div class="container2">
            <img class="myimage5"
        src="Catalogue/Kiwi%20Crush.jpg" style="width: 20%">
                <div class="overlay2">
    <div class="text"></div>
  </div>
                </div>
            <div class="w3-container">
                <h4>Kiwi Crush</h4>
            </div>
            </div>
             </div> -->

    </div>

    <!---- Third Row----->
    <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
            <div class="">


            <img src="Catalogue/Litchi%20Crush.jpg" style="width:25%">

            <div class="w3-container">
                <h4>Litchi Crush</h4>
            </div>
        </div>
            </div>


            <div class="zoomStyle w3-third">
                <div class="">
                <img src="Catalogue/Pineapple%20Crush.jpg" style="width:25%">
                <div class="w3-container">
                <h4>Pineapple Crush</h4>
                </div>
            </div>
                </div>

        <div class="zoomStyle w3-third">
        <div class="">
            <img src="Catalogue/Pizza%20Topping.jpg" style="width:44%">
            <div class="w3-container">
            <h4>Pizza Tropping</h4>
            </div>
            </div>
        </div>
        </div>
    <!--- Fourth row---->
    <div class="w3-row-padding w3-margin-top w3-center">
        <div class="zoomStyle w3-third">
        <div class="">
            <img src="Catalogue/Strawberry.jpg" style="width:25%">
            <div class="w3-container">
                <h4>Strawberry</h4>
            </div>
            </div>
        </div>

        <div class="zoomStyle w3-third">
        <div class="">
            <img src="Catalogue/Tandoori%20Mayo.jpg" style="width: 40%">
            <div class="w3-container">
            <h4>Tandoori Mayo</h4>
            </div>
            </div>
        </div>

        <div class="zoomStyle w3-third">
        <div class="">
            <img src="Catalogue/Tomato%20Ketchup%20Squezy.jpg" style="width:34%">
            <div class="w3-container">
                <h4>Tomato Ketchup</h4>
            </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="w3-container w3-content" style="padding:18px 16px" >
        <!-- <p class=" w3-xxlarge w3-center w3-text-red w3-hover"style="font-family:sans-serif;color:  #ff0000"><span class="w3-text-red"style="font-family:sans-serif;color:  #ff0000" >Our Global Partners</span></p>
        <div class="w3-conatiner">
            <img class="w3-zoom w3-round" src="Images/Major%20Customers.jpg" style="width: 100%">
        </div> -->
        <?php include('globalpartner.php') ?>
    </div>
  </div>
    <?php include('footer.php') ?>
   <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>


</body>
</html>
