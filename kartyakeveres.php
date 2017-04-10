<?php
$tomb[0]=''; // nulladik elem üres!

// Pikk kártyák
for ($i=1;$i<=13;$i++){
	$tomb[]='P'.$i;
}

// Treff kártyák
for ($i=1;$i<=13;$i++){
	$tomb[]='T'.$i;
}

// Kör kártyák
for ($i=1;$i<=13;$i++){
	$tomb[]='K'.$i;
}

// Káró kártyák
for ($i=1;$i<=13;$i++){
	$tomb[]='R'.$i;
}


// sorba rakott pakli kiírás
echo '<pre>';
print_r($tomb);
echo '</pre>';



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
echo '<pre>';
print_r($tomb);
echo '</pre>';

?>