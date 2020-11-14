<?php

class BaseDatos{

 //atributos   
public $usuarioBD = "root";
public $passwordBD = "";

//constructor
public function __construct(){}

//metodos
public function conectarBD()
{

    try{
        $datosBD = "mysql:host=localhost;dbname=tiendaproductos";
        $conexionBD = new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        return($conexionBD);    

    }catch(PDOException $error){
        echo($error->getMessage());    

   }
}

public function agregarDatos($consultaSQL)
{

//Establecer una conexion
$conexionBD = $this->conectarBD();


//Preparar consulta
$insertarDatos = $conexionBD->prepare($consultaSQL);

//Ejecutar la Consulta

$resultado= $insertarDatos->execute();

//Verifico el resultado


        if($resultado){
        echo("Producto agregado");
        }else{
            echo("error");
        }
}

public function consultarDatos($consultaSQL)
{
    //Establecer una conexion
    $conexionBD = $this->conectarBD();

    //Preparar consulta
    $consultarDatos = $conexionBD->prepare($consultaSQL);

    // Establecer el metodo de consulta

    $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //Ejecutar la operacion en la DB

    $consultarDatos->execute();

    //Retornde los datos Consultados

    return($consultarDatos->fetchAll());
}

public function eliminarDatos($consultaSQL)
{
     //Establecer una conexion
     $conexionBD = $this->conectarBD();

      //Preparar consulta
    $eliminarDatos = $conexionBD->prepare($consultaSQL);

    //Ejecutar la Consulta
    $resultado =  $eliminarDatos->execute();

        if($resultado){
            echo("Producto Eliminado");
            }else{
                echo("error");
            }
}

}


?>