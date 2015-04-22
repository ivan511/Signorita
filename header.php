<?php session_start();

if(isset($_GET['jezik'])){
$_SESSION['jezik']=$_GET['jezik'];
$jezik=$_GET['jezik'];
}
else{
$_SESSION['jezik']="HRV";
$jezik="HRV";
}

$ime = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

//spajanje na bazu

$conn = mysqli_connect("localhost","root","","menu");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo '
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Oblikovanje web stranica</title>

  <!-- Ucitavanje stilskih datoteka -->
  <link rel="stylesheet" href="./css/fontello.css"/>
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="normalize.css" /> 
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext" rel="stylesheet" type="text/css">
  <script src="skripta.js"></script>

</head>
<body>

  <header class="site-header">
  
    <div class="row">
	<div class="gore">
	<div class="column column-6">
	<h1>Signorita</h1>
   </div>


	<div class="column column-6">
	<a href="'.$ime.'?jezik=HRV"> <img src="hr.png" width="50px" height="50px" float="right" "></img></a>
	<a href="'.$ime.'?jezik=ENG"> <img src="gb.png" width="50px" height="50px" float="right" "></img></a>
</div>

	
	</div>
	
	
    </div>
  </header>
';
	 ?>