<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beranda CekBumil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="beranda.php">Cek Bumil</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Aksesoris aja Hehe:v</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-arrow-bar-left"></i></div>
                                Kembali
                            </a>
                            <a class="nav-link" href="beranda.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Usia Kehamilan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Trimester 1.php">Trimester 1</a>
                                    <a class="nav-link" href="Trimester 2.php">Trimester 2</a>
                                    <a class="nav-link" href="Trimester 3.php">Trimester 3</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                   <div class="container-fluid">
                    <h2 style="text-align: center;">Diagnosis Trimester 3</h2>
                    <form method="post" action="fuzzy3.php">
                        <label><input type="checkbox" name="gejala3[]" value="G16"> Anemia</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G17"> Mata pucat</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G18"> HB dibawah 11</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G19"> Sering lapar</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G20"> Pemeriksaan keton urin</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G21"> Sering kencing</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G22"> Bayinya lebih besar</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G23"> Tekanan darah naik</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G24"> Kaki tidak bengkak</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G25"> Tidak ada naik tensi</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G26"> Urin positif</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G27"> Kaki bengkak</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G28"> Kejang</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G29"> Nyeri ulu hati</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G30"> Pandangan kabur</label><br>
                        <label><input type="checkbox" name="gejala3[]" value="G31"> Tinggi perut lebih besar dari kehamilan</label><br>
                        <input type="submit" value="Diagnosa">
                    </form>
                </div> 
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; asal-ri_utb</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>