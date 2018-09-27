
<!DOCTYPE html>
<html>
<title>Glimps Demo2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       h1{
        text-align: center;
           font-display: block;
       }
       h4{
           text-align: center;
       }
       body{
           background-color: aliceblue;
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




<!-- <div class="w3-bar w3-white w3-top w3-center">
            <a href="HTMLPage.html" class="w3-bar-item w3-left "><img src="Images/FCI%20Logo%2080x140.jpg"></a>
      <h1 class="sideStyle w3-bar-item w3-text">Glimpses</h1>


    </div>
    <br>
    <br>
    <br>
    <br> -->
    <?php
 include("mainNavbar.php");
    ?>




<div id=side>
  <div class="w3-aliceblue  w3-center" style="margin-top:68px">
  <h3>Our Glimpses</h3>
  </div>
<div class="w3-row-padding w3-padding-16 w3-center">
<div class="w3-quarter">
    <div class="card">
    <img src="Images/Glimps/Medical%20Camp_opt.jpg" style="width:100%">
        <div class="w3-container">
            <h4>Medical Camp</h4>
        </div>
    </div>

        </div>


<div class="w3-quarter">
<div class="w3-card">
<img src="Images/Glimps/Model%20Town%20Jalandhar_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Modal Town jalandhar</h4>
</div>
</div>
</div>

<div class="w3-quarter">
<div class="w3-card">
<img src="Images/Glimps/Distributor%20Meet%20Jalandhar%201_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Distributor Meet Jalandhar</h4>
</div>
</div>
</div>
    <div class="w3-quarter">
<div class="w3-card">
<img src="Images/Glimps/FCI%20Award%20Distribution_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>FCI Awards</h4>
</div>
</div>
</div>

</div>
    <!--- first Hozizontal line complets--->
<div class="w3-row-padding w3-margin-top">

<div class="w3-third">
<div class="w3-card">
<img src="Images/Glimps/Distributor%20Meet%20Jalandhar%20Award_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Distributor Awards</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
<img src="Images/Glimps/Distributor%20Meet%20Jalandhar_opt.jpg" style="width:100%">
<div class="w3-container">
<h4>Lamp Ceremonay</h4>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
<img src="Images/Glimps/Distributor%20Meet%20Jalandhar%202_opt.jpg" style="width:100%">

<div class="w3-container">
<h4>Welcome Sppech</h4>
</div>
</div>
</div>
 </div>
        <!---- Third Horizontal Line--->


    <div class="w3-row-padding w3-padding-16 w3-center">

        <div class="w3-quarter">
            <div class="w3-card">
                <img src="Images/Glimps/Lohri%20Celebration_opt.jpg" width="100%">
                <div class="w3-container">
                    <h4>Lohri Celebrations</h4>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card">
                <img src="Images/Glimps/Christmas%20Celebration_opt.jpg" width="70%">
                <div class="w3-conatiner">
                <h4>Christmas Celebrations</h4>
                    </div>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-card">
                <img src="Images/Glimps/Fire%20Drill_opt.jpg" width="100%">
                <div class="w3-conatiner">

                <h4>Fire Drills</h4>
                    </div>
                    </div>
            </div>
        <div class="w3-quarter">
            <div class="w3-card">
                <img src="Images/Glimps/Games_opt.jpg" style="width:100%">
                <div class="w3-conatiner">
                    <h4>Games Fun</h4>
                </div>
            </div>
        </div>


    </div>
    <div id="side">

    <a href="Glimps2.php"> <button class="w3-button w3-black w3-display-right" onclick="plusDivs(-1)">&#10094;</button></a>
        </div>
      </div>
  <?php include('footer.php') ?>

</body>
</html>
