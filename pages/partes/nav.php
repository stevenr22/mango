<style>
     .dataTables_wrapper .btn-csv {
            background-color: #e86c3a;
            border-color: #e86c3a;
            color: #fff;
        }

        .dataTables_wrapper .btn-csv:hover {
            background-color: #C45C32;
            border-color: #C45C32;
            color: #fff;
        }
        .dataTables_wrapper .btn-print {
            background-color: #8766b1;
            border-color: #8766b1;
            color: #fff;
        }

        .dataTables_wrapper .btn-print:hover {
            background-color: #715693;
            border-color: #715693;
            color: #fff;
        }
        .dataTables_wrapper .btn-excel {
            background-color: #3ca23c;
            border-color: #3ca23c;
            color: #fff;
        }

        .dataTables_wrapper .btn-excel:hover {
             background-color: #338E33;
            border-color: #338E33;
            color: #fff;
        }
</style>
<div class="top-navbar">
        <div class="xd-topbar">
            <div class="row">
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                    <div class="xp-menubar">
                        <span class="material-icons text-white">signal_cellular_alt</span>

                    </div>
                </div>

                <div class="col-md-5 col-lg-3 order-3 order-md-2">
                 
                </div>

                <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                    <div class="xp-profilebar text-right">
                        <nav class="navbar p-0">
                            <ul class="nav navbar-nav flex-row ml-auto">
                                <li class="dropdown nav-item">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <img src="../images/usuario.png" style="width:30px; border-radius:40%;">
                                        <span class="xp-user-live"></span>
                                    </a>

                                    <ul class="dropdown-menu small-menu">
                                        <li>
                                            <a href="../pages/perfil.php"><span class="material-icons">person_outline</span>
                                            Perfíl
                                            </a>
                                        </li>

                                        <li>
                                            <a href="../pages/cerrar_sesion.php"><span class="material-icons">logout</span>
                                            Cerrar sesión
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>

            </div>

                  
            <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Bienvenido</h4>
                <ol class="breadcrumb">
                <?php include("../pages/datosUP2.php");
                    $datoss = obtenerDatos2();?>
                    <li class="breadcrumb-item" name="nombre"><a href="../pages/index.php"> <?php  echo $datoss["nombre"];?> </a></li>
                    <li class="breadcrumb-item active" aria-curent="page" name="rol"></li> <?php echo $datoss["rol"];?> </li>
                </ol>
            </div>
        </div>
    </div>