<?php

include('BaseDatos.php');


if(isset($_POST["btnRegistrar"])){

$nombreProducto = $_POST['nombre'];
$marcaProducto = $_POST['marca'];
$precioProducto = $_POST['precio'];
$descripcionProducto = $_POST['descripcion'];
  
//Objeto de la Base de Datos
$transaccion =  new BaseDatos();

//Crear Consulta
$consultaSQL = "INSERT INTO productos(nombre, marca, precio, descripcion) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$descripcionProducto')";

//Llamo al metodo de la clase BD agregar datos

$transaccion->agregarDatos($consultaSQL);
}

?>