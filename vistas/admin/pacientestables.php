

<?php 
include_once './vistas/parte_superior.php';
// Inicio parte superior
echo '<div class="container-fluid">';

echo '<h1>Listado pacientes</h1>';


 $link =  conecta_bd(); //Cargamos los datos de la base de datos 

 $consulta = "SELECT usu_id, usu_nombre, usu_apellidos,usu_dni,usu_telefono, usu_direccion, usu_fecha_alta, usu_fecha_baja, usu_rol, usu_mail
             FROM usuarios
             WHERE usu_rol = 2"; //Consulta preparada para obtener el contenido de la tabla principal

 $resultado = mysqli_query($link, $consulta);
 echo '<form action="pacientenuevo.php" method="post">';
 ?>
 <button class='btn btn-success btn-lg m-1' type="submit">Añadir paciente <i class="fas fa-user-plus"></i></button>
  
   
   <?php     
   echo '</form><br>';


 echo '<table class="table table-bordered" id="simple-example-table" width="100%" cellspacing="0">';


 echo ' <thead><tr><th>ID</th><th>NOMBRE</th><th>APELLIDOS</th><th>CORREO</th><th>DNI</th><th>TELEFONO</th><th>DIRECCION</th><th>FECHA INGRESO</th><th>FECHA ALTA</th></tr> </thead>';
 while ($fila = mysqli_fetch_row($resultado)) {// Recorremos tabla
     echo '<tbody><tr><td>' . $fila[0] . '</td><td>' . $fila[1] . '</td><td>' . $fila[2] . '</td><td>' . $fila[9] . '</td><td>' . $fila[3] . '</td><td>' . $fila[4] . '</td><td>' . $fila[5] . '</td><td>' . $fila[6] . '</td>';
     if ($fila[7] == null || $fila[7] == '0000-00-00') {
        echo '</td><td>';
        echo '<form action="pacientestables.php" method="post">';
        echo '<input type="text"  name="alta" value="' . $fila[0] . '" hidden>';
        echo '<input class="btn btn-info" type="submit" value="DAR ALTA">';
        echo '</form>';
      
    } else {
        echo '</td><td>' . $fila[7] . '</td>';
    }
     echo '</td><td>';
     echo '<form action="#" method="post">';
   echo '<input type="text"  name="borrar" value="' . $fila[0] . '" hidden>';
   ?>
     <button class='btn btn-danger btn-lg' type='submit'><i class="fas fa-trash"></i></button>
     <?php 
     echo '</form>';
     echo '</td><td>';

     echo '<form action="pacienteedit.php" method="post">';
   echo '<input type="text" data-toggle="modal" data-target="#borrarModal" name="edit" value="' . $fila[0] . '" hidden>'; 
   ?> 
     <button class='btn btn-warning btn-lg' type='submit'><i class="fas fa-pen"></i></button>
     <?php 
     echo '</form>';
     echo '</td><td>';
     echo '<form action="pacienteedit.php" method="post">';
     echo '<input type="text"  name="edit" value="' . $fila[0] . '" hidden>';
 ?> 
       <button class='btn btn-secondary btn-lg' type='submit'><i class="fas fa-user-nurse"></i></button>
<?php 
       echo '</form>';
     echo '</td></tr></tbody>';
    }
 
     
 
 
 echo '<table>';

echo '</div><br><br>';
if (isset($_POST['alta'])) {
    $alta = "UPDATE usuarios SET usu_fecha_baja=current_date() WHERE usu_id=" . $_POST['alta'];// Si se devuelve el prestamo, ponemos la fecha actual
    mysqli_query($link, $alta);
    echo("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina
   // header("Refresh:pacientestables.php");
}

if (isset($_POST['borrar'])) {
    $alta = "DELETE FROM `usuarios` WHERE `usuarios`.`usu_id` =" . $_POST['borrar'];// Si se devuelve el prestamo, ponemos la fecha actual
    mysqli_query($link, $alta);
    echo("<script>location.href = 'pacientestables.php';</script>"); //Actualiza la pagina
   // header("Refresh:pacientestables.php");
}
 
echo '<hr class="dropdown-divider">';
//**TABLA PACIENTES */

echo '<div class="container-fluid">';

echo '<h1>Listado pacientes por médico</h1><br><br>';


 $link =  conecta_bd(); //Cargamos los datos de la base de datos 

 $consulta = "SELECT u.usu_nombre, m.usu_nombre ,u.usu_apellidos 
                 FROM usuarios u JOIN paciente p ON u.usu_id=p.pac_id
                 JOIN usuarios m ON p.pac_medico=m.usu_id
                 JOIN usuarios e ON p.pac_enfermero=e.usu_id"; //Consulta preparada para obtener el contenido de la tabla principal

 $resultado = mysqli_query($link, $consulta);



 echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';


 echo '<tr><th>NOMBRE</th><th>APELLIDOS</th><th>MEDICO</th></tr>';
 while ($fila = mysqli_fetch_row($resultado)) {// Recorremos tabla
     echo '<tr><td>' . $fila[0] . '</td><td>' . $fila[2] . '</td><td>' . $fila[1] . '</td>';
     
     echo '</td><td>';
     echo '<form action="edit.php" method="post">';
   echo '<input type="text"  name="edit" value="' . $fila[0] . '" hidden>';  //Obtenemos el valor del ID en una fila oculta para despues poder devolver el prestamo cuya ID sea la seleccionada
     echo '<input class="btn btn-primary" type="submit" value="SELECCIONAR">';
     echo '</form>';
     echo '</td><td>';

   
     echo '<tr>';
    }
 
     
 
 
 echo '<table>';

 
 

echo '</div>';
echo '<hr class="dropdown-divider">';
//**TABLA PACIENTESvsENFERMEROS */      
echo '<div class="container-fluid">';

echo '<h1>Listado pacientes por enfermero</h1><br><br>';


 $link =  conecta_bd(); //Cargamos los datos de la base de datos 

 $consulta = "SELECT u.usu_nombre ,  e.usu_nombre,u.usu_apellidos 
 FROM usuarios u JOIN paciente p ON u.usu_id=p.pac_id
                 JOIN usuarios m ON p.pac_medico=m.usu_id
                 JOIN usuarios e ON p.pac_enfermero=e.usu_id"; //Consulta preparada para obtener el contenido de la tabla principal

 $resultado = mysqli_query($link, $consulta);


?>
 <table class="table table-responsive" id="tabla1   " width="100%" cellspacing="0">

<?php
 echo '<tr><th>PACIENTE</th><th>APELLIDOS</th><th>ENFERMERO</th></tr>';
 while ($fila = mysqli_fetch_row($resultado)) {// Recorremos tabla
     echo '<tr><td>' . $fila[0] . '</td><td>' . $fila[2] . '</td><td>' . $fila[1] . '</td>';
     
     echo '</td><td>';
     echo '<form action="edit.php" method="post">';
   echo '<input type="text"  name="edit" value="' . $fila[0] . '" hidden>';  //Obtenemos el valor del ID en una fila oculta para despues poder devolver el prestamo cuya ID sea la seleccionada
     echo '<input class="btn btn-primary" type="submit" value="SELECCIONAR">';
     echo '</form>';
     echo '</td><td>';

   
     echo '<tr>';
    }
 
     
 
 
 echo '<table>';

 
 

echo '</div>';
echo '<hr class="dropdown-divider">';
//**TABLA PACIENTESvsMEDICOS */       


//Inicio parte inferior
include_once './vistas/parte_inferior.php';

?>


