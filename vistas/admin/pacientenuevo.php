<?php
include_once './vistas/parte_superior.php';

// Inicio parte superior
?>


<h1 class="m-4">Nuevo Paciente</h1>

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white fw-bold" id="inputGroup-sizing-default">Nombre</span>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                </div>
              
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6     ">
            <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Apellidos</span>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
              
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Correo electrónico</span>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
               
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Dirección</span>
                    <input type="text" class="form-control" id="direcc" name="direcc">
                </div>
               
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">DNI</span>
                    <input type="text" class="form-control" id="dni" name="dni">
                </div>
           
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Teléfono</span>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
              
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="input-group mb-3">
                <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Password</span>
                    <input type="text" class="form-control" id="password" name="password" value="<?php pass(); ?>">

                    <?php
                    function pass()
                    {
                        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        $shfl = str_shuffle($comb);
                        $pwd = substr($shfl, 0, 10);
                        echo $pwd;
                    }
                    ?>
                </div>
            </div>
            <div class="col">

            </div>

        </div>

        <input type="submit" class="btn btn-primary btn-lg" name="pacientenuevo" value="AÑADIR">

    </form>

</div>
<?php

if (isset($_POST["nombre"])) {

    $link =  conecta_bd();
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $direcc = $_POST["direcc"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $fecha_alta = date("Y-m-d");
    $fecha_baja = null;
    $pass = $_POST["password"];
    $rol = 2;


   

    $sql = "INSERT INTO `usuarios` (`usu_id`, `usu_nombre`, `usu_apellidos`, `usu_dni`, `usu_password`, `usu_telefono`, `usu_mail`, `usu_direccion`, `usu_fecha_alta`, `usu_fecha_baja`, `usu_rol`)
      VALUES (NULL,'$nombre','$apellidos','$dni','$pass','$telefono','$email','$direcc',current_timestamp(), NULL,'$rol')";

    $ok = mysqli_query($link, $sql);
    //$resultado = $link->prepare($sql); //Preparamos la consulta

    //$ok = $resultado->bind_param("ssssissssi", $nombre, $apellidos, $dni, $pass, $telefono,$email,$direcc,$fecha_alta,$fecha_baja,$rol ); //Introducimos el parámetro de la ?

    //$ok = $resultado->execute(); //Ejecutamos la consulta
    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        echo ("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina
    }
    // echo("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina

  
   

    $link->close(); //Cerramos la conexión
}
?>

<?php

//Inicio parte inferior
include_once './vistas/parte_inferior.php';
