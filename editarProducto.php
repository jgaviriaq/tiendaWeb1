<?php

include("BaseDatos.php");

//1. Creo el objeto de la BD
$transaccion = new BaseDatos();

//2.Recibir los datos


if(isset($_POST["botonEditar"]))
{

    //3. Recibo el id que quiero editar

    $id=$_GET["id"];
    $nombreProducto = $_POST['nombreEditar'];
    $precioProducto = $_POST['precioEditar'];
    $descripcionProducto = $_POST['descEditar'];
    
    //4. Consulta para editar un registro

    $consultaSQL="UPDATE productos SET nombre='$nombreProducto',precio='$precioProducto',descripcion='$descripcionProducto' WHERE idProducto= '$id'";

    //5 Utilizar metodo Editar

    $transaccion-> editarDatos($consultaSQL);

    //Redireccionar

    header("location:listaProductos.php");



}







?>