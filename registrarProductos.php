<?php

include('BaseDatos.php');


if(isset($_POST["btnRegistrar"])){

$nombreProducto = $_POST['nombre'];
$marcaProducto = $_POST['marca'];
$precioProducto = $_POST['precio'];
$descripcionProducto = $_POST['descripcion'];
$fotoProducto = $_POST['foto']; 

//Objeto de la Base de Datos
$transaccion =  new BaseDatos();

//Crear Consulta
$consultaSQL = "INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$descripcionProducto', '$fotoProducto')";

//Llamo al metodo de la clase BD agregar datos

$transaccion->agregarDatos($consultaSQL);
}

?>