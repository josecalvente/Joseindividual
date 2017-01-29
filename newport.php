<!DOCTYPE html>
<html>
<title>PORTFOLIO</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="newport.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;}
.mySlides {display: none}
</style>
</head>
<body>
<?php require_once ('menu.php')?>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;" id="band">
    <h2 class="w3-wide">AFTER THE CRASH WE WOKE UP HERE</h2>
    <p class="w3-opacity">PORTFOLIO</p>
    <p class="w3-justify" style="margin-top:26px">After the crash we woke up here,
     is a solo project that i started in 2015 in Stockholm and I have fun experimenting
     with different fields and tempos of electronic music. This website is my school project
      for my studies in KYH-Stockholm "Front End Developer". You can read in this portfolio 
      some information about previous projects, if you wish more info, please feel free 
    to contact. Have a safe crash!</p>
    <div class="w3-row w3-padding-32" style="margin-top:46px">
      <div class="w3-third">
        <p>ATCWWUH</p>
        <a href="portfolio.php" target="_blank">
        <img src="pictures/strangecut.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
      </div>
      <div class="w3-third">
        <p>FIRE</p>
        <a href="https://soundcloud.com/jose-calvente-mancera/sets/nowwasthefuture" target="_blank">
        <img src="pictures/nowwasthefuture.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
      </div>
      <div class="w3-third">
        <p>APPEARS ON...</p>
        <a href="https://www.youtube.com/watch?v=83RSx39a2mc" target="_blank">
        <img src="pictures/vidfest.png" class="w3-round" alt="Random Name" style="width:60%"></a>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">OTHER PROJECTS</h2>
      <p class="w3-opacity w3-center"><i></i></p><br>

   

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="pictures/recycling.jpg"  style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>PHOTOGRAPHY</b></p>
          
            <p>Taking and editing pictures is one of my hobbies and I am studying photoshop</p>
            <button class="w3-btn w3-margin-bottom"><a id="more" href="artpictures.html">+ info</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="pictures/aurora.jpeg"  style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Video</b></p>
            
            <p>Soundtrack and video edit for Norwegian artist Benjamin Slotteroy</p>
            <button class="w3-btn w3-margin-bottom"><a id="more" href="http://interludeartlab.com/?p=1059">+ info</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="pictures/olofcode.jpg"  style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Code code code</b></p>
            
            <p>In August 2016 I started the course Front end Developer at KYH (Stockholm)</p>
            <button class="w3-btn w3-margin-bottom"><a href="http://kyh.se/utbildningar/front-end-developer/">+ info</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center">Telephone and address</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Torsten alms gata 7, 12651 Hägersten (Stockholm)<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +46 70-660 68 46<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: jose.calvente@student.kyh.se<br>
      </div>
      
  </div>

    <h1 style="margin-top:16px;">Happy to hear from you!</h1>
<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Em Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   
 
 </td>
 
</tr>
 
</table>
 
</form>
  
<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">

</footer>

<script>
$("#more").click(function(e){
    e.preventDefault();//this will prevent the link trying to navigate to another page
    var href = $(this).attr("href");//get the href so we can navigate later

    //do the update

    //when update has finished, navigate to the other page
    window.location = href;
});
</script>
</body>
</html>
