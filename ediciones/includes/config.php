<?
	//$path="//localhost/c-exponencial/";
	$path='';
	//Inclución de archivo de funciones
	include ("funciones.php");
	//Conexi&oacute;n al Servidor
	$db_conexion = conectadb();
	//Nombre de la Base de Datos
	//$db="cexpon01_c-exponencial";
	//$db="vivesate_web";
        $db="vivesate_web";
	//$db="web";
	//Selecci&oacute;n de la base de datos
	$db_select = selectdb($db,$db_conexion);
?>
