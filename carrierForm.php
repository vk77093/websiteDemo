<html>
<head>

    <title> Carrier page </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
    .back{
      background-image: url(Images/careerheader.jpg);
        background-attachment: fixed;
        
        
    
    }

    </style>
    <body>
        <?php include('mainNavbar.php') ?>
        <div class="w3-conatainer w3-center">
            <img class="myimg" src="Images/Careers.jpg" style="margin-top:80px">
             </div>
            <div class="w3-row-padding w3-margin-top back">
                
                <div class="w3-third">
        <div class="w3-container w3-teal">
  <h2>Submit Resume</h2>
            
</div>

<form class="w3-container">
  <label class="w3-text-teal"><b>Post Applied For</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" required name="Name" name="postApplied">

  <label class="w3-text-teal"><b>First Name</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" required name="Name" name="firstName">

    <label class="w3-text-teal"><b>Last Name</b></label>
    <input class="w3-input w3-border w3-light-grey" type="text" name="lastName">

     <label class="w3-text-teal"><b>Address</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" required name="Name" name="address">

     <label class="w3-text-teal"><b>Mobile Number</b></label>
  <input class="w3-input w3-border w3-light-grey  w3-animate-input" required name="Name" type="number" name="mobileNumber">

     <label class="w3-text-teal"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey w3-hover-blue" type="email" required name="Email" name="email" >

     <label class="w3-text-teal"><b>Nationality</b></label>
  <input class="w3-input w3-border w3-light-grey w3-hover-green" type="text" required name="Name" name="nationality">

     <label class="w3-text-teal"><b>Total Experience</b></label>
  <select class="w3-select w3-border w3-light-grey" required name="Subject" name="optionExperience">
    <option value="" disabled selected>Choose your option</option>
      <option value="0-6">0-6 Months</option>
    <option value="1"> 1 year</option>
    <option value="2"> 2 year</option>
    <option value="3">3 Year</option>
      <option value="4">4 Year</option>
      <option value="5">5 year</option>
      <option value="more than 5">more Than 5 year</option>
  </select>

    <label class="w3-text-teal"><b>Current Employer</b></label>
  <input class="w3-input w3-border w3-light-grey w3-hover-green" type="text" name="currentEmp">

    <label class="w3-text-teal"><b>Current Desgination</b></label>
  <input class="w3-input w3-border w3-light-grey w3-hover-green" type="text" required name="Name" name="currentDesg">

    <label class="w3-text-teal"><b>Key skilss</b></label>
    <textarea class="w3-input w3-border w3-light-grey w3-hover-green" type="text" name="keySkills"></textarea>

    <label class="w3-text-teal"><b>Upload Resume(only .docs & pdf)</b></label>
  <input class="w3-input w3-border w3-light-grey w3-hover-green" type="file" required name="Subject" id="myFile" name="myFile">

    <br>
  <button class="w3-btn w3-blue-grey w3-center" name="submitData">Submit</button>
</form>
   </div>
                <div class="w3-third">
                    <p class="w3-teal w3-center">Check our Latesr Job Vancies Here</p>
                    <h4 class="w3-red w3-center">First List</h4>
                    <h4 class="w3-red w3-center">Second List</h4>
                    <h4 class="w3-red w3-center">Third List</h4>
                    <h4 class="w3-red w3-center">Fourth List</h4>
                    <h4 class="w3-red w3-center">FifthList</h4>
                  
                </div>
        </div>
        <?php
        include('footer.php');
         ?>
  <script>
function myFunction() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}
</script>

    </body>

</html>
