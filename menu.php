<html>
<!--MENYN HÄMTAS FRÅN DEN HÄR FILEN-->
<head>
    <style> 

    * {
	margin:0;
	padding:0;
}

.nav-bar {
	width: 100%;
	position: fixed;
	height:auto;
	z-index: 999;
	top: 0;
	font-size: 12px;
  background-color: #222;
}
.nav-bar li:last-child {
	margin-right: 60px;
}

a {
	text-decoration: none;
	color:inherit;
}

nav ul {
	overflow: hidden;
	text-align:right;
	padding: 1%;
	margin-left: 0;
  -webkit-transition: max-height 0.4s;
	-ms-transition: max-height 0.4s;
	-moz-transition: max-height 0.4s;
	-0-transition: max-height 0.4s;
	transition: max-height 0.4s;
}

nav ul li {
	display: inline-block;
	text-transform: uppercase;
	font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
	font-weight: 400;
	padding: 10px 15px;
	letter-spacing: 1px;
	color: grey;
}

 nav a:hover {
	color: #70B8FF;
}
/* Mobile navigation */
.mobile-icon {
	width: 100%;
	text-align: right;
	box-sizing: border-box;
	cursor: pointer;
	color: #fff;
	display: none;
	font-size: 20px;
	font-family: bold;
	margin: 2% 2%;
	position: relative;
	padding-left: 1.25em;
}
/* style of mobile icron */
.mobile-icon:before {
	content: "";
	position: absolute;
	left: 0;
	top: 0.2em;
	width: 1.2em;
	height: 0.16em;
	background: white;
	box-shadow: 0 0.35em 0 0 white, 0 0.7em 0 0 white;
}     
/* end */

@media screen and (max-width: 943px) {
	
		.mobile-icon {
			display: block;
		}

		nav ul {
			max-height: 0px;
			padding: 0px;
		}
		
		/* mobile nav  */
		.showing {
			max-height: 20em;
			padding-bottom: 10px;
			font-size: 18px;
		}
		/* end */

		.nav-bar {
			width:100%;
			background-color: #222;
		}

		nav ul li {
			box-sizing: border-box;
			width: 100%;
			text-align: center;
		}
		
		nav ul li:hover {
			background-color: #fff;
			width: 100%;
        color: #70B8FF;
		}

		.nav-bar {
			display: block;
		}
}



		

   
    </style>
    
    
    
    
</head>
   
<!-- Responsive Menu -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<nav>
<div class="navigation" role="navigation">
	<div class="nav-bar">
    <div class="mobile-icon">.</div>
    <ul>
      <li><a href="menu.php?page=index">Home</a></li>
          <li><a href="menu.php?page=musicbrackets">Music</a></li>
         
<!--          <li><a href="menu.php?page=portfolio">Portfolio</a></li>-->
          <li><a href="menu.php?page=newport">Portfolio</a></li> 
          <!--<li><a href="portfolio.html">Portfolio</a></li>-->
          <li><a href="menu.php?page=countdown">Countdown</a></li>
          <li><a href="menu.php?page=guestbook">Guest book</a></li>
          <li><a href="menu.php?page=contactform">Contact</a></li>
          <li><a href="menu.php?page=cv">CV</a></li>

    </ul>
   </div>
  </div>
  </nav>





<!--PHP. HÄMTAR MENY MED _GET METODEN-->
      <?php
      //if (isset($_POST ["page"]))//tar bort: Notice: osv...
      $page = $_GET['page'];
      $pages = array('index', 'musicbrackets', 'portfolio', 'countdown', 'hangman', 'guestbook', 'contactform', 'cv', 'newport');
      if (!empty($page)) {
          if(in_array($page,$pages)) {
              $page .= '.php';
              include($page);
          }
          else {
              echo 'Sidan hittades inte. Tillbaka till 
        <a href="index.php">Startsidan</a>';
          }
      }
    
      ?>
   <!-- <script>
 $(".handle").on("click", function(){
    $("nav ul").toggleClass("showing");
 });
</script>-->
<script>
$(document).ready(function(){
	
	$('.mobile-icon').click( function() {
		$('nav ul').toggleClass("showing");

	});

});
</script>
</body>
</html>

   