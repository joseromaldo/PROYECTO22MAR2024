<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bg-img {
            background: url(/images/fondo.jpeg);
        }
    </style>
</head>

<body class="bg-img">
    <!-- Container 1 -->
    <div class="row p-2">
        <div class="col-6">
            <nav class="navbar navbar-expand-lg bg-warning">
                <div class="container-fluid">
                    <!-- button save -->
                    <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z" />
                            <path
                                d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z" />
                        </svg></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="proyecto.html">Comandantes</a></li>
                                    <li><a class="dropdown-item" href="proyecto.html">Jefes</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="proyecto.html">Directores</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </nav>
            <form action="proyecto.php" method="post">
            <div class="m-1 border border-solid-5">
                <div class="row p-3">
                    <div class="col-4">
                        <label class="p-1" for="Cat">Catálogo</label>
                        <input class="form-control rounded" name="cat" type="text" placeholder="Cat">
                    </div>
                    <div class="col-4">
                        <label class="p-1" for="Nombre1">Nombre 1</label>
                        <input class="form-control rounded" name="name1" type="text" placeholder="1er nombre">
                    </div>
                    <div class="col-4">
                        <label class="p-1" for="Nombre2">Nombre 2</label>
                        <input class="form-control rounded" name="name2" type="text" placeholder="2do nombre">
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-4">
                        <label class="p-1" for="Apellido1">Apellido 1</label>
                        <input class="form-control rounded" name="lname1" type="text" placeholder="1er apellido">
                    </div>
                    <div class="col-4">
                        <label class="p-1" for="Apellido2">Apellido 2</label>
                        <input class="form-control rounded" name="lname2" type="text" placeholder="2do apellido">
                    </div>
                    <div class="col-4">
                        <label class="p-1" for="Correo">Correo</label>
                        <input class="form-control rounded" type="email" placeholder="@mail.com">
                    </div>
                </div>
                <div class="row p-3">

                    <div class="col-4">
                        <div class="">
                            <label class="" for="sexo">Sexo</label>
                            <input class="form-control rounded" type="text" placeholder="sexo">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="rango">Grado</label>
                            <select class="form-select" name="grado" aria-label="Default select example">
                                <option selected>Grado</option>
                                <option value="A/F Subteniente">A/F Subteniente</option>
                                <option value="A/N Teniente">A/N Teniente</option>
                                <option value="T/F Capitán 2do">T/F Capitán 2do</option>
                                <option value="T/N Capitán 1ro">T/N Capitán 1ro</option>
                                <option value="C/C Mayor">C/C Mayor</option>
                                <option value="C/F Teniente Coronel">C/F Teniente Coronel</option>
                                <option value="C/N Coronel">C/N Coronel</option>
                                <option value="Vicealmirante G/B">Vicealmirante G/B</option>
                                <option value="Almirante G/D">Almirante G/D</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="especialidad">Especialidad</label>
                            <select class="form-select" name="arma" aria-label="Default select example">
                                <option selected>Arma o servicio</option>
                                <option value="MARINA">MARINA</option>
                                <option value="INFANTERÍA">INFANTERÍA</option>
                                <option value="CABALLERÍA">CABALLERÍA</option>
                                <option value="ARTILLERÍA">ARTILLERÍA</option>
                                <option value="PM">PM</option>
                                <option value="TRANSMISIONES">TRANSMISIONES</option>
                                <option value="INTENDENCIA">INTENDENCIA</option>
                                <option value="MATERIAL DE GUERRA">MATERIAL DE GUERRA</option>
                                <option value="AVIACIÓN">AVIACIÓN</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="m-3">
                            <label for="especialidad">Dependencia</label>
                            <select class="form-select" id="especialidad" aria-label="Default select example">
                                <option selected>Comandos/Brigadas</option>
                                <option value="1">CONAPAC</option>
                                <option value="2">CONACAR</option>
                                <option value="3">BIM</option>
                                <option value="4">CIT</option>
                                <option value="5">1ra BRIGADA</option>
                                <option value="6">2da BRIGADA</option>
                                <option value="7">3ra BRIGADA</option>
                                <option value="8">4ta BRIGADA</option>
                                <option value="9">5ta BRIGADA</option>
                                <option value="10">6ta BRIGADA</option>
                                <option value="11">7ma BRIGADA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-8 mt-2">
                        <div class="m-3">
                            <label for="Cursos">Cursos: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Kaibil</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Informática</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Paracaidismo</label>
                            </div>
                            <button type="submit" class="btn btn-dark m-3">SEND</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        </div>
        <!-- Container 2 -->

        <div class="col-6 border border-solid-5">
            <div class="col-12 text-center fs-2 mt-1 bg-warning h-30">COMANDOS NAVALES</div>
            <div class="row">
                <div class="col-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/COMADENA.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/CONAPAC.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/BIM.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/ASTIMAR.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/CONACAR.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Menús desplegables con texto en párrafos -->
                    <div class="accordion mt-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    COMADENA
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Comando de la Marina de la Defensa Nacional:</strong> El Comando de la
                                    Marina de la Defensa Nacional de Guatemala es una entidad clave dentro de las
                                    Fuerzas Armadas de Guatemala, encargada de la gestión y operación de todas las
                                    unidades navales y marítimas del país. Su función principal es la defensa y
                                    protección de las aguas territoriales guatemaltecas, así como la seguridad marítima
                                    y fluvial.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    CONAPAC
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Comando Naval del Pacífico:</strong> El Comando Naval del Pacífico es una
                                    entidad militar marítima que opera en la región del Océano Pacífico y está
                                    relacionada con la defensa y seguridad marítima de un país específico o de una
                                    coalición de países en esa área geográfica. La denominación exacta y la estructura
                                    organizativa pueden variar según el país al que pertenezca.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    BIM
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Brigada de Infantería de Marina:</strong> La Brigada de Infantería de Marina
                                    es una unidad militar especializada dentro de la Marina de Guerra de un país. Su
                                    función principal es llevar a cabo operaciones terrestres en apoyo de las
                                    operaciones navales y marítimas. Estas brigadas están altamente entrenadas y
                                    equipadas para operar en una variedad de entornos, incluyendo operaciones anfibias y
                                    terrestres en áreas costeras.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ASTIMAR
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Astillero de la Marina de la Defensa Nacional:</strong> El Astillero de la
                                    Marina de la Defensa Nacional de Guatemala es una instalación naval encargada de la
                                    construcción, mantenimiento y reparación de embarcaciones y buques para la Marina de
                                    Guatemala. Este astillero desempeña un papel fundamental en el mantenimiento de la
                                    flota naval del país y en el apoyo a las operaciones marítimas y fluviales de la
                                    Marina.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    CONACAR
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Comando Naval del Caribe:</strong> El Comando Naval del Caribe se refiere a
                                    una entidad naval militar que opera en la región del Mar Caribe. Este comando naval
                                    puede ser parte de la Marina de Guerra de un país específico que tiene costas en el
                                    Caribe o puede estar relacionado con una coalición de países que comparten intereses
                                    en esa área geográfica.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container 3 -->
    <div class="row">
        <div class="col-5 p-3 text-center fs-2 mt-1 m-5 bg-success h-30 border border-solid-5 text-white">
            TABLA
        </div>
        <div class="col-5 text-center fs-2 mt-1 p-3 m-5 bg-success h-30 border border-solid-5 text-white ms-auto">
            GALERÍA
        </div>
        <div class="row">
            <div class="col-5 m-5 mt-2 border border-solid-5 bg-primary p-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Cat</th>
                            <th scope="col">Grado</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Arma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $cat=$_POST["cat"];
                         $name1=$_POST["name1"];
                         $name2=$_POST["name2"];
                         $lname1=$_POST["lname1"];
                         $lname2=$_POST["lname2"];
                         $grado=$_POST["grado"];
                         $arma=$_POST["arma"];
                        $num=1;
                        while($num<11){

                           

                        echo "<tr>";
                           echo "<th scope='row'>",$num++,"</th>";
                          echo  "<td>$cat</td>";
                           echo "<td>$grado</td>";
                           echo "<td>$name1 $name2</td>";
                           echo "<td>$lname1 $lname2</td>";
                           echo "<td>$arma</td>";
                       echo "</tr>";
                                } 
                        ?>
                    </tbody>
                </table>
                <img class="w-100" src="/images/cuactemoc.jpeg" alt="">
            </div>

            <div class="col-2 m-1 ms-auto h-50">
                <img class="img-fluid h-50 w-100 p-2" src="/images/quetzal.jpeg" alt="">
                <img class="img-fluid h-50 w-100 p-2" src="/images/kukulkan.jpeg" alt="">
                <img class="img-fluid h-50 w-100 p-2" src="/images/post1.jpeg" alt="">
            </div>
            <div class="col-2 m-1">
                <img class="img-fluid h-25 w-100 p-2" src="/images/bitol.jpeg" alt="">
                <img class="img-fluid h-25 w-100 p-2" src="/images/boat.jpeg" alt="">
                <img class="img-fluid h-25 w-100 p-2" src="/images/post2.jpeg" alt="">
            </div>
            <div class="col-2 m-1">
                <img class="img-fluid h-25 w-100 p-2" src="/images/portuaria.jpeg" alt="">
                <img class="img-fluid h-25 w-100 p-2" src="/images/caribe.jpeg" alt="">
                <img class="img-fluid h-25 w-100 p-2" src="/images/post3.jpeg" alt="">
            </div>



        </div>

    </div>

    </div>

    </div>

    <!-- Container 4 -->


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>