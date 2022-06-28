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
        <title>barang masuk</title>
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
                                Stok barang
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
                    <footer class="container-fluid bg-4 text-center">
                    <p>di buat oleh <a href="https://lpm.uma.ac.id/wp-content/uploads/2021/02/PC.jpg">www.w3schools.com</a></p>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">barang masuk</h1>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="container">
                            <h2>menu</h2>
                            
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Open modal
                            </button>
                              </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table bondered" id="datatable" width="100%"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>DESCRPSI</th>
                                            <th>STOCK</th>
                                        
                                       
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <div class="container">
                                <div class="row">
                                <div class="col-sm-4">
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
    </body>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
        <input type="text" name="namebarang" text placholder="nama barang" clas="form-control"required>
        <br>
        <input type="text" name="descripsi" placeholder="descripsi barang"  clas="form-control"required>
        <br>
        <input type="number" name="stock" clas="form-control" placeholder="stock"required>
        <br>
        <button type="submit" clas="btn btn primary"name="addnewbarang">submit</button>
        </div>
        </form>

    </div>
  </div>
</div>
		
   