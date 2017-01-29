<?php
//DET HÄR ÄR SIDAN MED INLOGGNINGSKNAPP

include('login.php'); //login filen

if(isset($_SESSION['login_user'])){
	header("location: profile.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Admin</title>
<style>
h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 92px;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
  
  
  &.insetshadow {
    color: #202020;
    background-color: #2d2d2d;
    letter-spacing: .1em;
    text-shadow: 
      -1px -1px 1px #111, 
      2px 2px 1px #363636;
  }
  </style>

	</head>
<body>
	<div id="main" class="container">
		<div></div>
			<div class="row">
		  		<div class="col-md-offset-1 col-md-10">
					<div class="well index-well">
						<div class="text-center">
							<h1>Logga in</h1><br />
							<form action="" method="post">
								<label>Användarnamn</label>
								<br /><input type="text" name="username" placeholder="" id="användarnamn">
								<br /><br /><label>Lösenord: </label><br />
								<input type="password" name="password" placeholder=""><BR />
								<input name="submit" type="submit" value=" Login ">
								<h3><?php echo $error; ?></h3>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>