<?php
include_once("header.php");


/*selektiranje potrebnih podataka */

$sql = "SELECT Ime,Ime2,Opis,Opis2,Sastojci,Sastojci2,Cijena,Tag FROM sheet1";
$result = mysqli_query($conn,$sql);


$sql2 = "SELECT Ime,Cijena FROM sheet2";
$result2=mysqli_query($conn,$sql2);
echo' 
 
	  
	  <section class="sredina">
	 <div class="row">';
	 
	 
	 
	 if ($_SESSION['jezik']=="HRV"){
	 echo'
	 </br></br>
		<div id="hrana" class="column column-6" onclick="showHrana()">Hrana</div>
		<div id="pice" class="column column-6" onclick="showPice()">Pice</div>';
	 
	 
	 }
	 else if($_SESSION['jezik']=="ENG"){
	

	 echo' 
	  </br></br>
	 <div id="hrana" class="column column-6" onclick="showHrana()">Food</div>
		<div id="pice" class="column column-6" onclick="showPice()">Drink</div>';
		}
	 
	 
	 echo '<div id="dolje" <strong><h3>MENU</h3></strong>
	 ';
	 
	 
	 
	 /*Menu na hrvatskom */
	 if ($_SESSION['jezik']=="HRV"){
	echo' <div id="jelo">';
	 
	  
	  
	 


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $lol=$row["Tag"];
	echo '
	
		<a href="pileci.php?lol='.$lol.'?jezik='.$jezik.'">
		<div class="tddiv column column-5">
		
		<zz id="bok">
		'.$row["Ime"].'</br>
		<strong>Cijena: </strong>'.$row["Cijena"].'kn</div></zz></p>
		';
	
	
	

    }}
	echo ' </div>';
	 
	 
	 
	 }
	 /*Menu na engleskom */
	 else if($_SESSION['jezik']=="ENG"){

	
		
	  echo '<div id="jelo">';
	  
	 


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $lol=$row["Tag"];
	echo '
		<a href="pileci.php?lol='.$lol.'?jezik='.$jezik.'">
		<div class="tddiv column column-5"><zz id="bok">
		'.$row["Ime2"].'</br>
		<strong>Price: </strong>'.$row["Cijena"].'kn</zz></div></a>
		';
	
	
	

    }}
	echo ' </div>'
	;
	 }
	 
	 echo '<div id="pica">';
	 
	 if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        
	echo '
	
		<a href="#">
		<div class="tddiv column column-5">
		
		<zz id="bok">
		'.$row["Ime"].'</br>
		<strong>Cijena: </strong>'.$row["Cijena"].'kn</div></zz></p>
		';
	
	
	

    }}
	 echo ' </div>
	 
	 
	 </div>
	  
	  
	   </section></br></br>';


  include_once("footer.php");
?>