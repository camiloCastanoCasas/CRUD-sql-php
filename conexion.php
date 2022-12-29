<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS 
  -JUAN PABLO CATAÑO OSORIO  
  -BRANDON CASTAÑO GALEANO   

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: Conexión 
Descripción: Se encarga de generar la conexión con la base de datos.
*/	
    $host="localhost";
    $username="root";
    $password="";
    $database="tiendasjcb";

    $conn = mysqli_connect($host, $username, $password, $database);
    if(!$conn){
        die("Conexion fallida". mysqli_connect_error($conn));
    }
?>