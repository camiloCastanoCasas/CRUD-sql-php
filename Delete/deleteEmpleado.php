<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS
  -JUAN PABLO CATAÑO OSORIO 
  -BRANDON CASTAÑO GALEANO  

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: DeleteEmpleado
Descripción: Se elimina en la base de datos todos los campos del empleado seleccionado. 
*/
    include("..\conexion.php");
    
    $id_empleado = $_GET['id'];
    
    $seleccionarRegistro="DELETE FROM empleados WHERE id_empleado ='$id_empleado'";
    mysqli_query($conn,$seleccionarRegistro);
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
            text: 'Empleado eliminado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../empleados.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>