<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes.com</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body class="body">
    <header>
        <div class="container-fluid">
            <div class="row" id="barra_superior">
                <div class="col-md-2">
                    <a href="index.php" ><img class="imagen" src="img/home-solid.svg" alt="Contacto"></a>
                </div>
                <div class="col-md-2">
                    <a href="listaProductos.php"><img class="imagen" src="img/listado.svg" alt="Contacto"></a>
                </div>
                <div class="col-12 col-md-8">
                    <h1>Administracion de Productos</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container-fluid">
            <form id="form" action="registrarProductos.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="nombre" placeholder="Nombre del Producto">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="marca" placeholder="Marca del Producto">
                    </div>
                </div>
                <div class="row" id="precio">
                    <div class="col md 12" id="precio">
                        <input type="text" name="precio" placeholder="Precio Producto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="textarea" name="descripcion" placeholder="Descripcion"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="foto">
                    <input type="text" name="foto" placeholder="URL Foto">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-8 boton1">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary boton">Registrar</button>
                    </div>
                </div>


            </form>

        </section>



    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>