<?php
	$db = new mysqli('localhost','u684761886_01','12345678','u684761886_01');
	$consulta = sprintf("SELECT * FROM IMAGEN ORDER BY clicks DESC");
	$resultado = $db->query($consulta) or die($db->error);
	$n = 0;
	echo "<br><br><table><tr>";
	while ($row = $resultado->fetch_array()){
		if ($n == 3){
			echo "</tr><tr>";
			$n = 0;
		}
		echo "<td>
		<img src='../img/".$row['id'].".jpg' width='300' height='300'></img>
		<br>
		<span class='label label-default'>
		Apariciones: ".$row['apariciones']." - Clicks: ".$row['clicks']."
		</span>
		</td>";
		$n ++;
	}
	echo "</tr></table>";


?>