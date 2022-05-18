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
    <title>Charts</title>

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
                    <h3>Covid-19 Update</h3>
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
            <script type="text/javascript" src="js/Chart.js"></script>    
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
                        <li class="active">
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
<?php
include 'connection.php';
    $district = mysqli_query($kon, "SELECT DISTINCT kelurahan FROM pasien");
    while($dataDistrict = mysqli_fetch_assoc($district)){
        $district_axis[]=$dataDistrict['kelurahan'];
        $count = mysqli_query($kon, "SELECT COUNT(id_pasien) FROM pasien WHERE kelurahan='".$dataDistrict['kelurahan']."' AND id_pasien IN (SELECT id_pasien FROM pemeriksaan WHERE hasil='Positive')");
        while($dataCount = mysqli_fetch_assoc($count)){
            $count_axis[] = $dataCount['COUNT(id_pasien)'];
        }
    }
?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-3 m-b-30">Covid-19 Data / District</h3>
                    <div style="width: 800px;height: 4s00px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($district_axis); ?>,
				datasets: [{
					label: 'Positive Covid-19',
					data: <?php echo json_encode($count_axis); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    </script>
<?php
    $kota = mysqli_query($kon, "SELECT DISTINCT kota FROM pasien");
    while($dataKota = mysqli_fetch_assoc($kota)){
        $kota_axis[]=$dataKota['kota'];
        $countCity = mysqli_query($kon, "SELECT COUNT(id_pasien) FROM pasien WHERE kota='".$dataKota['kota']."' AND id_pasien IN (SELECT id_pasien FROM pemeriksaan WHERE hasil='Positive')");
        while($dataCountCity = mysqli_fetch_assoc($countCity)){
            $countCity_axis[] = $dataCountCity['COUNT(id_pasien)'];
        }
    }
?>
<br>
<br>
<br>
<div class="container-fluid">
                    <h3 class="title-3 m-b-30">Covid-19 Data / City</h3>
                    <div style="width: 800px;height: 400px">
		<canvas id="myChartCity"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChartCity").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($kota_axis); ?>,
				datasets: [{
					label: 'Positive Covid-19',
					data: <?php echo json_encode($countCity_axis); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

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
