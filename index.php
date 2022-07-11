<?php
session_start();
if (isset($_POST['logout'])) {
    unset($_SESSION['s_usuario']);
    unset($_SESSION['s_rol']);
    unset($_SESSION['s_rol_descripcion']);
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-32x32.png">
    <script src="https://kit.fontawesome.com/fd89dbe139.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.css" />
    <link rel="stylesheet" href="css/main.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>SANA | Clinic</title>
</head>

<body>
    <nav class="nav">
        <div class="d-flex flex-column align-items-center justify-content-center">

            <a class="brand" href="#inicio"><span class="brand-icon">SANA</span> | CLINIC </a>
            <img class="sidebar-brand-icon rotate-n-15 " src="./img/apple-touch-icon.png" alt="imagen icono" width="30px">
        </div>

        <ul id="menu" class="menu">
            <li data-menuanchor="inicio" class="active"> <a class="" href="#inicio">Inicio</a> </li>
            <li data-menuanchor="servicios"> <a class="" href="#servicios">Servicios</a> </li>
            <li data-menuanchor="acceso"> <a class="" href="#acceso">Acceso</a> </li>
            <li data-menuanchor="contacto"> <a class="" href="#contacto">Contacto</a> </li>
        </ul>
    </nav>
    <main id="fullpage">
        <header class="section header">
            <div class="content_ppal">
                <h1 class="txt-titulo display-3">SANA <span class="clinic">| CLINIC</span></h1>
                <p class="txt-blanco display-5 my-3">Tu clínica de salud más cercana</p>
                <br>
                <a class="btntipo1 btn-outline-success btn-lg my-3" href="#contacto" role="button">Pedir cita</a>

            </div>
            <div class="content_ppal_icon">
                <p><a class="icon-arrow" href="#servicios"><img src="/img/arrow.svg" height="70px" width="70px"></a></p>
            </div>
            <!-- <video class="video" loop muted data-autoplay>
                <source src="/img/video.mp4" type="video/mp4">
            </video>-->
        </header>
        <section class="section servicios">
            <article class="slide">
                <div class="tarjeta-info">

                    <p class="tarjeta-title"><span class="texto-blanco">Medicina</span> <span class="texto-verde">General</span< /p>
                            <p class="tarjeta-descrip display-6">Profesionales especializados que velarán por su salud</p>
                </div>

                <!--CARDS-->
                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card Pacientes -->

                        <div class="col-xl-4 col-md-6 mb-4 my-4">

                            <a class="enlace card_style" href="#">
                                <div class="card border-left-primary shadow h-33">

                                    <div class="card-body">
                                        <div class=" row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Pacientes</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card Medicina -->

                        <div class="col-xl-4 col-md-6 mb-4 my-4">

                            <a class="enlace card_style" href="#">
                                <div class="card border-left-success shadow h-33">

                                    <div class="card-body">
                                        <div class=" row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Sanitarios</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <!-- Card Admins -->

                        <div class="d-xs-none col-xl-4 col-md-6 mb-4 my-4">

                            <a class="enlace card_style" href="#">
                                <div class="card border-left-danger shadow h-33">

                                    <div class="card-body">
                                        <div class=" row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Admins</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

            </article>
            <article class="slide">
                <div class="tarjeta-info">

                    <p class="tarjeta-title"><span class="texto-blanco">Enfermería</span> <span class="texto-verde">Especialista</span< /p>
                            <p class="tarjeta-descrip display-6">Enfermeros/as con la más alta cualificación en técnicas punteras</p>
                </div>
                <div class="content_card d-flex align-items-center justify-content-around text-center">

                </div>
            </article>
            <article class="slide">
                <div class="tarjeta-info">

                    <p class="tarjeta-title"><span class="texto-blanco">Servicio</span><span class="texto-verde">Nutrición</span></p>
                    <p class="tarjeta-descrip display-6 ">Le asesoraremos sobre hábitos saludables que le harán vivir más y mejor</p>
                </div>

            </article>
        </section>
        <section class="section login">
            <div class="content_login ">
                <h1 class="txt-titulo display-3 my-"><span class="texto-blanco">Acceso</span> <span class="texto-verde">Usuarios</span></h1>


                <form id="formulario" action="/vistas/login.php" method="post" class=" formulario align-items-center justify-content-center text-center">


                    <div class="input-group mb-3 border-dark shadow">
                        <span class="input-group-text " id="basic-addon1"><img src="./img/user.png" alt="icon-user" srcset=""></span>
                        <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3 border-dark shadow">
                        <span class="input-group-text" id="basic-addon1"><img src="./img/key.png" alt="icon-key" srcset=""></span>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <input id="btnform" class="btntipo  btn-lg" type='submit' name='enviar' value='ACCEDER'>

                </form>

            </div>
            </div>

        </section>

        <footer class="footer section">

            <div class="credenciales d-flex flex-column">
                <h1 class="txt-titulo display-3 "><span class="contacto texto-blanco">Contacto</span></h1>
                <div class="direc-flex d-flex flex-row text-center align-items-center justify-content-around">
                    <div class="direc ">
                        <p class="direc-direccion">
                            <img class="location" src="/img/location.svg" width="50px" alt="Facebook">
                        </p>
                        <p class="texto-direcc display-4">Carlos III<br> Murcia - España</p>
                    </div>
                    <div class="telefono ">
                        <p class="direc-telefono">
                            <img class="phone" src="/img/phone.svg" width="50px" alt="Facebook">
                        </p>
                        <p class="texto-tel display-4">655 55 55 55 </p>
                    </div>
                    <div class="form m-5 ">
                        <img class="form my-3 " src="/img/form.svg" width="60px" alt="formulario">
                        <form>
                            <div class="mb-3">

                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">

                            </div>
                            <div class="mb-3">

                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Correo electrónico">
                            </div>
                            <div class="mb-3">

                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Numero de teléfono">
                            </div>

                            <button type="submit" class="btntipo btn-outline-success btn-lg">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="rrss">
                <p class="rrss-icon m-5">
                    <a href="#" class="facebook mx-5"><img src="/img/facebook.svg" width="50px" alt="Facebook"></a>
                    <a href="#" class="twitter mx-5"><img src="/img/twitter.svg" width="50px" alt="Twitter"></a>
                    <a href="#" class="instagram mx-5"><img src="/img/instagram.svg" width="50px" alt="Instagram"></a>
                </p>

            </div>
        </footer>
    </main>
   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="js/appfullpage.js "></script>
    <script src="js/app.js "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    
</body>

</html>