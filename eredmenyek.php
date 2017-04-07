<html>
<head>
   <title> Pasziánsz </title>
   <meta charset= "utf-8">
   <link rel="stylesheet" href="eredmenyek.css"/>
   <script src="jquery-3.1.1.min.js"></script>
</head>
<body>
	<div class="tabla">
		<table id="egesz">
			<tr id="cim">
				<td id="">Helyezés</td>
				<td id="">Név</td>
				<td id="">Idő</td>
				<td id="">Érem</td>
			</tr>
			<?php
			$csatlakozas=mysql_connect('localhost','root','a');
			$adatbazis='eredmenyek';
			 $top10=mysql_query("select $adatbazis.tabla order by idő asc limit 10",$csatlakozas);
			 $i=0;
			 while($t = mysql_fetch_array($top10)) {
				 $i++;
			echo '<tr id="elsosor">
				<td id="">$i.</td>
				<td id="">$t["név"]</td>
				<td id="">$t["idő"]</td>
				<td id=""></td>
			</tr>';
			 } ?>
			
		</table>
	</div>
</body>
</html>