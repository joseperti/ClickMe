<?php
	@session_start();
	$identificador = $_POST['identificador'];
	$db = new mysqli('localhost','u684761886_01','12345678','u684761886_01');
	$consulta = sprintf("insert into IMAGEN(fecha_creacion,identificador) values ('%s','%s')",date('Y-m-d H:i:s'),$identificador);
	$db->query($consulta) or die($db->error);
	$consulta = sprintf("SELECT @@identity AS id");
	$resultado = $db->query($consulta) or die($db->error);
	$numero = mysqli_fetch_row($resultado);
	$_SESSION['nombre_img'] = ($numero[0]).".jpg";
	echo ($numero[0]).".jpg";

?>