<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="body">
    <header>
        <nav id="barra_nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h1 class="navbar-brand">Viajes.com</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de Nostros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestro canal en youtube</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div id="barra_superior" class="row ">
                <div class="col-md-2">
                    <a href="http://www.google.com" target="_blank"><img class="imagen"
                            src="img/map-marked-alt-solid.svg" alt="Contacto"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://www.google.com" target="_blank"><img class="imagen" src="img/telefono.svg"
                            alt="Contacto"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://www.google.com" target="_blank"><img class="imagen" src="img/envelope-solid.svg"
                            alt="Contacto"></a>
                </div>
                <div class="col-md-2">
                    <a href="https://www.youtube.com/watch?v=2HvnoXe0MAw" target="_blank"><img class="imagen"
                            src="img/youtube-brands.svg" alt="Contacto"></a>
                </div>
                <div class="col-md-4">
                    <h1>Bienvenidos</h1>
                </div>

            </div>
        </div>
    </header>
    <main>
        <section class="container-fluid">
            <div class="row">
                <div id="imagen" class=" col-12 col-md-12  ">
                    <img class="imaPrincipal" src="img/imagen_viajes.jpg" alt="Imagen Principal">
                </div>
            </div>
            <div class="row">
                <div id="formulario" class="col-12 col-md-12">
                    <form>
                        <input class="formulario " type="text" id="Busqueda" name="Bsqueda" placeholder="Search">
                        <input type="submit" id="emvio" name="envio" value="Buscar">
                    </form>
                </div>
            </div>
            <div class="row">
                <div id="menu1" class="col-12 col-md-12">
                    <nav id="menu">
                        <ul>
                            <li>
                                <a href="pagina2.php"  target="_blank">Acerca de Nosotros</a>
                            </li>
                            <li>
                                <a href="pagina1.php" target="_blank">Paquetes Turisticos</a>
                            </li>
                            <li>
                                <a href="pagina3.php" target="_blank">Administracion de Productos</a>
                            </li>
                            <li>
                                <a href="#">Planes de Verano</a>
                            </li>
                            <li>
                                <a href="#">Planes de Invierno</a>
                            </li>
                            <li>
                                <a href="#">Reservas</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div id="video" class="col-12 col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/11qS5mzi3QE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <h1 class="text-center">Lugares Recomendados</h1>
                    <ul>
                        <li>
                            <p class="text-justify">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora deserunt minima
                                quibusdam suscipit, mollitia voluptates autem laudantium eaque repellendus minus esse
                                praesentium, doloremque optio officiis, voluptas nesciunt incidunt nobis amet?
                            </p>
                        </li>
                        <li>
                            <p class="text-justify">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora deserunt minima
                                quibusdam suscipit, mollitia voluptates autem laudantium eaque repellendus minus esse
                                praesentium, doloremque optio officiis, voluptas nesciunt incidunt nobis amet?
                            </p>
                        </li>
                        <li>
                            <p class="text-justify">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora deserunt minima
                                quibusdam suscipit, mollitia voluptates autem laudantium eaque repellendus minus esse
                                praesentium, doloremque optio officiis, voluptas nesciunt incidunt nobis amet?
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class=" col-12 col-md 12 text-center">
                    <h2> Solicita tu cotización </h2>
                </div>
            </div>
            <div class="row">
                <div id="mundo" class="col-12 col-md-2">
                    <img class="mundo" src="img/globe-americas-solid.svg" alt="Contacto">
                </div>
                <div class="col-12 col-md-10">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label1 for="Lugares a Visitar">Lugares a Visitar</label1>
                                <input type="password" class="form-control" id="Lugares a Visitar">
                            </div>
                            <div class="form-group col-md-4">
                                <label2 for="Cantidad">Cantidad de días</label2>
                                <input type="date" class="form-control" id="Cantidad">
                            </div>
                            <div class="form-group col-md-4">
                                <label3 for="inputEmail4">Email</label3>
                                <input  type="email" class="form-control" id="inputEmail4"
                                    placeholder="correo@correo.com">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>


            </div>
        </section>


    </main>


    <footer>



    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>