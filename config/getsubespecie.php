<?php
	
	include('catalogDB.php');
	$conexion = new Catalog();
	
	$id_especie = $_POST['id_especie'];
	
	$queryM = "SELECT id_subespecie, nom_subespecie FROM subespecie WHERE id_especie = (SELECT id_especie FROM especie WHERE nom_especie = '$id_especie') ORDER BY nom_subespecie";
	$resultadoM = $conexion->query($queryM);
	
	$html= "<option value='0'>Seleccionar la subespecie</option>";
	
	while($rowM = $resultadoM->fetch_array())
	{
		$html.= "<option value='".utf8_encode($rowM['nom_subespecie'])."'>".utf8_encode($rowM['nom_subespecie'])."</option>";
	}
	
	echo $html;
?>		