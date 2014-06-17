<?php
	$id_restriccion = $_POST['id_restriccion'];
	$consulta = sprintf('SELECT * FROM IMAGEN WHERE id<>%s ORDER BY RAND() LIMIT 1',$id_restriccion);
	$db = new mysqli('localhost','u684761886_01','12345678','u684761886_01');
	$resultado = $db->query($consulta) or die($db->error);
	while ($row = $resultado->fetch_array()){
		echo $row['id'];
		$consulta = sprintf("UPDATE IMAGEN SET apariciones = apariciones + 1 WHERE id = %s",$row['id']);
		$db->query($consulta) or die($db->error);
	}

?>