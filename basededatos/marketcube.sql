-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2018 a las 05:52:36
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marketcube`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL,
  `producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `usuario`, `contenido`, `fecha`, `producto`) VALUES
(1, 'Carlos  Zapata', 'xzczxczx', '2018-11-08 08:34:34', 'WITEDEN 3X3X6 '),
(5, 'juan  Perales', 'xcvxvx', '2018-11-08 10:25:26', 'WITEDEN 3X3X6 '),
(6, 'juan  Perales', 'xvxcv', '2018-11-08 10:30:54', 'Mofangjiaoshi Pack Mixto'),
(7, 'juan  Perales', 'Hola', '2018-11-11 11:46:21', 'WITEDEN 3X3X6 '),
(8, 'juan  Perales', 'fasdfasf', '2018-11-11 22:48:09', 'CRAZY BAD 4X4X5'),
(9, 'juan  Perales', 'un cubaso k pex\r\n', '2018-11-11 22:49:47', 'Z 3×3 Carbon'),
(10, 'juan  Perales', 'q wen servicio k pex', '2018-11-11 22:52:10', 'Z-CUBE MEGAMINX FIBRA DE CARBONO'),
(11, 'juan  Perales', 'wen cubo', '2018-11-14 18:43:28', 'WITEDEN 3X3X6 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `nombreCli` varchar(200) NOT NULL,
  `apellidoCli` varchar(200) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `numero de cuenta` varchar(20) NOT NULL,
  `fecha de compra` date NOT NULL,
  `producto` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio unitario` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `puntos utilizados` int(11) NOT NULL,
  `pago total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `nombreCli`, `apellidoCli`, `pais`, `provincia`, `direccion`, `numero de cuenta`, `fecha de compra`, `producto`, `tipo`, `precio unitario`, `cantidad`, `puntos utilizados`, `pago total`) VALUES
(3, 'juan', 'Perales', 'Peru', 'Tarma', 'zxczx', '179123005840', '2018-11-08', 'Mofangjiaoshi Pack Mixto', 'promocion', '220.00', 1, 90, '220.00'),
(4, 'juan', 'Perales', 'Peru', 'Tarma', 'zxczx', '179123005840', '2018-11-08', 'QiYi 2x2x3', 'cuboide', '50.78', 1, 0, '50.78'),
(5, 'juan', 'Perales', 'Peru', 'Lima', '15', '179123005840', '2018-11-11', 'QiYi 2x2x3', 'cuboide', '50.78', 1, 0, '50.78'),
(6, 'juan', 'Perales', 'Peru', 'Lima', 'fsa', '179123005840', '2018-11-14', 'WITEDEN 3X3X6 ', 'cuboide', '68.40', 1, 0, '68.40'),
(7, 'juan', 'Perales', 'Peru', 'Lima', 'fsa', '179123005840', '2018-11-14', 'WITEDEN 3X3X6 ', 'cuboide', '68.40', 1, 0, '68.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `Nombre cliente` varchar(100) NOT NULL,
  `Apellido cliente` varchar(100) NOT NULL,
  `Correo cliente` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo de cubo` varchar(50) NOT NULL,
  `nombre de cubo` varchar(60) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `Nombre cliente`, `Apellido cliente`, `Correo cliente`, `fecha`, `tipo de cubo`, `nombre de cubo`, `asunto`, `mensaje`) VALUES
(9, 'juan', 'Perales', 'Juan1@hotmail.com', '2018-11-14 23:31:31', 'cuboide', 'QiYi 2x2x3', 'mal estado', 'vbcvbcvbc'),
(10, 'juan', 'Perales', 'Juan@hotmail.com', '2018-11-14 23:50:04', 'cuboide', 'CRAZY BAD 4X4X6 FISHER CUBOID', 'szxczx', 'zczczxc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `contenido`, `imagen`) VALUES
(2, 'Un británico dedica 27.400 horas a lo largo de 26 años para resolver el cubo de Rubik', '¿Cuánto se tarda en resolver un cubo de Rubik? El empeño de cada uno, el tiempo que se dedique y la habilidad son algunos de los factores que servirían para hacer el cálculo. Se da el caso de personas que lo hacen en apenas unos segundos y otros, como es el protagonista de esta historia, que lo han solventado en años. Hablamos del británico Graham Parker, que vive en la localidad inglesa de Portchester, que ha dedicado 27.400 horas de su vida a lo largo de 26 años para resolver el conocido cubo de Rubik, informa The Telegraph. Parker compró el juguete en 1983 y siempre se ha marcado como reto resolverlo. Incluso ha pasado interminables noches sin dormir buscando la manera de que cada cara del cubo estuviera del mismo color. Me he perdido importantes eventos de mi vida por intentar solucionar el cubo \"Me he perdido importantes eventos de mi vida por solucionar el cubo y he pasado noches sin dormir pensando cómo hacerlo\", ha comentado al citado diario. \"Mis amigos se han ofrecido a solventarlo y sé que puedo encontrar la solución en Internet, pero quería hacerlo por mi mismo\", continúa. Lágrimas de alegría ¿Y qué pasó cuando consiguió el reto? \"Cuando coloqué la última pieza en su lugar y vi que cada cara tenía su color, lloré de alegría\", contesta Parker, que incluso ha tenido algún que otro problema matrimonial por el complicado cubo. Ray Hodgkin, miembro del World Cube Association (WCA), que organiza competiciones del cubo de Rubik, comentó que Parker es la persona \"que más tiempo ha tardado en completar el cubo\". \"Estoy impresionado por la dedicación de Graham ya que el cubo puede ser algo muy frustrante\", comentó.', 'http://www.jabinesban.com/wp-content/uploads/2009/01/cubo_rubik.jpg'),
(3, 'Un robot bate el récord mundial del cubo de Rubik y lo fija a 0,38 segundos', 'Los movimientos son tan rápidos que es necesario reproducir el contenido a cámara lenta. El récord actual humano era de 4,5 segundos.\r\n¿Te crees capaz de resolver el cubo de Rubik en 0,38 segundos? Mientras te planteas la respuesta un robot ya lo ha hecho. La máquina creada por Jared di Caprio y Ben Katz ha batido el récord mundial en hacer lo que para muchos es imposible en apenas 0,38 segundos. Los movimientos del robot son tan rápidos que hace falta procesar el vídeo a una cámara lenta con tal de reproducir el contenido a 0,03% de la velocidad real. En su blog personal, Jared di Caprio cuenta cómo ha retado a su compañero Ben a la creación de una máquina capaz de superar el récord actual humano de 4,5 segundos. Lo único que tuvo que hacer fue dotar el motor de su robot y hacerlo más potente que los hasta ahora existentes.', 'https://cdn.20m.es/img2/recortes/2018/03/09/654931-600-338.jpg'),
(4, 'Una española logra el récord de Europa del cubo de Rubik con los ojos cerrados', 'La española Berta García ha batido el récord de Europa del cubo de Rubik con los ojos cerrados, dejando el tiempo en 20,38 segundos, en el Open del Cubo de Rubik 2017 que ha tenido lugar en El Escorial. El campeonato ha contado con más de noventa participantes en sus quince categorías y ha llevado este fin de semana a la localidad madrileña a jugadores de Hungría, Perú, Estados Unidos, Polonia, China, Rumanía y Grecia. Sin embargo, han sido los españoles Manuel Prieto (10,29 segundos), Alberto Pérez de Rada (11,61 segundos) y Rafael Rodríguez (11,74 segundos) quienes coparon las tres primeras plazas de la prueba reina del cubo de Rubik. La sorpresa del campeonato vino de la mano de Berta García Parra, que con un extraordinario crono de 20,38 segundos resolvió el cubo con los ojos cerrados, batiendo en 1,6 segundos su propia marca nacional, el récord de Europa y marcando el tercer mejor tiempo mundial de la historia. Berta, igualmente, se alzó con el oro en la categoría de cubo 4x4x4 a ciegas con un tiempo de 5:03,98. Las mejores marcas de la competición general fueron, en categoría masculina para Rafael Rodríguez que resolvió el cubo de Rubik en 8,19 segundos, y en categoría femenina para María del Mar Gallego Vicente con una marca de 14,61 segundos. En una nota de prensa, el Ayuntamiento de El Escorial ha informado que el participante más veterano de la competición fue un año más Jesús Masanet con casi 56 años y el más joven Alejandro Fernández con 6 años.', 'https://cdn.20m.es/img2/recortes/2017/05/15/474212-600-338.jpg'),
(5, 'El Tribunal de la Unión Europea avala la forma del cubo de Rubik como marca comunitaria', 'El Tribunal General de la Unión Europea (UE) avaló este martes el registro de la forma del cubo de Rubik como marca comunitaria, desestimando así un recurso del fabricante alemán de juguetes Simba Toys, que había pedido su anulación. En su sentencia, la Corte, con sede en Luxemburgo, precisó que la representación gráfica de dicho cubo no incorpora una solución técnica que impida su protección como marca. La Oficina de marcas de la Unión (OAMI) registró en 1999 como marca comunitaria tridimensional la forma de dicho cubo para \"puzles tridimensionales\", a petición de Seven Towns, sociedad británica que gestiona los derechos de propiedad intelectual sobre el \'Cubo de Rubik\'. En 2006 Simba Toys solicitó a la OAMI que anulase la marca tridimensional alegando que ésta incorporaba una \"solución técnica consistente en su capacidad de rotación\" que \"sólo podía protegerse mediante una patente y no mediante una marca\". La OAMI desestimó esa solicitud, por lo que la juguetera alemana interpuso ante el Tribunal General un recurso para anular la resolución de la oficina. El Tribunal General desestimó así este martes el recurso de Simba Toys al considerar que las características esenciales de la marca son, por un lado, \"el cubo en sí mismo\", y, por otro, \"la estructura cuadriculada que figura en cada una de sus caras\".', 'https://estaticos.elperiodico.com/resources/jpg/5/7/1503507443275.jpg'),
(6, 'Google desvela la solución universal al cubo de Rubik: 20 movimientos', 'Durante los últimos 15 años, la solución al cubo de Rubik parecía estar en un mínimo de 18 movimientos, aunque no había certeza respecto a la cifra definitiva. Ahora, unos investigadores de la Universidad de Kent han anunciado el número \"final\", gracias a la ayuda de Google: 20 movimientos, ni uno más. Así, los investigadores determinaron que existen más de 100.000 posiciones iniciales del cubo y las soluciones, en su mayoría, no pueden requerir más de 15 y 19 movimientos. Sin embargo, algunas combinaciones obligan a realizar 20 giros, lo que ha sido bautizado como \"el número de Dios\". El profesor Davidson, responsable de la investigación, explicó que, a día de hoy, la cifra mínima de movimientos era una \"creencia religiosa\", puesto que nadie había podido demostrar ese tope. Por ello, decidió iniciar este proyecto con las sospechas de que cualquier jugador necesitaría al menos 21 giros de cubos interiores, según recoge Portaltic de la BBC. Para facilitar el trabajo, Davidson y compañía decidieron dividir todas las posibilidades en 2.200 millones de grupos, cada uno con 20.000 millones de posiciones distintas. Al principio, descartaron todas aquellas opciones que podrían duplicarse y usaron también \"simetría\" para reducir combinaciones \"similares\". Así, el equipo británico consiguió reducir las opciones iniciales hasta 56 millones de posibles combinaciones, si bien necesitaban reducir aún más esta cifra. Debido a la cantidad de tiempo que requerirían los ordenadores habituales, decidieron pedir ayuda a Google.', 'http://fotos02.diariodemallorca.es/mmp/2014/05/19/646x260/doodle.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `imagen` text NOT NULL,
  `puntos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `tipo`, `imagen`, `puntos`, `cantidad`) VALUES
(1, 'QiYi 2x2x3', '50.78', 'cuboide', 'https://kubekings.com/10084-home_default/qiyi-2x2x3.jpg', 20, 28),
(2, 'MF8 2X3X4 ', '50.40', 'cuboide', 'https://kubekings.com/2043-home_default/2x3x4-mf8.jpg', 15, 30),
(3, 'WITEDEN SUPER 3X3X4', '52.60', 'cuboide', 'https://kubekings.com/6961-home_default/witeden-super-3x3x4-01.jpg', 18, 30),
(4, 'WITEDEN 3X3X9', '58.63', 'cuboide', 'https://kubekings.com/5765-home_default/witeden-3x3x9.jpg', 26, 30),
(5, 'CRAZY BAD 4X4X5', '59.99', 'cuboide', 'https://kubekings.com/12440-home_default/crazy-bad-4x4x5-centro-desplazado.jpg', 30, 30),
(6, 'HUNTER PILLOW 2X4X6', '61.74', 'cuboide', 'https://kubekings.com/5762-home_default/hunter-pillow-2x4x6.jpg', 35, 30),
(7, 'CALVIN 3X3X5 FISHER STAR', '65.40', 'cuboide', 'https://kubekings.com/11873-home_default/calvin-s-3x3x5-fisher-star.jpg', 40, 30),
(8, 'CRAZY BAD 4X4X6 FISHER CUBOID', '67.48', 'cuboide', 'https://kubekings.com/4077-home_default/crazy-bad-4x4x6-fisher-cuboid.jpg', 30, 30),
(9, 'YJ FLOPPY GHOST CUBE', '80.99', 'cuboide', 'https://kubekings.com/10994-home_default/yj-floppy-ghost-cube.jpg', 22, 30),
(10, 'WITEDEN 3X3X6 ', '68.40', 'cuboide', 'https://kubekings.com/2035-home_default/3x3x6-witeden-negro.jpg', 25, 28),
(11, 'WITEDEN 4X4X2', '69.40', 'cuboide', 'https://kubekings.com/3563-home_default/witeden-4x4x2.jpg', 15, 30),
(12, 'AYI 5X5X4', '69.70', 'cuboide', 'https://kubekings.com/5831-home_default/ayi-5x5x4.jpg', 25, 30),
(13, 'CUBESTYLE 3X3X2', '25.40', 'cuboide', 'https://kubekings.com/10795-home_default/cubestyle-3x3x2.jpg', 15, 30),
(14, 'C4U 3X3X7', '69.80', 'cuboide', 'https://kubekings.com/2939-home_default/c4u-3x3x7.jpg', 20, 30),
(15, 'WITEDEN CAMOUFLAGE 4X4X3', '75.40', 'cuboide', 'https://kubekings.com/11652-home_default/witeden-camouflage-4x4x3.jpg', 20, 30),
(16, 'MOYU LINGPO', '22.20', '2x2', 'https://kubekings.com/3203-home_default/moyu-lingpo.jpg', 20, 30),
(17, 'LANLAN 2X2X2 TRANSPARENTE', '25.30', '2x2', 'https://kubekings.com/3703-home_default/lanlan-2x2x2-transparente.jpg', 25, 30),
(18, 'FANGSHI XINGYU 2X2', '27.80', '2x2', 'https://kubekings.com/3700-home_default/fangshi-xingyu-2x2.jpg', 20, 30),
(19, 'YJ YUPO 2X2', '15.47', '2x2', 'https://kubekings.com/4763-home_default/yj-yupo-2x2.jpg', 35, 30),
(20, 'MOYU TANGPO 2X2', '29.74', '2x2', 'https://kubekings.com/4402-home_default/moyu-tangpo-2x2.jpg', 17, 30),
(21, 'V-CUBE 2X2 PILLOW', '26.30', '2x2', 'https://kubekings.com/5849-home_default/v-cube-2x2-pillow.jpg', 14, 30),
(22, 'Z-CUBE 2X2 FIBRA DE CARBONO', '29.40', '2x2', 'https://kubekings.com/11610-home_default/z-cube-2x2-fibra-de-carbono.jpg', 20, 30),
(23, 'GUOGUAN XINGHEN 2X2 MAGNÉTICO', '35.55', '2x2', 'https://kubekings.com/11007-home_default/guoguan-xinghen-2x2-magnetico.jpg', 23, 30),
(24, 'CYCLONE BOYS FEIZHI 2X2', '13.42', '2x2', 'https://kubekings.com/12152-home_default/cyclone-boys-feizhi-2x2.jpg', 25, 30),
(25, 'YJ MGC 2X2 M', '16.87', '2x2', 'https://kubekings.com/13980-home_default/yj-mgc-2x2-m.jpg', 30, 30),
(26, 'MOYU WEILONG V2', '19.41', '3x3', 'https://kubekings.com/2205-home_default/moyu-weilong-v2.jpg\r\n', 15, 40),
(27, 'MOYU AOLONG V2', '25.40', '3x3', 'https://kubekings.com/3398-home_default/moyu-aolong-v2.jpg', 14, 40),
(28, 'CUBO RUBIK GIGANTE 18CM 3X3X3', '35.40', '3x3', 'https://kubekings.com/5205-home_default/cubo-rubik-gigante-18cm-3x3x3.jpg', 18, 40),
(29, 'MOYU HUALONG', '27.80', '3x3', 'https://kubekings.com/3916-home_default/moyu-hualong.jpg', 19, 40),
(30, 'MEFFERT VENUS CUBE', '30.40', '3x3', 'https://kubekings.com/2933-home_default/meffert-s-venus-cube.jpg', 22, 40),
(31, 'FANGSHI ILUSION', '28.48', '3x3', 'https://kubekings.com/3659-home_default/fangshi-ilusion.jpg', 25, 40),
(32, 'GANS 356 ADVANCED', '37.58', '3x3', 'https://kubekings.com/4667-home_default/gans-356-advanced.jpg', 28, 40),
(33, 'V-CUBE 3X3 PILLOW', '26.40', '3x3', 'https://kubekings.com/5853-home_default/v-cube-3x3-pillow.jpg', 23, 40),
(34, 'Z-CUBE 3X3 FIBRA DE CARBONO', '27.65', '3x3', 'https://kubekings.com/7455-home_default/z-cube-3x3-fibra-de-carbono.jpg', 25, 40),
(35, 'GUOGUAN YUEXIAO 3X3 PRO MAGNÉTICO', '42.68', '3x3', 'https://kubekings.com/11317-home_default/guoguan-yuexiao-3x3-pro-magnetico.jpg', 28, 40),
(36, 'SHENGSHOU 4X4 V5', '23.45', '4x4', 'https://kubekings.com/5143-home_default/shengshou-4x4-v5.jpg', 25, 40),
(37, 'MOYU WEISU 4X4', '27.30', '4x4', 'https://kubekings.com/3957-home_default/moyu-weisu-4x4.jpg', 23, 40),
(38, 'MOYU AOSU 4X4', '29.40', '4x4', 'https://kubekings.com/5223-home_default/moyu-aosu-4x4x4.jpg', 21, 40),
(39, 'CONG DESIGN MEIYU 4X4', '26.84', '4x4', 'https://kubekings.com/4956-home_default/cong-s-design-meiyu-4x4.jpg', 20, 40),
(40, 'V-CUBE 4X4 PILLOW', '30.50', '4x4', 'https://kubekings.com/5876-home_default/v-cube-4x4-pillow.jpg', 22, 40),
(41, 'SHENGSHOU WIND 4X4', '21.40', '4x4', 'https://kubekings.com/6382-home_default/shengshou-wind-4x4.jpg', 20, 40),
(42, 'Z-CUBE 4X4 FIBRA DE CARBONO', '29.75', '4x4', 'https://kubekings.com/12167-home_default/z-cube-4x4-fibra-de-carbono.jpg', 21, 40),
(43, 'QIYI THUNDERCLAP 4X4', '23.40', '4x4', 'https://kubekings.com/10823-home_default/qiyi-thunderclap-4x4.jpg', 23, 40),
(44, 'GAN 460 M', '35.20', '4x4', 'https://kubekings.com/13347-home_default/gan-460-m.jpg', 22, 40),
(45, 'QIYI MINI WUQUE 4X4 M', '29.70', '4x4', 'https://kubekings.com/13831-home_default/qiyi-mini-wuque-4x4-m.jpg', 23, 40),
(46, 'DAYAN PYRAMINX', '35.70', 'minx', 'https://kubekings.com/2985-home_default/dayan-pyraminx.jpg', 27, 40),
(47, 'MOYU PYRAMINX MAGNÉTICO', '30.70', 'minx', 'https://kubekings.com/6419-home_default/moyu-pyraminx-magnetico.jpg', 26, 40),
(48, 'QJ PYRAMINX CRISTAL', '36.70', 'minx', 'https://kubekings.com/3128-home_default/qj-pyraminx-cristal.jpg', 29, 40),
(49, 'LANLAN MASTER PYRAMINX', '29.70', 'minx', 'https://kubekings.com/9778-home_default/lanlan-master-pyraminx.jpg', 28, 40),
(50, 'DAYAN MEGAMINX', '33.50', 'minx', 'https://kubekings.com/2783-home_default/dayan-megaminx.jpg', 32, 40),
(51, 'DAYAN MEGAMINX CON REBORDES', '53.80', 'minx', 'https://kubekings.com/5370-home_default/dayan-megaminx-con-rebordes.jpg', 46, 35),
(52, 'MEGAMINX TRAIPHUM BALL', '58.74', 'minx', 'https://kubekings.com/9427-home_default/megaminx-traiphum-ball.jpg', 47, 35),
(53, 'CALVINS HEXAMINX', '63.50', 'minx', 'https://kubekings.com/7628-home_default/hexaminx.jpg', 54, 35),
(54, 'SHENGSHOU MEGAMINX 2X2', '36.78', 'minx', 'https://kubekings.com/6084-home_default/shengshou-megaminx-2x2.jpg', 24, 35),
(55, 'EVGENIY CURVY MEGAMINX', '58.74', 'minx', 'https://kubekings.com/6998-home_default/evgeniy-curvy-megaminx.jpg', 52, 35),
(56, 'Z-CUBE MEGAMINX FIBRA DE CARBONO', '70.30', 'minx', 'https://kubekings.com/8178-home_default/z-cube-megaminx-fibra-de-carbono.jpg', 62, 35),
(57, 'DAYAN BERMUDA MEGAMINX', '65.89', 'minx', 'https://kubekings.com/12307-home_default/dayan-bermuda-megaminx.jpg', 65, 35),
(58, 'CURVY COPTER', '48.50', 'otro', 'https://kubekings.com/5175-home_default/curvy-copter.jpg', 48, 35),
(59, 'MEFFERTS CURVY COPTER PLUS', '57.40', 'otro', 'https://kubekings.com/4624-home_default/mefferts-curvy-copter-plus.jpg', 53, 35),
(60, 'SMAZ 2X2 CURVY CHOP', '35.68', 'otro', 'https://kubekings.com/4205-home_default/smaz-2x2-curvy-chop.jpg', 31, 35),
(61, 'Z-CUBE HELICOPTER', '45.74', 'otro', 'https://kubekings.com/6252-home_default/z-cube-helicopter.jpg', 37, 35),
(62, 'SHENGSHOU SQUARE-1', '57.85', 'otro', 'https://kubekings.com/3356-home_default/shengshou-square-1.jpg', 52, 35),
(63, 'LEFUN 2X2 DART', '30.40', 'otro', 'https://kubekings.com/12415-home_default/lefun-2x2-dart.jpg', 28, 35),
(64, 'SKEWB APLASTADO LAN LAN', '54.65', 'otro', 'https://kubekings.com/4604-home_default/skewb-aplastado-lan-lan.jpg', 56, 35),
(65, 'Z HOLLOW SKEWB', '58.99', 'otro', 'https://kubekings.com/4099-home_default/z-hollow-skewb.jpg', 58, 35),
(66, 'QJ SKEWB DODECAEDRO RÓMBICO', '60.41', 'otro', 'https://kubekings.com/4390-home_default/qj-skewb-dodecaedro-rombico.jpg', 68, 35),
(67, 'MEFFERTS SKEWB ULTIMATE', '52.40', 'otro', 'https://kubekings.com/5527-home_default/mefferts-skewb-ultimate.jpg', 58, 35),
(68, 'Z-CUBE SKEWB FIBRA DE CARBONO', '65.58', 'otro', 'https://kubekings.com/8021-home_default/z-cube-skewb-fibra-de-carbono.jpg', 69, 35),
(69, 'FANGCUN GHOST SKEWB', '67.58', 'otro', 'https://kubekings.com/11444-home_default/fangcun-ghost-skewb.jpg', 71, 35),
(70, 'Mofangge Pack Mixto', '250.00', 'otro', 'http://thecubegirls.com/wp-content/uploads/2018/08/Mofangge-Pack-Mixto.jpg', 50, 50),
(71, 'Mofangjiaoshi Pack Mixto', '270.00', 'otro', 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangjiaoshi-Mix-Pack.jpg', 45, 50),
(72, 'Z 3×3 Carbon', '75.00', '3x3', 'http://thecubegirls.com/wp-content/uploads/2018/04/Z-Carbon-3x3.jpg', 40, 50),
(73, 'Mofangge Valk3 Power M', '95.00', '3x3', 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangge-Valk-Power-M.jpg', 53, 50),
(74, 'Mofangjiaoshi MF6', '60.00', 'cuboide', 'http://thecubegirls.com/wp-content/uploads/2018/02/MFJS-MF6.jpg', 30, 50),
(75, 'Mofangge Mirror', '70.00', 'otro', 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangge-Mirror-Azul.jpg', 30, 50),
(76, 'Shengshou Mirror 2×2', '40.00', '2x2', 'http://thecubegirls.com/wp-content/uploads/2017/12/Shengshou-Mirror-2x2.jpg', 20, 50),
(77, 'Z Box Set Carbon', '300.00', 'otro', 'http://thecubegirls.com/wp-content/uploads/2017/12/Z-Box-Set-Carbon.jpg', 70, 50),
(78, 'Lanlan 4×4 Dodecahedron', '70.00', 'minx', 'http://thecubegirls.com/wp-content/uploads/2017/12/Lanlan-4x4-Dodecahedron.jpg', 40, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio actual` decimal(10,2) NOT NULL,
  `precio rebajado` decimal(10,2) NOT NULL,
  `puntos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `nombre`, `tipo`, `precio actual`, `precio rebajado`, `puntos`, `cantidad`, `imagen`) VALUES
(1, 'Mofangge Pack Mixto', 'promocion', '250.00', '175.85', 120, 35, 'http://thecubegirls.com/wp-content/uploads/2018/08/Mofangge-Pack-Mixto.jpg'),
(2, 'Mofangjiaoshi Pack Mixto', 'promocion', '270.00', '220.00', 90, 33, 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangjiaoshi-Mix-Pack.jpg'),
(3, 'Z 3×3 Carbon', 'promocion', '75.00', '48.78', 36, 35, 'http://thecubegirls.com/wp-content/uploads/2018/04/Z-Carbon-3x3.jpg'),
(4, 'Mofangge Valk3 Power M', 'promocion', '95.00', '79.89', 50, 35, 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangge-Valk-Power-M.jpg'),
(5, 'Mofangjiaoshi MF6', 'promocion', '60.00', '40.00', 45, 35, 'http://thecubegirls.com/wp-content/uploads/2018/02/MFJS-MF6.jpg'),
(6, 'Mofangge Mirror', 'promocion', '70.00', '50.00', 52, 35, 'http://thecubegirls.com/wp-content/uploads/2018/04/Mofangge-Mirror-Azul.jpg'),
(7, 'Shengshou Mirror 2×2', 'promocion', '40.00', '27.40', 34, 35, 'http://thecubegirls.com/wp-content/uploads/2017/12/Shengshou-Mirror-2x2.jpg'),
(8, 'Z Box Set Carbon', 'promocion', '300.00', '255.00', 125, 35, 'http://thecubegirls.com/wp-content/uploads/2017/12/Z-Box-Set-Carbon.jpg'),
(9, 'Lanlan 4×4 Dodecahedron', 'promocion', '70.00', '50.00', 40, 35, 'http://thecubegirls.com/wp-content/uploads/2017/12/Lanlan-4x4-Dodecahedron.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha de registro` datetime NOT NULL,
  `numero de cuenta` varchar(20) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `correo`, `fecha_nacimiento`, `telefono`, `dni`, `password`, `fecha de registro`, `numero de cuenta`, `saldo`, `puntaje`) VALUES
(10, 'juan', 'Perales', 'Juan@hotmail.com', '2018-11-07', '990664531', '10427567', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-08 09:17:21', '179123005840', '1041.64', 90);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
