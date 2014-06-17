<?php 
	echo "direccion:".$_SERVER['REMOTE_ADDR'];
	$consulta = sprintf("INSERT INTO ESTADISTICAVISITA(fecha,direccion) values ('%s','%s')",date("Y-m-d H:i:s"),$_SERVER['REMOTE_ADDR']);
	echo $consulta;
	$db = new mysqli('localhost','u684761886_01','12345678','u684761886_01');
	$resultado = $db->query($consulta) or die($db->error);

?>