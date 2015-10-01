<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header('Location: log_in.php');
}
$id_cotizacion = $_SESSION['cotizacion'];
header('Content-Type: text/html; charset=UTF-8');

//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();


$pedido_cliente = $_GET['pedido_cliente'];
$idOrdenVenta = $_GET['id_orden_venta'];
$fechaO = $_GET['fecha_o'];
$fechaOE = $_GET['fecha_oe'];
$lugarEntrega = $_GET['lugar_entrega'];
$notaO = $_GET['nota_o'];
$importeLetra = $_GET['importe_letra'];
echo $pedido_cliente.$fechaO.$fechaOE.$lugarEntrega.$notaO.$importeLetra.$idOrdenVenta;

$no_partidas = $_SESSION['no_partidas'];
$divisa = $_POST['divisa'];
$subtotal = $_SESSION['subtotal'];
$iva = $_SESSION['iva'];
$total = $_SESSION['total'];
$t_entrega = $_POST['t_entrega'];
$c_pago = $_POST['c_pago'];
$string = $_POST['datos_cliente'];
$string2 = $_POST['datos_contacto'];
$string3 = $_POST['datos_vendedor'];

//Agregar Campos en la Tabla Cotizaciones
$sql = "UPDATE `Cotizaciones` SET vigencia='$vigencia', no_partidas='$no_partidas', `divisa`='$divisa',`subtotal`='$subtotal',`iva`='$iva',`total`='$total',`t_entrega`='$t_entrega',`c_pago`='$c_pago' WHERE `id_cotizacion`='$id_cotizacion'";
$resultado = query($sql, $conexion);

$string = str_replace(
        array('à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï', 'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û', 'Ü', "'"), array('á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i', 'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U', 'U', "`"), $string
);

$string2 = str_replace(
        array('à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï', 'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û', 'Ü', "'"), array('á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i', 'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U', 'U', "`"), $string2
);

$string3 = str_replace(
        array('à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï', 'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û', 'Ü', "'"), array('á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i', 'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U', 'U', "`"), $string3
);

//Agregar Campos en la Tabla Cotizaciones
$sqla = "INSERT INTO `Datos_Cotizacion` (id_cotizacion, datos_cliente, datos_contacto, datos_vendedor) values ('$id_cotizacion', '$string', '$string2', '$string3')";
$resultadoa = query($sqla, $conexion);


unset($_SESSION['cotizacion']);
unset($_SESSION['empresa']);
unset($_SESSION['subtotal']);
unset($_SESSION['total']);
unset($_SESSION['iva']);
unset($_SESSION['no_partidas']);
if (isset($_SESSION['cancelar'])) {
    unset($_SESSION['cancelar']);
}
?>

<html>
<!--
    <script type="text/javascript">
        function regresar() {
            alert("La cotizacion ha finalizado con exito");
            document.location.href = 'log_in.php';
        }
        regresar()

    </script>
-->
</html>