<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS
  -JUAN PABLO CATAÑO OSORIO 
  -BRANDON CASTAÑO GALEANO  

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertarSuministra
Descripción: Se inserta en la base de datos todos los campos de suministra. 
*/
include("..\conexion.php");

$id_producto = $_POST['id_producto'];
$id_proveedor = $_POST['id_proveedor'];
$fechaSuministro = $_POST['fechaSuministro'];
$unidades = $_POST['unidades'];

$insertarSuministro = "INSERT INTO `suministra`(`id_producto`, `id_proveedor`, `fechaSuministro`, 
`unidades`) VALUES ('$id_producto','$id_proveedor', '$fechaSuministro','$unidades')";

mysqli_query($conn, $insertarSuministro);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <script type="text/javascript">
        swal({
            title: 'Completado',
            text: 'Suministro insertado exitosamente',
            icon: 'success',
        });
        function volver(){
            window.location.href = '../suministra.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>