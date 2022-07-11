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
    <title>SANA | Clinic</title>
</head>

<body>
    <?php

    function conecta_bd()
    {
        $link = mysqli_connect('localhost', 'root', '', 'clinica');

        if (!$link) {
            echo '<div class="alert alert-danger ">';
            echo "Error: No se pudo conectar a  la BBDD.<br/>";
            echo '</div>';
            exit;
        }

        return $link;
    }

    if (isset($_POST['usuario'])) {
        session_start();
        $link = conecta_bd();
        $consulta = "SELECT u.usu_rol, u.usu_password, u.usu_nombre, r.rol_nombre from usuarios u JOIN roles r ON u.usu_rol=r.rol_id where u.usu_nombre='" . $_POST['usuario'] . "'";
        // Componemos la consulta con el dato recibido por el formulario
        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);
        $rol = $fila[0];
        $contrasena = $fila[1];
        $usu_nombre=$fila[2];
        $rol_nombre=$fila[3];
        echo $rol;

        if ($contrasena == md5($_POST['password'])) {
            $_SESSION['s_usuario'] = $usu_nombre;
            $_SESSION['s_rol'] = $rol;
            $_SESSION['s_rol_descripcion'] = $rol_nombre;
            if ($rol == 1) {
                header("Location: /vistas/admin/index.php");
            } else if ($rol == 2) {
                header("Location: /vistas/paciente.php");
            } else if ($rol == 3) {
                header("Location: /vistas/medicina.php");
            }
        } else {
            header("Location: /vistas/error.php");
            $_SESSION['s_usuario'] = null;
            //echo $consulta;
            // echo $contrasena;
        }
    }
    ?>
</body>

</html>