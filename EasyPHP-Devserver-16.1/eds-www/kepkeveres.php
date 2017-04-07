<html>
<head>
   <title> Pasziánsz </title>
   <meta charset= "utf-8">
   <link rel="stylesheet" href="szakdolgozat.css">
   <script src="jquery-3.1.1.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body background="tenger.jpg">
	<div id="fejlec"> 
		<ul id="menu">
			<li><a href="#" id="jatek">Új játék</a></li>
			<li><a href="#" id="hatter">Háttér</a></li>
			<li><a href="eredmenyek.php">Eredmények</a></li>
			<li><a href="#">Tipp</a></li>
			<li><a href="#" id="sugo">Súgó</a></li>
		</ul>
		<ul id="szamolasok">
			<li><a href="">Érem:&nbsp;</a></li>
			<li><a href="">Idő:&nbsp;</a></li>
			<li><a href="">Lépés:</a></li>
	</div>
	<div class="jatek">
		<div id="felso-sor">
			<div class="hely">
				 <div class="jeloles keveres"></div>
			</div>
			<div class="hely"></div>
			<div class="hely"></div>
			<div class="hely">
				 <div class="jeloles"></div>
			</div>
			<div class="hely">
				 <div class="jeloles"></div>
			</div>
			<div class="hely">
				 <div class="jeloles"></div>
			</div>
			<div class="hely">
				 <div class="jeloles"></div>
			</div>
		</div>
		<div id="also-sor">
			 <?php
					$tomb[0]=''; // nulladik elem üres!

				 // Pikk kártyák
					 for ($i=1;$i<=13;$i++){
						 $tomb[]='s'.$i;
					 }

				 // Treff kártyák
					 for ($i=1;$i<=13;$i++){
						 $tomb[]='c'.$i;
					 }

				 // Kör kártyák
					 for ($i=1;$i<=13;$i++){
						 $tomb[]='h'.$i;
					 }

				 // Káró kártyák
					 for ($i=1;$i<=13;$i++){
						 $tomb[]='d'.$i;
					 }

				 // sorba rakott pakli kiírás
					 //echo '<pre>';
					 //print_r($tomb);
					 //echo '</pre>';

				 // keverés
					 $keveres_szama=Rand(100,1000); // minimum 100 max 1000 lap csere
					 for ($i=1;$i<=$keveres_szama;$i++){
					 $egyik_lap=Rand(1,52);
					 $masik_lap=Rand(1,52);
	
				 // csere:
					 $lap=$tomb[$egyik_lap];
					 $tomb[$egyik_lap]=$tomb[$masik_lap];
					 $tomb[$masik_lap]=$lap;
					 }

				 // összekevert pakli kiírás
					 //echo '<pre>';
					 //print_r($tomb);
					 //echo '</pre>';
					
				 //kitörli az első elemet,képek megjelenítése
					 unset($tomb[0]);
					 foreach($tomb as $kep) echo '<img class="hely" src="kartyalapok/kartyalapok/'.$kep.'.png">';
			 ?>	
		</div>
	</div>