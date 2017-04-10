<?php
	echo"<p style='font-weight:bold;'>Kő-papír-olló-Játék</p>";

	if(isset($_GET['targy'])){
	$szamitogep = rand(1,3);
	$jatekos = $_GET["targy"];
		
	 switch($szamitogep)
	{
		case 1:
			$szamitogep = "Kő";
			break;

		case 2:
			$szamitogep = "Papír";
			break;

		case 3:
			$szamitogep = "Olló";
			break;
	}
		 
	switch($jatekos)
	{
		case 1:
			$jatekos = "Kő";
			break;
			
		case 2:
			$jatekos = "Papír";
			break;
			
		case 3:
			$jatekos = "Olló";
			break;
		
		default:
			die("Helytelen tárgy");
			break;
	}
		 
	if($szamitogep==$jatekos)
	{
		echo "Döntetlen<br/>";
	}else{
			 
		if(($jatekos== "Kő" && $szamitogep== "Olló") OR ($jatekos== "Papír" && $szamitogep== "Kő") OR ($jatekos== "Olló" && $szamitogep== "Papír"))
		{
			echo "Nyertél<br/>";
		} else {
				 echo "Vesztettél<br/>";
		}
	}
		
	echo "Te: ".$jatekos."<br/>";
	echo "Ellenfél: ".$szamitogep;
	echo "<p><a href='".$_SERVER['PHP_SELF']."'>Új játék</a></p>";

	}else{
		echo "<a href='?targy=1'>Kő</a><br/>";
		echo "<a href='?targy=2'>Papír</a><br/>";
		echo "<a href='?targy=3'>Olló</a><br/>";
	}
?>