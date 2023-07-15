<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Integrador Front</title>

    <!--Bootstrap y CSS-->
    <link rel="shortcut icon" type="image/x-icon" href="img/1_favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Nav -->
    <div class="container-fluid row p-3" id="minav">
        
        <a id="nav-logo_link" class="row col-xxl-6"  href="#">
            <div id="nav-logo">
                    <img src="img/1_favicon.png" alt="logo mate">
                    <h3 id="logo_titulo">Materos Rioplatenses</h3>
            </div>
        </a>

        <ul class="nav col-xxl-5">
            <li class="nav-item">
                <a class="nav-link" href="#lugares">Lugares</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="#encuentros">Encuentros</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="#formulario">Sumate a la comunidad</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link text-success" href="#tickets">Colaborá con los encuentros</a>
            </li>
        </ul>
    </div>


    <!-- Bloque 1 Slider -->
    <div id="lugares" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#lugares" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#lugares" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#lugares" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid text-white poster_opacidad" id="bloque1_opacidad">
                    <div class="pr-5 poster_texto" id="bloque1_texto">
                        <h1>Río Paraná</h1>
                        <h4>El Paraná es un largo río del centro-este de Sudamérica que fluye en direcciones sur, este, sudoeste a través de Brasil, Paraguay y Argentina. Tiene una longitud de 2546 kilómetros que lo sitúan como el segundo río más largo de América del Sur. Es una continuación del río Grande, recibiendo el nombre del río Paraná en la confluencia con el río Paranaíba.</h4>
                        <div class="m-4" id="bloque1_texto-botones">
                            <a href="#encuentros">
                                <button type="button poster_btn-1" class="btn btn-primary-outline btn-lg text-white" id="bloque1_btn-1">Ver más</button>
                            </a>

                            <a href="#tickets">
                                <button type="button poster_btn-2" class="btn btn-success btn-lg" id="bloque1-btn_2">Comprar tickets</button>
                            </a>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="img/rioparana1-min.jpg" id="bloque1_img" alt="Rio Parana">
            </div>
        
            <div class="carousel-item">
                <div class="container-fluid text-white poster_opacidad" id="bloque1_opacidad">
                    <div class="pr-5 poster_texto" id="bloque1_texto">
                        <h1>Río Uruguay</h1>
                        <h4>El río Uruguay es un río internacional de América del Sur que junto con los ríos Paraná, Paraguay y otros cursos fluviales forman la cuenca del Plata. Nace en la Sierra Geral en el sudeste de Brasil en la confluencia de los ríos Canoas y Pelotas en el límite entre los estados de Río Grande del Sur y Santa Catarina, y desemboca en el Río de la Plata en el lugar llamado punta Gorda entre el departamento uruguayo de Colonia y el argentino de Islas del Ibicuy en la provincia de Entre Ríos.</h4>
                        <div class="m-4" id="bloque1_texto-botones">
                            <a href="#encuentros">
                                <button type="button poster_btn-1" class="btn btn-primary-outline btn-lg text-white" id="bloque1_btn-1">Ver más</button>
                            </a>

                            <a href="#tickets">
                                <button type="button poster_btn-2" class="btn btn-success btn-lg" id="bloque1-btn_2">Comprar tickets</button>
                            </a>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="img/corrientes2-min.jpg" alt="Corrientes foto 2">
            </div>

            <div class="carousel-item">
                <div class="container-fluid text-white poster_opacidad" id="bloque1_opacidad">
                    <div class="pr-5 poster_texto" id="bloque1_texto">
                        <h1>Río Iguazú</h1>
                        <h4>El río Iguazú es un río del sur de Brasil y del nordeste de la Argentina, en el centro-este de América del Sur. Pertenece a la cuenca del Plata. Nace en el cordón montañoso brasileño denominado Serra do Mar, en el estado de Paraná, y luego de un recorrido de aproximadamente 1300 kilómetros desemboca en el río Paraná.</h4>
                        <div class="m-4" id="bloque1_texto-botones">
                            <a href="#encuentros">
                                <button type="button poster_btn-1" class="btn btn-primary-outline btn-lg text-white" id="bloque1_btn-1">Ver más</button>
                            </a>
                            <a href="#tickets">
                                <button type="button poster_btn-2" class="btn btn-success btn-lg" id="bloque1-btn_2">Comprar tickets</button>
                            </a>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="img/misiones1-min.jpg" alt="Misiones foto 1">
            </div>
        </div>
        

        <button class="carousel-control-prev" type="button" data-bs-target="#lugares" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#lugares" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
    </div>
    

    <!--#008c4b verde-->
    <!-- Bloque 2 Oradores -->
    <div class="container pt-4 pb-4" id="encuentros">
        <div class="container oradores-presentacion">
            <h5>SUMATE A LA COMUNIDAD MATERA RIOPLATENSE</h5>
            <h1>ENCUENTROS</h1>
        </div>

        <div class="container-fluid row justify-content-around" id="cartas">
            
            <div class="card">
                <img class="card-img-top" src="img/mate7-min.jpg" alt="yerba rio parana">
                <div class="card-body">
                    <button type="button" class="btn btn-info text-white">Argentina</button>
                    <h4 class="card-title pt-2">Río Paraná - Argentina</h4>
                    <p class="card-text">Este es el encuentro más cercano para los que viven en la Ciudad Autónoma de Buenos Aires. Este año se celebra el encuentro del Paraná en la ciudad argentina de Rosario. Vení a conocer!</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="img/mate9-min.jpg" alt="campo rio uruguay">
                <div class="card-body">
                    <button type="button" class="btn btn-info text-white">Uruguay</button>
                    <h4 class="card-title pt-2">Río Uruguay - Uruguay</h4>
                    <p class="card-text">Para aquellos que viven en territorio uruguayo, este año la cita es Paysandú, cercano a la ciudad uruguaya de Mercedes y las ciudades argentinas de Colón y Concepción del Uruguay.</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="img/misiones1-min.jpg" alt="cataratas iguazu">
                <div class="card-body">
                    <button type="button" class="btn btn-warning text-success">Brasil</button>
                    <h4 class="card-title pt-2">Río Iguazú - Brasil</h4>
                    <p class="card-text">Un infaltable de los encuentros, esta vez en territorio brasileño. Nos encontramos en Parque Nacional do Iguaçu, cercano a la provincia de Misiones y para los vecinos de Paraguay.</p>
                </div>
            </div>

        </div>
    </div>


    <!-- Bloque 3 BsAs Octubre -->
    <div class="container row pt-4 pb-4" id="bsas">
        <!--<img class="col" src="img/honolulu.jpg">-->
        <div class="col" id="bsas-img"></div>
        <div class="col container-fluid p-3 text-light" id="bsas-texto">
            <h1>Nuestra historia</h1>
            <p>Hace más de una década que arrancamos con estos encuentros anuales que se hacen en los principales ríos donde se cultiva nuestra yerba mate. Es un punto de encuentro para amantes del mate de todo el mundo y también para concernos entre los distintos países vecinos.</p>
            <p>Arrancamos en el año 2010 con un único encuentro en el río Paraná y desde entonces la comunidad se fue ampliando. Conociéndonos entre vecinos de toda la Argentina y más adelante con nuestros vecinos uruguayos, brasileños y paraguayos. Armándose importantes espacios, proyectos y hasta cooperativas!</p>
            <p>Nuestros ríos materos más que separar unen! Sumate a estos hermosos encuentros y a una comunidad de apasionados de la yerba mate que no para de crecer año tras año. &#127754; &#9973; &#127774; &#127796;</p>
        </div>
    </div>


    <!-- Bloque 4 Formulario -->
    <div class="container pt-4 pb-4" id="formulario">
        <div class="container oradores-presentacion">
            <h5>PODÉS REALIZAR TU TALLER</h5>
            <h1>TALLERISTA</h1>
            <p>Anótate como tallerista y <span>presenta tus ideas</span>. Cuéntanos de qué quieres hablar!</p>
        </div>

        <form>
            <div class="row d-flex justify-content-between">

                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                </div>

                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                </div>

                <textarea class="form-control mt-4" name="text" placeholder="Sobre qué quieres hablar"></textarea>
                
                <p class="text-muted">Recuerda incluir un título</p>

                <button type="button" class="btn btn-success btn-lg" id="boton-submit">Enviar</button>
            </div>
        </form>
    </div>


    <!--Bloque 5 Tickets-->
    <div id="tickets">

        <div id="tickets_botones-general">

            <div id="tickets_botones1" class="tickets_boton">
                <h5>Estudiante</h5>
                <p>Tiene un descuento</p>
                <p><span id="tickets_botones-precio1">80</span>%</p>
                <small class="text-secondary">* presentar documentacion</small>
            </div>

            <div id="tickets_botones2" class="tickets_boton">
                <h5>Trainee</h5>
                <p>Tiene un descuento</p>
                <p><span id="tickets_botones-precio2">50</span>%</p>
                <small class="text-secondary">* presentar documentacion</small>
            </div>

            <div id="tickets_botones3" class="tickets_boton">
                <h5>Junior</h5>
                <p>Tiene un descuento</p>
                <p><span id="tickets_botones-precio3">15</span>%</p>
                <small class="text-secondary">* presentar documentacion</small>
            </div>
        </div>

        <div id="tickets_formulario-general" class="pt-3">
            <p class="formulario-intro h6">COLABORÁ CON EL PROYECTO</p>
            <p class="formulario-intro h2">APORTE SUGERIDO $200</p>
            <form>
                <div class="row d-flex justify-content-between">
    
                    <div class="col pt-3">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
    
                    <div class="col pt-3">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
    
                    
                    <div class="pt-3">
                        <input type="email" class="form-control" placeholder="Correo" name="correo">
                    </div>

                    <div class="col pt-3 pb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" placeholder="Cantidad" id="cantidad" name="cantidad">
                    </div>

                    <div class="col pt-3 pb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" id="categoria_select">
                            <option>Estudiante</option>
                            <option>Trainee</option>
                            <option>Junior</option>
                        </select>
                    </div>

                    <p class="formulario-resultado">Total a pagar: <span id="tickets_formulario-resultado"></span>$</p>
    
                    <div id="tickets_formulario-botones" class="d-flex justify-content-between pt-3">
                        <input type="reset" class="btn btn-danger" value="Borrar">
                        <input type="button" id="tickets_formulario-resumen" class="btn btn-primary" value="Resumen">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container-fluid row p-4" id="mifooter">

        <a id="footer-logo_link" class="row col-xxl-6"  href="#">
            <div id="footer-logo">
                    <img id="footer-logo_img" src="img/1_favicon.png" alt="logo mate">
                    <h3 id="footer-logo_texto">Materos Rioplatenses</h3>
            </div>
        </a>

        <ul class="nav col-xxl-5">
            <li class="nav-item">
                <a class="nav-link" href="#lugares">Lugares</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="#encuentros">Encuentros</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="#formulario">Sumate a la comunidad</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link text-dark" href="#tickets">Colaborá con los encuentros</a>
            </li>
        </ul>
    </footer>
    
    <script src="integrador2.js"></script>
</body>
</html>