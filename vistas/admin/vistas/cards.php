          <!-- Begin Page Content -->
          <div class="container-fluid">



<!-- Content Row -->
<div class="row">

    <!-- Card Pacientes -->

    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 2; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="/vistas/admin/pacientestables.php">
            <div class="card border-left-primary shadow h-100">
                <img src="../../../img/pacientes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Pacientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class='fas fa-users' style='font-size:36px'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

        <!-- Card Medicina -->

        <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 3; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="#">
            <div class="card border-left-success shadow h-100">
                <img src="../../../img/sanitarios.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Sanitarios</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                        <i class='fas fa-user-md color-success' style='font-size:36px;color:#1cc88a'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <!-- Card Admins -->

    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 1; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="#">
            <div class="card border-left-danger shadow h-100">
                <img src="../../../img/admins.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Admins</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                        <i class='fas fa-user-lock' style='font-size:36px;color:#e74a3b'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

                    <!-- Card Admins -->

                    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 1; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="#">
            <div class="card border-left-danger shadow h-100">
                <img src="../../../img/admins.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Admins</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                        <i class='fas fa-user-lock' style='font-size:36px;color:#e74a3b'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
                    <!-- Card Admins -->

                    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 1; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="#">
            <div class="card border-left-danger shadow h-100">
                <img src="../../../img/admins.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Admins</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                        <i class='fas fa-user-lock' style='font-size:36px;color:#e74a3b'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
                    <!-- Card Admins -->

                    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        $link = conecta_bd();
        $consulta = "SELECT count(*) FROM `usuarios` WHERE `usu_rol`=" . 1; //Consulta preparada para obtener el contenido de la tabla principal

        $resultado = mysqli_query($link, $consulta);
        $fila = mysqli_fetch_row($resultado);

        ?>
        <a class="enlace card_style" href="#">
            <div class="card border-left-danger shadow h-100">
                <img src="../../../img/admins.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class=" row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Admins</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fila[0] ?></div>
                        </div>
                        <div class="col-auto">
                        <i class='fas fa-user-lock' style='font-size:36px;color:#e74a3b'></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>