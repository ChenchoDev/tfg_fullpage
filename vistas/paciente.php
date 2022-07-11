<?php
    session_start();
    echo ' VISTA PACIENTE <br>';
if($_SESSION['s_usuario'] == null){
    header("Location: error.php");
}
    echo 'Usuario: '. $_SESSION['s_usuario'].'<br>';
    echo 'Rol: '. $_SESSION['s_rol_descripcion'];
if(isset($_POST['CerrarSesion'])){
    unset($_SESSION['s_usuario']);
    unset($_SESSION['s_rol_descripcion']);
    session_destroy();
    header("Location: ../index.php");
}
    ?>
<form action="" method="post" name="">
    <input type="submit" name='CerrarSesion' value="Cerrar sesión">
</form>