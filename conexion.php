<?php

/*//Primera Forma de conexion con la Extension PDO

$servidor = "localhost";
$usuario = "root";
$password = "";

$conexion = new PDO($servidor, $usuario, $password);
*/
//Conexion a SQLServer por medio de PDO

$conexion = new PDO("sqlsrv:server=Aca va el nombre del server; database=Nombre de base de datos","sa","123");
/*if($conexion)
{
    echo "conectado a sql server";
}*/

$consulta = $conexion -> prepare("SELECT * FROM GESTORES_Este es el nombre de la tabla");
$consulta -> execute();

$datos= $consulta -> fetchAll(PDO::FETCH_OBJ);

//var_dump($datos);
//echo json_endcode($datos);
?>