<?php
require_once "../clases/conexion.php";
$c = new conectar();
$conexion = $c->conexion();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/konectaLogo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../../librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" href="../../librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar scroll-->
      <?php include "../html/menu.php"; ?>
   
     <div class="body-wrapper">
   
      <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Almacen /</span> Control de Equipos</h4>

            <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Datos del Producto</h4>
                          <p>CONTEO 2</p>
                          <form id="frmProductos" method="POST">
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6 mt-2">
                                          <div class="form-group">
                                              <label>Modelo</label>
                                              <input type="text" name="modelo" id="modelo" class="form-control">
                                          </div>
                                          <div class="list-group" id="show-list">
                                          </div>
                                      </div>
                                      
                                      <div class="col-md-6 mt-2">
                                          <div class="form-group">
                                              <label>Serie </label>
                                              <input type="text" name="serie" id="serie" class="form-control">
                                          </div>
                                      </div>

                                      <div class="col-md-6 mt-3">
                                          <div class="form-group">
                                              <label>Localizacion </label>
                                              <input type="text" name="localizacion" id="localizacion" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-6 mt-3">
                                          <div class="form-group">
                                              <label>Almacen </label>
                                              <input type="text" name="almacen" id="almacen" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-6 mt-3">
                                          <div class="form-group">
                                              <label>Existencias</label>
                                              <input type="text" name="existencia" id="existencia" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <br>
                              <div class="form-actions">
                                  <div class="text-right">
                                      <button type="button" class="btn btn-info" id="btnRegistrar" name="btnRegistrar">Registrar</button>
                                      <button type="button"  class="btn btn-dark" >Regresar</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
     
    </div>
    </div>
  </div>  
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

  


        <script src="../js/registro2.js"></script>
        <script src="../js/funciones.js"></script>
        <script src="../../librerias/alertifyjs/alertify.js"></script>
        

</body>

</html>