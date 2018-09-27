
<!DOCTYPE html>
<html>
<title>Participante Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       h3{
        text-align: center;
           font-display: block;
           animation-direction: alternate-reverse;
           animation-fill-mode: both;
           animation-play-state: running;

       }
       h4{
           text-align: center;
       }
       body{
           background-color: azure;
       }
       #side{
           margin-left:10px;
           margin-top: 90px;
       }
       .sideStyle{
           margin-left: 380px;
       }

    </style>
<body>
<!--
<div class="w3-top">
<div class="w3-left w3-sidebar w3-teal w3-bar-block w3-collapse w3-animate-left w3-card" style="width: auto"><i class="fa-fa-remove"></i>
    <h3 class="w3-spin">P</h3>
    <h3>A</h3>
    <h3 class="w3-spin">R</h3>
    <h3>T</h3>
    <h3 class="w3-spin">I</h3>
    <h3>C</h3>
    <h3 class="w3-spin">I</h3>
    <h3>P</h3>
    <h3 class="w3-spin">A</h3>
    <h3>T</h3>
    <h3 class="w3-spin">I</h3>
    <h3>O</h3>
    <h3 class="w3-spin">N</h3>
    <h3>S</h3>

    </div>
</div>
-->
    <!--
        <div class="w3-bar w3-white w3-top w3-center">
            <a href="HTMLPage.html" class="w3-bar-item w3-left "><img src="Images/FCI%20Logo%2080x140.jpg"></a>
      <h1 class="sideStyle w3-bar-item w3-text">Participations (2009-17)</h1>



    </div>
    <br>
    <br>
    <br>
    <br> -->
    <?php
 include("mainNavbar.php");
    ?>
<div id="side">
    <div class="w3-aliceblue  w3-center" style="margin-top:68px">
    <h3>Our Participations(2009-17)</h3>
    </div>




<div class="w3-row-padding w3-margin-top">

<div class="w3-third">
<div class="w3-card">
<img src="Images/participatnt/Gulfood%202009_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Gulf Food Dubai (2009)</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
<img src="Images/participatnt/Gulfood%202017_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Gulf Food Dubai (2017)</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
<img src="Images/participatnt/IFE%20London%202011_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>IEE, London (2011)</h4>
</div>
</div>
</div>

</div>
    <!--- first Hozizontal line complets--->
<div class="w3-row-padding w3-margin-top">

<div class="w3-third">
<div class="w3-card">
<img src="Images/participatnt/Anuga%20Colongue%202010_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Aunga, Cologone (2010)</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card w3-center">
<img src="Images/participatnt/Anuga%20Colongue%202017_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Aunga, Cologone (2017)</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
<img src="Images/participatnt/Aahar%20New%20Delhi%202013_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Aahar, New Delhi (2013)</h4>


</div>
</div>
</div>



    <div class="w3-row-padding w3-margin-top">

        <div class="w3-third">
            <div class="w3-card">
                <img src="Images/participatnt/Aahar%20New%20Delhi%202014_opt.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Aahar, New Delhi (2014)</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="Images/participatnt/Aahar%20New%20Delhi%202015_opt.jpg" width="100%">
                <div class="w3-container">
                <h4>Aahar, New Delhi (2015)</h4>
                    </div>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card">
                <img src="Images/participatnt/Aahar%20New%20Delhi%202016_opt.jpg" width="100%">
                <div class="w3-container">

                <h4>Aahar, New Delhi (2016)</h4>
                    </div>
            </div>
        </div>
    </div>
    </div>

        </div>
    <a href="glimps4.php"> <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> </a>
  <?php include('footer.php') ?>
</body>
</html>
