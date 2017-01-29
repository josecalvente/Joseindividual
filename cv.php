<!DOCTYPE html>
<html>
<?php
      include('./admin/config.php');//Inkluderar config-filen som ligger en mapp upp i hierarkin.

//UPPKOPPLING, FRÅGA, HÄMTA SVARET.
      $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);
      $query2 = mysqli_query($connection, "SELECT * FROM abouttext WHERE id=2");
      $about2 = mysqli_fetch_assoc($query2);
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="cv.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="soloscriptbrackets.js"></script>

<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="testdummyblack.png" />
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
</head>



<body>
    <?php require_once ('menu.php')?>
    
<div>

<div class="grid">
  <div class="row">
    
  <div class="col-wd-12 col-md-5 col-sm-6">
      <div class="col">
        
        <div id="basicInfo">
        <h4 style="margin-top: 94px;">Curriculum Vitae</h4>
        <p>
Namn: Jose Antonio Calvente Mancera<br>

Född: 1979.07.07 i Barcelona, Spanien<br>
Adress: Torsten Alms gata 7, 126 51 Stockholm <br>
Telefon: +46 70-660 68 46 <br>
E-post:<a class="mailto" href="mailto:jose.calvente@student.kyh.se">jose.calvente@student.kyh.se</a>
       </p>
       </div>
       
       </div>
       </div> 
<div class="col-wd-12 col-md-7 col-sm-6">
      <div class="col">
      <div id="josePicture">
<img class="image-circle" src="cvpicturejose.JPG" width="50%" height="auto" style="margin-top: 24px;">
    </div>
  </div>
</div>
     
      

      <div class="col-wd-12 col-md-12 col-sm-12">
      <div class="col">
        <div id="jobInfo">
<h4 style="margin-bottom: 44px;">Arbete</h4>
        <?php
         echo $about2["text"];
        ?>
            

</div>
</div>
</div>
    
    
    
    
</body>
</html>