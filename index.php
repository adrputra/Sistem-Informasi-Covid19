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
    <title>Dashboard</title>

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
                            <h3>Covid-19 Update</h3>
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
                    <h3>Covid-19 Update</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
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
                </nav>
            </div>
        </aside>
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="top-campaign">
                        <h1>What is the novel coronavirus?</h1>
                        <br>
                        <h5>A novel coronavirus (CoV) is a new strain of coronavirus.</h5>
                        <br>
                        <h5>The disease caused by the novel coronavirus first identified in Wuhan, China, has been named coronavirus disease 2019 (COVID-19) – ‘CO’ stands for corona, ‘VI’ for virus, and ‘D’ for disease. Formerly, this disease was referred to as ‘2019 novel coronavirus’ or ‘2019-nCoV.’</h5>
                        <br>
                        <h5>The COVID-19 virus is a new virus linked to the same family of viruses as Severe Acute Respiratory Syndrome (SARS) and some types of common cold.</h5>
                        <br>
                        <h5>How does the novel coronavirus spread? 
The virus is transmitted through direct contact with respiratory droplets of an infected person (generated through coughing and sneezing), and touching surfaces contaminated with the virus. The virus may survive on surfaces for several hours, but simple disinfectants can kill it.</h5>
</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <a href="form.php" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add data</a>
                                    <a href="export.php" class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Export</a>
                                </div>
                            </div>
                        </div>
                        <br>
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
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
