

<header>
    <div class="logo">
        <img src="MarketCube.jpg" alt="">
    </div>
    <nav>
        <ul class="ul">
            <li><a href="index.php">Inicio</a></li>    
            <li><a href="index.php">Tienda</a>
                <ul>
                    <li><a href="minx.php">Minx</a></li>
                    <li><a href="index.php">Cubos</a>
                        <ul>
                            <li><a href="cuboides.php">Cuboides</a></li>
                            <li><a href="2x2.php">Cubos de Rubik 2x2</a></li>
                            <li><a href="3x3.php">Cubos de Rubik 3x3</a></li>
                            <li><a href="4x4.php">Cubos de Rubik 4x4</a></li>
                            <li><a href="otros_cubos.php">Otros cubos</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="index.php">Acerca de</a>
                <ul>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="historia.php">Historia del cubo</a></li>
                </ul>
            </li>   
            <li><a href="index.php">Tutoriales</a>
                <ul>
                    <li><a href="notacion.php">Notacion Cubo Rubik</a></li>
                    <li><a href="tcubos.php">Cubos </a></li>
                    <li><a href="tminx.php">Minx</a></li>
                </ul>
            </li>
            <li><a href="noticias.php">Noticias</a></li>
            <?php if(!isset($_SESSION["correo"])){?>
                <li><a href="registro.php">Crear cuenta</a></li>
                <li><a href="login.php">Inicar sessión</a></li>
            <?php } else {?>
                <li><a href="registro_compras.php">Registro de compras</a></li>
                <li><a href="promociones.php">Promociones</a></li>
                <li><a href="perfil.php">Mi perfil</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="logout.php">Cerrar sessión</a></li>
            <?php } ?>
        </ul>
    </nav>
    <?php if(isset($_SESSION["correo"])) { ?>
    <div class="usuarioc">
        <?php if(isset($_SESSION["correo"])) { ?>
            <div class="nombre">
            
                <p id="u"> Usuario:</p><p id="usuario"> <?php echo $_SESSION["nombres"] ?> <?php echo $_SESSION["apellidos"] ?> </p>
                <?php
                include 'conexion.php';
                $co = $_SESSION["correo"];
                $stmt= $db->query("SELECT * FROM usuario where correo='$co'");
                $z = $stmt->fetch();
                ?>
                <p id="punt">Puntos: </p><p id="puntaje"><?php echo $z["puntaje"] ?></p> 
            
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</header>