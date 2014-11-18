<? 
//Función para Conectar al Servidor
function conectadb()
{
	include("password.inc");
	$db_conexion = mysql_connect ("$host", "$user", "$password") or die ("Imposible Conectar al Servidor");
	return $db_conexion;
}

//Función para Seleccionar la Base de Datos
function selectdb($db,$db_conexion)
{	
	$db_select = mysql_select_db ($db, $db_conexion) or die ("Imposible Conectar a la Base de Datos");

}

//Función para Liberar el resultado del query
function liberadb($query_result)
{
	if (!mysql_free_result($query_result))
		echo "El resultado del query no se pudo liberar";
}

//Función para cerrar la base de datos
function cierradb($db_conexion)
{
	if (!mysql_close($db_conexion))
		echo "La Conexión a la Base de Datos no se pudo realizar";
}
?>