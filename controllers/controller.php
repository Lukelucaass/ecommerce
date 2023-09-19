<?php
//Leer Producto
include_once "config/conexion.php";
$getmysql = new mysqlconex();
$getconex = $getmysql->conex();
$query = "SELECT *
                    FROM productos";
$res = mysqli_query($getconex, $query);

?>