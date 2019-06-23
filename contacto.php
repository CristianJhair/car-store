<?php
session_start();
include 'bloquear.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de reclamo</title>
</head>

<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
                <form action="procesar_contacto.php" method="post"  class="form-register">
                <h2 class="form__titulo">CONTÁCTATE CON NOSOTROS</h2>
                <div class="contenedor-inputs">
                    <?php if(isset($_GET["error3"])) { ?>
                        <p style= "color:red ;">Debe llenar todos los campos para poder validar su reclamo.</p>
                    <?php } ?>
                    
                    <label for="" class="label-100">Nombre:<?php echo $_SESSION["nombres"] ?></label>  
                    <label for="" class="label-100">Apellidos: <?php echo $_SESSION["apellidos"] ?></label>   
 
                    <label for="" class="label-100">Correo:  <?php echo $_SESSION["correo"] ?></label>

                    
                    <label class="label-48">Nombre del cubo: </label>
                    <select name="nomcubo">
                     
                        <optgroup label="cuboides"> 
                        <option value="QiYi 2x2x3">QiYi 2x2x3</option> 
                        <option value="MF8 2X3X4">MF8 2X3X4</option> 
                        <option value="WITEDEN SUPER 3X3X4">WITEDEN SUPER 3X3X4</option> 
                        <option value="WITEDEN 3X3X9">WITEDEN 3X3X9</option> 
                        <option value="CRAZY BAD 4X4X5">CRAZY BAD 4X4X5</option> 
                        <option value="HUNTER PILLOW 2X4X6">HUNTER PILLOW 2X4X6</option> 
                        <option value="CALVIN 3X3X5 FISHER STAR">CALVIN 3X3X5 FISHER STAR</option> 
                        <option value="CRAZY BAD 4X4X6 FISHER CUBOID">CRAZY BAD 4X4X6 FISHER CUBOID</option> 
                        <option value="YJ FLOPPY GHOST CUBE">YJ FLOPPY GHOST CUBE</option> 
                        <option value="WITEDEN 3X3X6">WITEDEN 3X3X6</option> 
                        <option value="WITEDEN 4X4X2">WITEDEN 4X4X2</option> 
                        <option value="AYI 5X5X4">AYI 5X5X4</option> 
                        <option value="CUBESTYLE 3X3X2">CUBESTYLE 3X3X2</option> 
                        <option value="C4U 3X3X7">C4U 3X3X7</option> 
                        <option value="WITEDEN CAMOUFLAGE 4X4X3">WITEDEN CAMOUFLAGE 4X4X3</option> 
                        <option value="Mofangjiaoshi MF6">Mofangjiaoshi MF6</option> 
                        </optgroup> 

                        <optgroup label="2x2"> 
                        <option value="MOYU LINGPO">MOYU LINGPO</option> 
                        <option value="LANLAN 2X2X2 TRANSPARENTE">LANLAN 2X2X2 TRANSPARENTE</option> 
                        <option value="FANGSHI XINGYU 2X2">FANGSHI XINGYU 2X2</option> 
                        <option value="YJ YUPO 2X2">YJ YUPO 2X2</option> 
                        <option value="MOYU TANGPO 2X2">MOYU TANGPO 2X2</option> 
                        <option value="V-CUBE 2X2 PILLOW">V-CUBE 2X2 PILLOW</option> 
                        <option value="Z-CUBE 2X2 FIBRA DE CARBONO">Z-CUBE 2X2 FIBRA DE CARBONO</option> 
                        <option value="GUOGUAN XINGHEN 2X2 MAGNÉTICO">GUOGUAN XINGHEN 2X2 MAGNÉTICO</option> 
                        <option value="CYCLONE BOYS FEIZHI 2X2">CYCLONE BOYS FEIZHI 2X2</option> 
                        <option value="YJ MGC 2X2 M">YJ MGC 2X2 M</option> 
                        <option value="Shengshou Mirror 2×2">Shengshou Mirror 2×2</option> 
                        </optgroup> 
                        <optgroup label="3x3"> 
                        <option value="MOYU WEILONG V2">MOYU WEILONG V2</option> 
                        <option value="MOYU AOLONG V2">MOYU AOLONG V2</option> 
                        <option value="CUBO RUBIK GIGANTE 18CM 3X3X3">CUBO RUBIK GIGANTE 18CM 3X3X3</option> 
                        <option value="MOYU HUALONG">MOYU HUALONG</option> 
                        <option value="MEFFERT VENUS CUBE">MEFFERT VENUS CUBE</option> 
                        <option value="FANGSHI ILUSION">FANGSHI ILUSION</option> 
                        <option value="GANS 356 ADVANCED">GANS 356 ADVANCED</option> 
                        <option value="V-CUBE 3X3 PILLOW">V-CUBE 3X3 PILLOW</option> 
                        <option value="Z-CUBE 3X3 FIBRA DE CARBONO">Z-CUBE 3X3 FIBRA DE CARBONO</option> 
                        <option value="GUOGUAN YUEXIAO 3X3 PRO MAGNÉTICO">GUOGUAN YUEXIAO 3X3 PRO MAGNÉTICO</option> 
                        <option value="Mofangge Valk3 Power M">Mofangge Valk3 Power M</option> 
                        <option value="Z 3×3 Carbon">Z 3×3 Carbon</option> 
                        </optgroup> 
                        <optgroup label="4x4"> 
                        <option value="SHENGSHOU 4X4 V5">SHENGSHOU 4X4 V5</option> 
                        <option value="MOYU WEISU 4X4">MOYU WEISU 4X4</option> 
                        <option value="MOYU AOSU 4X4">MOYU AOSU 4X4</option> 
                        <option value="CONG DESIGN MEIYU 4X4">CONG DESIGN MEIYU 4X4</option> 
                        <option value="V-CUBE 4X4 PILLOW">V-CUBE 4X4 PILLOW</option> 
                        <option value="SHENGSHOU WIND 4X4">SHENGSHOU WIND 4X4</option> 
                        <option value="Z-CUBE 4X4 FIBRA DE CARBONO">Z-CUBE 4X4 FIBRA DE CARBONO</option> 
                        <option value="QIYI THUNDERCLAP 4X4">QIYI THUNDERCLAP 4X4</option> 
                        <option value="GAN 460 M">GAN 460 M</option> 
                        <option value="QIYI MINI WUQUE 4X4 M">QIYI MINI WUQUE 4X4 M</option> 
                        </optgroup> 
                        <optgroup label="minx"> 
                        <option value="DAYAN PYRAMINX">DAYAN PYRAMINX</option> 
                        <option value="MOYU PYRAMINX MAGNÉTICO">MOYU PYRAMINX MAGNÉTICO</option> 
                        <option value="QJ PYRAMINX CRISTAL">QJ PYRAMINX CRISTAL</option> 
                        <option value="LANLAN MASTER PYRAMINX">LANLAN MASTER PYRAMINX</option> 
                        <option value="DAYAN MEGAMINX">DAYAN MEGAMINX</option> 
                        <option value="DAYAN MEGAMINX CON REBORDES">DAYAN MEGAMINX CON REBORDES</option> 
                        <option value="MEGAMINX TRAIPHUM BALL">MEGAMINX TRAIPHUM BALL</option> 
                        <option value="CALVINS HEXAMINX">CALVINS HEXAMINX</option> 
                        <option value="SHENGSHOU MEGAMINX 2X2">SHENGSHOU MEGAMINX 2X2</option> 
                        <option value="EVGENIY CURVY MEGAMINX">EVGENIY CURVY MEGAMINX</option> 
                        <option value="Z-CUBE MEGAMINX FIBRA DE CARBONO">Z-CUBE MEGAMINX FIBRA DE CARBONO</option> 
                        <option value="DAYAN BERMUDA MEGAMINX">DAYAN BERMUDA MEGAMINX</option> 
                        <option value="Lanlan 4×4 Dodecahedron">Lanlan 4×4 Dodecahedron</option> 
                        </optgroup> 
                        <optgroup label="otros cubos"> 
                        <option value="CURVY COPTER">CURVY COPTER</option> 
                        <option value="MEFFERTS CURVY COPTER PLUS">MEFFERTS CURVY COPTER PLUS</option> 
                        <option value="SMAZ 2X2 CURVY CHOP">SMAZ 2X2 CURVY CHOP</option> 
                        <option value="Z-CUBE HELICOPTER">Z-CUBE HELICOPTER</option> 
                        <option value="SHENGSHOU SQUARE-1">SHENGSHOU SQUARE-1</option> 
                        <option value="LEFUN 2X2 DART">LEFUN 2X2 DART</option> 
                        <option value="SKEWB APLASTADO LAN LAN">SKEWB APLASTADO LAN LAN</option> 
                        <option value="Z HOLLOW SKEWB">Z HOLLOW SKEWB</option> 
                        <option value="QJ SKEWB DODECAEDRO RÓMBICO">QJ SKEWB DODECAEDRO RÓMBICO</option> 
                        <option value="MEFFERTS SKEWB ULTIMATE">MEFFERTS SKEWB ULTIMATE</option> 
                        <option value="Z-CUBE SKEWB FIBRA DE CARBONO">Z-CUBE SKEWB FIBRA DE CARBONO</option> 
                        <option value="FANGCUN GHOST SKEWB">FANGCUN GHOST SKEWB</option> 
                        <option value="Mofangge Pack Mixto">Mofangge Pack Mixto</option> 
                        <option value="Mofangjiaoshi Pack Mixto">Mofangjiaoshi Pack Mixto</option> 
                        <option value="Mofangge Mirror">Mofangge Mirror</option> 
                        <option value="Z Box Set Carbon">Z Box Set Carbon</option> 
                        </optgroup> 
                        
                    </select>           
                    <input type="text" name="asunto" placeholder="Asunto" class="input-100">
                    <textarea name="mensaje" cols="30" rows="10" class="input-100" placeholder="Mensaje"></textarea>
                    <input type="submit" value="ENVIAR" class="btn-enviar">
                </div>
                </form>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </div>   
</body>
</html>