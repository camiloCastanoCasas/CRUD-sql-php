<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS
  -JUAN PABLO CATAÑO OSORIO 
  -BRANDON CASTAÑO GALEANO  

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: Proveedores
Descripción: Trae la información de la tabla proveedores, ordenando los datos por el nombre alfabético de cada proveedor.
             De igual manera, en este formulario se encuentra la opción de editar y/o eliminar el registro ingresado.
*/	
  include("conexion.php");
  
  $seleccionarRegistros = "SELECT * FROM proveedores ORDER BY nombre_proveedor";
  $resultadoSeleccion = mysqli_query($conn, $seleccionarRegistros);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiendas JCB</title>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	  <script type="text/javascript" src="js/cargarmunicipios.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffc107;">
        <div class="container-md">
          <a class="navbar-brand" href="#"><b>TIENDAS JCB</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="empleados.php">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sucursal.php">Sucursal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="secciones.php" >Secciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suministra.php">Suministra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="proveedores.php">Proveedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ventas.php">Ventas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="factura.php">Factura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="metodosPago.php">Metodos de Pago</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-7">
            <div class="card border border-dark">
              <div class="card-header border-bottom border-warning bg-secondary bg-opacity-25 text-center">
                Formulario Proveedores
              </div>
              <div class="card-body">
                <form action="Insercion\insertarProveedor.php" method="POST" id="f1" name="f1">
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="id" class="form-label">ID Proveedor</label>
                        <input type="number" class="form-control" name="id_proveedor" id="id" required>
                      </div>
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre_proveedor" id="nombre" required>
                      </div>
                      <div class="mb-3">
                        <label for="tel" class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="telefono_proveedor" id="tel" required>
                      </div>
                      <div class="mb-3">
                        <label for="calle" class="form-label">Calle</label>
                        <input type="text" class="form-control" name="calle_proveedor" id="calle" required>
                      </div>
                      <input type="submit" class="btn btn-primary" value="Agregar proveedor">
                      <input type="reset" class="btn btn-danger" value="Borrar">
                    </div>
                    <div class="col-6">
                      <div class="mb-3">
                        <label for="departamento" class="form-label">Departamento</label>
                        <select name="departamento_proveedor" id="departamentos" onchange="cambia_departamento()" class="form-select" aria-label="Default select example" required>
                          <option selected></option>
                          <option value="AMAZONAS">AMAZONAS</option>
                          <option value="ANTIOQUIA">ANTIOQUIA</option>
                          <option value="ARAUCA">ARAUCA</option>
                          <option value="ATLÁNTICO">ATLÁNTICO</option>
                          <option value="BOLÍVAR">BOLÍVAR</option>
                          <option value="BOYACÁ">BOYACÁ</option>
                          <option value="CALDAS">CALDAS</option>
                          <option value="CAQUETÁ">CAQUETÁ</option>
                          <option value="CASANARE">CASANARE</option>
                          <option value="CAUCA">CAUCA</option>
                          <option value="CESAR">CESAR</option>
                          <option value="CHOCÓ">CHOCÓ</option>
                          <option value="CÓRDOBA">CÓRDOBA</option>
                          <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                          <option value="DISTRITO CAPITAL">DISTRITO CAPITAL</option>
                          <option value="GUAINÍA">GUAINÍA</option>
                          <option value="GUAVIARE">GUAVIARE</option>
                          <option value="HUILA">HUILA</option>
                          <option value="LA GUAJIRA">LA GUAJIRA</option>
                          <option value="MAGDALENA">MAGDALENA</option>
                          <option value="META">META</option>
                          <option value="NARIÑO">NARIÑO</option>
                          <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
                          <option value="PUTUMAYO">PUTUMAYO</option>
                          <option value="QUINDÍO">QUINDÍO</option>
                          <option value="RISARALDA">RISARALDA</option>
                          <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                          <option value="SANTANDER">SANTANDER</option>
                          <option value="SUCRE">SUCRE</option>
                          <option value="TOLIMA">TOLIMA</option>
                          <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                          <option value="VAUPÉS">VAUPÉS</option>
                          <option value="VICHADA">VICHADA</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select name="ciudad_proveedor" id="minucipios" class="form-select" aria-label="Default select example" required>
                          <option selected></option>
                        </select>
                      </div>
                    </div>
                  </div>   
                </div>               
              </form>
            </div>
          </div>
        </div>

        <div class="container mt-5">
          <table class="table">
            <thead class="table-primary table-striped">
              <tr>
                  <th>ID Proveedor</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Calle</th>
                  <th>Ciudad</th>
                  <th>Departamento</th>
                  <th></th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
                while($mostrarRegistros = mysqli_fetch_array($resultadoSeleccion)){
                  echo "<tr>";
                    echo "<td>" .$mostrarRegistros['id_proveedor']. "</td>";
                    echo "<td>" .$mostrarRegistros['nombre_proveedor']. "</td>";
                    echo "<td>" .$mostrarRegistros['telefono_proveedor']. "</td>";
                    echo "<td>" .$mostrarRegistros['calle_proveedor']. "</td>";
                    echo "<td>" .$mostrarRegistros['ciudad_proveedor']. "</td>";
                    echo "<td>" .$mostrarRegistros['departamento_proveedor']. "</td>";
              ?>
                  <td><a href="Update\actualizarProveedor.php?id=<?php echo $mostrarRegistros['id_proveedor'] ?>" class="btn btn-info">Editar</a></td>
                  <td><a href="Delete\deleteProveedor.php?id=<?php echo $mostrarRegistros['id_proveedor'] ?>" class="btn btn-danger">Eliminar</a></td>
              <?php
                }
              ?>
              </tr>
            </tbody>
          </table>  
        </div>

      </div>      
  </body>
</html>