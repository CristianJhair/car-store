

<header>
    <div class="logo">
        <img src="MarketCube.jpg" alt="">
    </div>
    <nav>
        <ul class="ul">
            <li><a href="index.php">Inicio</a></li>    
            
            <li><a href="index.php">Acerca de</a>
                <ul>
                    <li><a href="nosotros.php">Nosotros</a></li>
                </ul>
            </li>   
            <?php if($_SESSION["correo"]=="admin@admin.com"){ ?>
                <li><a href="registro_modelo.php">Agregar Modelo</a></li>
            <?php } ?>
            <?php if(!isset($_SESSION["correo"])){?>
                <li><a href="registro.php">Crear cuenta</a></li>
                <li><a href="login.php">Inicar sessión</a></li>
            <?php } else {?>
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
                
            
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</header>