<?php


session_start();
if(isset($_GET['lol'])){
$_SESSION['jezik']=substr($_GET['lol'],-3);
$jezik=$_SESSION['jezik'];
}
/*else{
$_SESSION['jezik']="HRV";
$jezik="HRV";
}
*/
$ime = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$lol= substr($_GET["lol"],0,-10);
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
	<a href="pileci.php?lol='.$lol.'?jezik=HRV"> <img src="hr.png" width="50px" height="50px" float="right" "></img></a>
	<a href="pileci.php?lol='.$lol.'?jezik=ENG"> <img src="gb.png" width="50px" height="50px" float="right" "></img></a>
</div>

	
	</div>
	
	
    </div>
  </header>
';




$sql="SELECT Ime,Ime2,Opis,Opis2,Sastojci,Sastojci2,Cijena,Tag FROM sheet1 WHERE Tag='".$lol."'";
		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql);


echo ' 
	  <section class="sredina">
	  <div class="row">
	  <div class="menu column column-12">
	  <a href="menu.php?jezik='.$jezik.'"><img src="back.png"></img><strong>MENU</strong></a>
	  
	  </div>';
	   if ($_SESSION['jezik']=="HRV"){
	 echo'
	  <div class="opis column column-6">
	  ';
	  echo'</br></br>';
	  	
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
	echo '<h3>'.$row["Ime"].'</h3>
	</br>
	<img src='.$row["Tag"].'.jpg width:"200px" height:"100px"></img></br>
	<strong>Opis jela:</strong>
	'.$row["Opis"].'
	</br>

	<strong>Sastojci:</strong>
	'.$row["Sastojci"].'
	
	</br></br></br></br>';
	
	
	

    }}
		
	  echo'
	  
	  </div>';}
	  else if($_SESSION['jezik']=="ENG"){
	  echo'
	  <div class="opis column column-6">
	  ';
	  echo'</br></br>';
	  	
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
	echo '<h3>'.$row["Ime2"].'</h3>
	</br>
	<img src='.$row["Tag"].'.jpg width:"200px" height:"100px"></img></br>
	<strong>Description:</strong>
	'.$row["Opis2"].'
	</br>

	<strong>Ingredients:</strong>
	'.$row["Sastojci2"].'
	
	</br></br></br></br>';
	
	
	

    }}
		
	  echo'
	  
	  </div>';}
	  echo'
	  
	  
	  
	  
	  </div>
	  
	  
	   </section>
';

include_once("footer.php");
?>