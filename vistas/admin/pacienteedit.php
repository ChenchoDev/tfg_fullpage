<?php
include_once './vistas/parte_superior.php';
// Inicio parte superior
?>

<?php
echo '<div class="container">';
echo '<h1>Editar Paciente</h1>';
$link = conecta_bd();
if (isset($_POST['edit'])) {



    $consulta = "SELECT * FROM usuarios WHERE usu_id = " . $_POST['edit'];
    $resultado = mysqli_query($link, $consulta);
    $fila = mysqli_fetch_row($resultado);
    //** */
    echo '<div class="container">';
    echo '<form action="" method="post">';
    echo '<div class="row">';
    echo '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo '<div class="input-group mb-3">';
    echo  '<span class="input-group-text bg-dark text-white fw-bold" id="inputGroup-sizing-default">Nombre</span>';
    echo  '<input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" value="' . $fila[1] . '">';
    echo '</div>';
    echo  '</div>';
   

    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo  '<div class="input-group mb-3">';
    echo   '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Apellidos</span>';
    echo   '<input type="text" class="form-control" id="apellidos" name="apellidos" value="' . $fila[2] . '">';
    echo   '</div>';
    echo  '</div>';
    echo  '</div>';

    echo '<div class="row">';
    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo  '<div class="input-group mb-3">';
    echo  '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Correo electrónico</span>';
    echo   '<input type="email" class="form-control" id="email" name="email" value="' . $fila[6] . '">';
    echo   '</div>';

    echo  '</div>';
    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo  '<div class="input-group mb-3">';
    echo   '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Dirección</span>';
    echo   '<input type="text" class="form-control" id="direcc" name="direcc" value="' . $fila[7] . '">';
    echo  '</div>';
    echo  '</div>';
    echo  '</div>';

    echo  '<div class="row">';
    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo  '<div class="input-group mb-3">';
    echo   '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">DNI</span>';
    echo  '<input type="text" class="form-control" id="dni" name="dni" value="' . $fila[3] . '">';
    echo    '</div>';

    echo  '</div>';

    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo '<div class="input-group mb-3">';
    echo    '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Teléfono</span>';
    echo   '<input type="text" class="form-control" id="telefono" name="telefono" value="' . $fila[5] . '">';
    echo  '</div>';
    echo  '</div>';
    echo   '</div>';

    echo  '<div class="row">';
    echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
    echo  '<div class="input-group mb-3">';;
                echo    '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Fecha de ingreso</span>';
                echo   '<input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="' . $fila[8] . '">';
            echo  '</div>';
            echo  '</div>';
            echo  '<div class="col-sm-12 col-md-6 col-lg-6">';
                echo '<div class="input-group mb-3">';
                echo   '<span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Fecha de alta</span>';
                if ($fila[9] == NULL || $fila[9] == '0000-00-00') {
                    echo '<form action="#" method="post">';
                    echo '<input type="text"  name="alta" value="' . $fila[0] . '" hidden>';
                    echo '<input class="btn btn-info" type="submit" value="DAR ALTA">';
                    echo '</form>';
                } else {
                echo   '<input type="text" class="form-control" id="fecha_alta" name="fecha_alta" value="' . $fila[9] . '">';
                }
            
                echo  '</div>';
            
    echo  '</div>';
    echo  '</div>';
    
    if ($fila[9] != '0000-00-00' || $fila[9] != NULL ) {
            echo '<form action="#" method="post">';
            echo '<input type="text"  name="reingreso" value="' . $fila[0] . '" hidden>';
            echo '<input class="btn btn-info" type="submit" value="REINGRESO">';
            echo '</form>';
    }


    //** */
   
}
echo '</div>';
echo '</form>';
if (isset($_POST['alta'])) {
    $alta = "UPDATE usuarios SET usu_fecha_baja=current_date() WHERE usu_id=" . $_POST['alta'];// Si se devuelve el prestamo, ponemos la fecha actual
    mysqli_query($link, $alta);
    echo("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina
   // header("Refresh:pacientestables.php");
}
if (isset($_POST['reingreso'])) {
    $reing = "UPDATE usuarios SET usu_fecha_baja='NULL' WHERE usu_id=" . $_POST['reingreso'];// Si se devuelve el prestamo, ponemos la fecha actual
    mysqli_query($link, $reing);
    echo("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina
   // header("Refresh:pacientestables.php");
}
?>

<?php

//Inicio parte inferior
include_once './vistas/parte_inferior.php';
