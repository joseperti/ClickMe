<?php

	$id = $_POST['id'];
	$db = new mysqli('localhost','u684761886_01','12345678','u684761886_01');
	$consulta = sprintf("UPDATE IMAGEN SET clicks = clicks + 1 WHERE id = %s",$id);
	$resultado = $db->query($consulta) or die($db->error);

?>