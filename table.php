<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a href="index.php">
                    <h3>Rental Mobil</h3>
                </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="district.php">
                                <i class="fas fa-calendar-alt"></i>District / City</a>
                        </li>
                        <li>
                            <a href="month.php">
                                <i class="fas fa-map-marker-alt"></i>Month</a>
                        </li>
                        <li class="has-sub">
                            <a href="age.php">
                                <i class="fas fa-copy"></i>Age</a>
                        </li>
                        <li class="has-sub">
                            <a href="hospital.php">
                                <i class="fas fa-desktop"></i>Hospital</a>
                        </li>
                        <li class="has-sub">
                            <a href="doctor.php">
                                <i class="fas fa-copy"></i>Doctor</a>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li class="has-sub">
                            <a href="multimedia.php">
                                <i class="fas fa-desktop"></i>Multimedia</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <a href="index.php">
                    <h3>Rental Mobil</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="district.php">
                                <i class="fas fa-calendar-alt"></i>District / City</a>
                        </li>
                        <li>
                            <a href="month.php">
                                <i class="fas fa-map-marker-alt"></i>Month</a>
                        </li>
                        <li class="has-sub">
                            <a href="age.php">
                                <i class="fas fa-copy"></i>Age</a>
                        </li>
                        <li class="has-sub">
                            <a href="hospital.php">
                                <i class="fas fa-desktop"></i>Hospital</a>
                        </li>
                        <li class="has-sub">
                            <a href="doctor.php">
                                <i class="fas fa-copy"></i>Doctor</a>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li class="active">
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li class="has-sub">
                            <a href="multimedia.php">
                                <i class="fas fa-desktop"></i>Multimedia</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a href="form.php" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item</a>
                            </div>
                        </div>
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Doctor Data</h3>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Hospital ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
    include 'connection.php';

    $dokterList = mysqli_query($kon, "SELECT * FROM dokter ORDER BY id_dokter ASC");
    while($dataDokter = mysqli_fetch_assoc($dokterList)){
        echo "<tr>";
        echo "<td>".$dataDokter['id_dokter']."</td>";
        echo "<td>".$dataDokter['nama_dokter']."</td>";
        echo "<td>".ucwords($dataDokter['jk_dokter'])."</td>";
        echo "<td>".$dataDokter['tanggal_lahir']."</td>";
        echo "<td>".$dataDokter['alamat_dokter']."</td>";
        echo "<td>".$dataDokter['no_hp_dokter']."</td>";
        echo "<td>".$dataDokter['id_rs']."</td>";
        echo "</tr>";
    }
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Patient</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>Patient ID</th>
                                                <th>Disease</th>
                                                <th>Age</th>
                                                <th>District</th>
                                                <th>Gender</th>
                                                <th>status</th>
                                                <th>Hospital</th>
                                                <th>Check Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
    include 'connection.php';

    $pasien = mysqli_query($kon, "SELECT * FROM pasien");
    while($dataPasien=mysqli_fetch_assoc($pasien)){
        $hasilPemeriksaan = mysqli_query($kon, "SELECT * FROM pemeriksaan WHERE id_pasien='".$dataPasien['id_pasien']."'");
        while($dataPemeriksaan = mysqli_fetch_assoc($hasilPemeriksaan)){
            $rumahSakit = mysqli_query($kon, "SELECT * FROM rs WHERE id_rs='".$dataPemeriksaan['id_rs']."'");
            while($dataRS = mysqli_fetch_assoc($rumahSakit)){
                echo "<tr class=\"tr-shadow\">";
                echo "<td>".$dataPasien['nama_pasien']."</td>";
                echo "<td>";
                echo "<span class=\"block-email\">".$dataPasien['id_pasien']."</span>";
                echo "</td>";
                echo "<td class=\"desc\">".$dataPemeriksaan['hasil']."</td>";
                echo "<td>".$dataPasien['tanggal_lahir']."</td>";
                echo "<td>".$dataPasien['kelurahan']."</td>";
                echo "<td>".$dataPasien['jk_pasien']."</td>";
                echo "<td>";
                echo "<span class=\"status--process\">".$dataPemeriksaan['status']."</span>";
                echo "</td>";
                echo "<td>".$dataRS['nama_rs']."</td>";
                echo "<td>".$dataPemeriksaan['tanggal_pemeriksaan']."</td>";
                echo "<td>";
                echo "<div class=\"table-data-feature\">";
                echo "<a href='Edit_Patient.php?id=".$dataPasien['id_pasien']."' class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">";
                echo "<i class=\"zmdi zmdi-edit\"></i>";
                echo "</a>";
                echo "<a href='Delete_Patient.php?id=".$dataPasien['id_pasien']."' class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">";
                echo "<i class=\"zmdi zmdi-delete\"></i>";
                echo "</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
                echo "<tr class=\"spacer\"></tr>";
            }
        }
    }
?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <h3 class="title-3 m-b-30">
                                        <i class="fa fa-heart"></i>Hospital</h3>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Hospital ID</th>
                                                <th>Hospital Name</th>
                                                <th>Address</th>
                                                <th>District</th>
                                                <th>City</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
    $daftarRS = mysqli_query($kon, "SELECT * FROM rs");
    while($listRS = mysqli_fetch_assoc($daftarRS)){
        echo "<tr>";
        echo "<td>".$listRS['id_rs']."</td>";
        echo "<td>".$listRS['nama_rs']."</td>";
        echo "<td>".$listRS['alamat_rs']."</td>";
        echo "<td>".$listRS['kelurahan']."</td>";
        echo "<td>".$listRS['kota']."</td>";
        echo "<td>".$listRS['telepon']."</td>";
        echo "</tr>";
    }
?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
