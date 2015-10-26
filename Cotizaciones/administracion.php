<?php
session_start();
if ($_SESSION['permiso'] == 2) {
    header('Location: ventas.php');
}

if (isset($_SESSION['cotizacion'])) {
    $cotizacion = 1;
} else {
    $cotizacion = 0;
}

if (!isset($_GET['sec']))
    $seccion = null;
else
    $seccion = $_GET['sec'];

//Capturamos el usuario autenticadO
if (!isset($_SESSION['usuario'])) {
    header('Location: log_in.php');
}

$id_usuario = $_SESSION['usuario'];




//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();

//Seleccionamos el nombre de la persona que ingresó
$sql = "SELECT * FROM `Usuarios` WHERE `id_usuario` = '$id_usuario'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) {
    $nombre = $campo['nombre'];
    $apellido_p = $campo['apellido_p'];
}

$no_version = 1;

$sql = "SELECT version FROM Version WHERE version_no='$no_version'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) {
    $version = $campo['version'];
}
?>
<!DOCTYPE html >
<html>
    <head>
        <title>Consecutivo de Cotizaciones</title>
		<link rel="shortcut icon" type="image/png" href="images/icono.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="Fondo.css" rel="stylesheet" type="text/css" />
    </head>

    <script>
        function agregar_c() {
            location.href = "?sec=alta";
        }
        function eliminar_c() {
            location.href = "?sec=baja";
        }
        function modificar_c() {
            location.href = "?sec=cambio";
        }
        function visualizar_c() {
            location.href = "cat_clientes.php";
        }
        function cotizaciones() {
            location.href = "?sec=cotizaciones";
        }
		function orden() {
			location.href = "?sec=orden";
		}
        function cotizar() {
            location.href = "?sec=cotizar";
        }
        function agregar_u() {
            location.href = "?sec=altaus";
        }
        function eliminar_u() {
            location.href = "?sec=bajaus";
        }
        function modificar_u() {
            location.href = "?sec=cambious";
        }
        function agregar_p() {
            location.href = "?sec=alta_p";
        }
        function eliminar_p() {
            location.href = "?sec=baja_p";
        }
        function modificar_p() {
            location.href = "?sec=cambio_p";
        }
        function ver_p() {
            location.href = "cat_prod.php";
        }
        function agregar_pro() {
            location.href = "?sec=alta_pro";
        }
        function eliminar_pro() {
            location.href = "?sec=baja_pro";
        }
        function modificar_pro() {
            location.href = "?sec=cambio_pro";
        }
        function ver_pro() {
            location.href = "?sec=proyectos";
        }



    </script>








    <body>
        <div id="page">

            <div id="header">
                <a href="http://www.artefactosluminicos.com.mx" target="_blank"><img id="alsa" src="images/alsa_principal.svg"></a>
                <style> h1 {margin-left: 200px;}</style><a href="administracion.php"><h1>Artefactos Lumínicos SA de CV</h1></a>
                <a  href="cerrar_sesion.php"><button id="boton_cerrar">Cerrar Sesión</button></a>


            </div>

            <div id="main">
                <div class="ic"></div>




                <!-- sidebar / IZQUIERDA -->
                <div id="sidebar">
                    <h2> Men&uacute;</h2>
                    <div align="left"></div>

                    <div id="menu2" style="margin-top: 100px;">
                        <ul>
                            <li>  <img src="images/1clientes.svg" width="20px"><span><?php
                                    if ($seccion == "alta" || $seccion == "baja" || $seccion == "cambio") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Clientes <?php
                                    if ($seccion == "alta" || $seccion == "baja" || $seccion == "cambio") {
                                        echo "</div>";
                                    }
                                    ?></span>
                                <ul>
                                    <li onclick="agregar_c()"><img src="images/2anadir.svg" width="20px"><span >Agregar cliente</span> </li>
                                    <li onclick="eliminar_c()"><img src="images/1eliminar.svg" width="20px"><span>Eliminar cliente</span></li>
                                    <li onclick="modificar_c()"><img src="images/1modificar.svg" width="20px"><span>Modificar cliente</span></li>
                                    <li onclick="visualizar_c()"><img src="images/1ver.svg" width="20px"><span>Visualizar clientes</span></li>
                                </ul>
                            </li>


                            <li onclick="cotizaciones()"><img src="images/1cotizaciones.svg" width="20px"><span><?php
                                    if ($seccion == "cotizaciones") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Cotizaciones <?php
                                    if ($seccion == "cotizaciones") {
                                        echo "</div>";
                                    }
                                    ?></span></li>

							<li onclick="orden()"><img src="images/1shop.svg" width="20px"><span><?php
                                    if ($seccion == "orden") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Ordenes de venta <?php
                                    if ($seccion == "orden") {
                                        echo "</div>";
                                    }
                                    ?></span></li>

                            <li onclick="cotizar()"><img src="images/1generar.svg" width="20px"><span><?php
                                    if ($seccion == "cotizar") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Generar cotizaci&oacute;n <?php
                                    if ($seccion == "cotizar") {
                                        echo "</div>";
                                    }
                                    ?></span></li>


                            <li><img src="images/1usuarios.svg" width="15px"><span><?php
                                    if ($seccion == "altaus" || $seccion == "bajaus" || $seccion == "cambious") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Usuarios <?php
                                    if ($seccion == "altaus" || $seccion == "bajaus" || $seccion == "cambious") {
                                        echo "</div>";
                                    }
                                    ?></span>
                                <ul>
                                    <li onclick="agregar_u()"><img src="images/2anadir.svg" width="20px"><span>Agregar usuario</span></li>
                                    <li onclick="eliminar_u()"><img src="images/1eliminar.svg" width="20px"><span>Eliminar usuario</span></li>
                                    <li onclick="modificar_u()"><img src="images/1modificar.svg" width="20px"><span>Modificar usuario</span></li>
                                </ul>
                            </li>

                            <li><img src="images/1productos.svg" width="17px"><span> <?php
                                    if ($seccion == "alta_p" || $seccion == "baja_p" || $seccion == "cambio_p") {
                                        echo "<div id=seleccion>";
                                    }
                                    ?>Productos <?php
                                    if ($seccion == "alta_p" || $seccion == "baja_p" || $seccion == "cambio_p") {
                                        echo "</div>";
                                    }
                                    ?></span>
                                <ul>
                                    <li onclick="agregar_p()"><img src="images/2anadir.svg" width="20px"><span>Agregar producto</span></li>
                                    <li onclick="eliminar_p()"><img src="images/1eliminar.svg" width="20px"><span>Eliminar producto</span></li>
                                    <li onclick="modificar_p()"><img src="images/1modificar.svg" width="20px"><span>Modificar producto</span></li>
                                    <li onclick="ver_p()"><img src="images/1ver.svg" width="20px"><span>Visualizar productos</span></li>
                                </ul>
                            </li>
                            <li>
                              <a href="../consecutivoProyectos/" style="padding: 0;"><img src="images/1proyectos.svg" width="17px"><span>Proyectos</span></a>
                            </li>
                        </ul>
                    </div>




                </div>
                <!-- FIN sidebar / IZQUIERDA -->






                <!-- content / DERECHA-->
                <div id="content">
                    <div class="post">
                        <h2 align="center">Bienvenido <?php echo "$nombre " . "$apellido_p"; ?>  </h2>

                        <?php
                        if ($seccion == null) {
                            require_once("home.php");
                        }

                        if ($seccion == "alta") {
                            require_once("alta.php");
                        }
                        if ($seccion == "baja") {
                            require_once("baja.php");
                        }
                        if ($seccion == "cambio") {
                            require_once("cambio.php");
                        }

                        if ($seccion == "cotizaciones") {
                            require_once("cotizaciones-admin.php");
                        }

						if ($seccion == "orden") {
							require_once("ordenes_admin.php");
						}

                        if ($seccion == "cotizar") {
                            require_once("cotizar_ad.php");
                        }

                        if ($seccion == "altaus") {
                            require_once("altaus.php");
                        }
                        if ($seccion == "bajaus") {
                            require_once("bajaus.php");
                        }
                        if ($seccion == "cambious") {
                            require_once("cambious.php");
                        }

                        if ($seccion == "alta_p") {
                            require_once("alta_p.php");
                        }
                        if ($seccion == "baja_p") {
                            require_once("baja_p.php");
                        }
                        if ($seccion == "cambio_p") {
                            require_once("cambio_p.php");
                        }

                        if ($seccion == "alta_pro") {
                            require_once("alta_pro.php");
                        }
                        if ($seccion == "baja_pro") {
                            require_once("baja_pro.php");
                        }
                        if ($seccion == "cambio_pro") {
                            require_once("cambio_pro.php");
                        }
                        if ($seccion == "proyectos") {
                            require_once("proyectos.php");
                        }

                        if ($seccion == "creditos") {
                            require_once("creditos.php");
                        }
                        if ($seccion == "version") {
                            require_once("version.php");
                        }
                        ?>

                    </div>
                </div>
                <!-- FIN content / DERECHA-->





                <div class="clearing">&nbsp;</div>
            </div>
            <!-- FIN main -->

        </div><!--FIN page -->


    <div align="center">
        <div  class="foot">
            <br />Hecho en M&eacute;xico, todos los derechos reservados a Artefactos Lum&iacute;nicos S.A. de C.V. 2015<br>
            <a href="?sec=creditos" id="boton_creditos">Cr&eacute;ditos</a><br><br>
        </div>
    </div>
    <div id="letraversion">Versi&oacute;n <?php echo $version; ?></div>
    <a href="?sec=version" id="boton_version">Cambiar</a>
<?php
if ($id_usuario == 'sistemas') {
    ?>


<?php }
?>
</body>
</html>






<?php
if ($cotizacion == 1) {

    echo'<script>';

    echo'    var r = confirm("Hay una cotización pendiente y se ha guardado en su consecutivo de cotizaciones");';
	$_SESSION['cotizacion']=null;
    echo'</script>';
}
?>
