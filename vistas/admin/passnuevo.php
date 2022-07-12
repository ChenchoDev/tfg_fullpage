<?php 
include_once './vistas/parte_superior.php';
// Inicio parte superior
?>
<form action="" method="post">  
                        <input type="text" class="form-control" id="password" name="password" value="<?php if (isset($_POST['genpass'])) {
                                                                                                            pass();} ?>">
                        </form>  <br>
                        <button type="submit" name="genpass" class="btn btn-info">Generar Password</button>
                        <?php
                        function pass(){
                        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        $shfl = str_shuffle($comb);
                        $pwd = substr($shfl,0,10);
                        echo $pwd;
                        }
                        ?>

<?php 
//Inicio parte inferior
include_once './vistas/parte_inferior.php';

?>

