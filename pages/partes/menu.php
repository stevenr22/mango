<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="../images/mango-and-lef-png.ico" ><span><b>Mango Production</b></span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="active">
            <a href="../pages/index.php" class="dashboard"><i class="material-icons">dashboard</i>dashboard</a>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">equalizer</i>Estadistica
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                <li><a href="../pages/seguimiento.php">Seguimiento</a></li>
          
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i>Registros
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu5">
                <li><a href="../pages/insumos.php">Insumos</a></li>
               
            </ul>
        </li>

        <?php
            if($_SESSION['rol'] == 'Administrador'){?>
        
                            
                            
            <li class="dropdown">
                <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">content_copy</i>Reportes
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu7">
                    <li><a href="../pages/reportes.php">Producción</a></li>

                    
                </ul>
            </li>

                        
                    
            <li class="dropdown">
                 <a href="#homeSubmenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">person</i>Usuarios
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu8">
                    <li><a href="../pages/asignar_rol.php">Asignar rol</a></li>
                    <li><a href="../pages/crear_rol.php">Crear rol</a></li>
                </ul>
            </li>          
        <?php
        }
        ?>     
       
    </ul>
</div>