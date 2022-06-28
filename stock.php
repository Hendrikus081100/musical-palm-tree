<?php
require 'function.php';
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>barang keluar</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.PHP">YAKUSA.COMP</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        </a>
						<a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 stok barang
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                            </a>
                            <a class="nav-link" href="logout.php">
                               logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Stock Barang</h1>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								Barang keluar
							</button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>I</th>
                                            <th> ARANG</th>
                                            <th>ESCRPSI</th>
                                            <th>STOCK</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>20</th>
                                            <th>er</th>
                                            <th>baru</th>
                                            <th>habis</th>
                                            </tr>
                                            </thead>
                                    <tfoot>
                                        <tr>
                                            <th>100</th>
                                            <th>lapp caher</th>
                                            <th>bekas</th>
                                            <th>habis</th>
                                            </tr></thead>
                                    <tfoot>
                                        <tr>
                                            <th>112</th>
                                            <th>lop hp</th>
                                            <th>bekas</th>
                                            <th>habis</th>
                                            </tr>
                                            </thead>
                                    <tfoot>
                                        <tr>
                                            <th>9093</th>
                                            <th>laptop lenovo</th>
                                            <th>bekas</th>
                                            <th>habis</th>
                                            </tr>
                                            </thead>
                                    <tfoot>
                                        <tr>
                                            <th>01213</th>
                                            <th>lapasus</th>
                                            <th>bekas</th>
                                            <th>habis</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                        <tr>
                                            <th>901</th>
                                            <th>laptop tores</th>
                                            <th>as</th>
                                            <th>habis</th>
                                            </tr>

                                            </thead>
                                         <tfoot>
                                        <tr>
                                        <span class="glyphicon glyphicon-print"></span> Print 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    
</html>
