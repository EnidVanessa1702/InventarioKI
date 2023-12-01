<?php
    include '../../src/clases/filtrodashboard.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konecta Inventario </title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/ki.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "../../src/html/menu.php"; ?>
    <div class="body-wrapper">
  
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
        
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total de Productos</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">1,287</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
        <div class="card order-md-3 order-lg-2">
          <h5 class="card-header m-0 me-2 pb-3">Inventario de Equipos</h5>
          <div class="table-responsive">
              <style>
                  #dataTableStockAlmacen table {

                      overflow-x: auto;
                  }

                  #dataTableStockAlmacen table td {
                      word-wrap: break-word;
                      max-width: 200px;
                      text-align: center;
                  }

                  #dataTableStockAlmacen td {
                      white-space: inherit;
                      text-align: center;
                  }

                  #dataTableStockAlmacen th {
                      white-space: inherit;
                      text-align: center;
                  }
              </style>
              <table class="display table dt-responsive nowrap" id="dataTableStockAlmacen">
                  <thead>
                      <tr>
                          <th>Modelo</th> 
                          <th>Serie</th>
                          <th>Almacen</th>
                          <th>Existencia</th>
                          <th>Localizacion</th>
                      </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      <?php while ($ver = mysqli_fetch_row($result)) : ?>
                          <tr>
                              <td><?php echo $ver[0] ?></td>
                              <td><?php echo $ver[1] ?></td>
                              <td><?php echo $ver[2] ?></td>
                              <td><?php echo $ver[3] ?></td>
                              <td><?php echo $ver[4] ?></td>

                              <td style="text-align: center;">
                                
                              </td>
                          </tr>
                      <?php endwhile; ?>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
  <script src="../js/funcionesGenerales.js"></script>
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

  <script src="../js/funciones.js"></script>
  <script src="../js/almacen.js"></script>
</body>

</html>