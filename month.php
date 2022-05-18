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
    <title>Covid-19 / Month</title>

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

    <!-- FullCalendar -->
    <link href='vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    </style>

</head>

<!-- animsition overrides all click events on clickable things like a,
      since calendar doesn't add href's be default,
      it leads to odd behaviors like loading 'undefined'
      moving the class to menus lead to only the menu having the effect -->
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
                        <li class="active">
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
                        <li class="">
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid">
                    <div>
                            <div class="col-lg-6">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Covid-19 Data / Month</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Month</td>
                                                    <td>Case</td>
                                                </tr>
<?php
    include 'connection.php';

    $i=1;
    $month = mysqli_query($kon, "SELECT DISTINCT MONTH(tanggal_pemeriksaan) as bulan FROM pemeriksaan");
    while($dataMonth = mysqli_fetch_assoc($month)){
        $count = mysqli_query($kon, "SELECT COUNT(id_pemeriksaan) as temp FROM pemeriksaan WHERE MONTH(tanggal_pemeriksaan)='".$dataMonth['bulan']."' AND hasil='Positive'");
        while($dataCount = mysqli_fetch_assoc($count)){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".date("F", mktime(0, 0, 0, $dataMonth['bulan'], 10))."</td>";
            echo "<td>".$dataCount['temp']."</td>";
            echo "</tr>";   
        }
    }
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
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
    <script src="vendor/select2/select2.min.js"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script type="text/javascript">
$(function() {
  // for now, there is something adding a click handler to 'a'
  var tues = moment().day(2).hour(19);

  // build trival night events for example data
  var events = [
    {
      title: "Special Conference",
      start: moment().format('YYYY-MM-DD'),
      url: '#'
    },
    {
      title: "Doctor Appt",
      start: moment().hour(9).add(2, 'days').toISOString(),
      url: '#'
    }

  ];

  var trivia_nights = []

  for(var i = 1; i <= 4; i++) {
    var n = tues.clone().add(i, 'weeks');
    console.log("isoString: " + n.toISOString());
    trivia_nights.push({
      title: 'Trival Night @ Pub XYZ',
      start: n.toISOString(),
      allDay: false,
      url: '#'
    });
  }

  // setup a few events
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    events: events.concat(trivia_nights)
  });
});
    </script>


</body>

</html>
<!-- end document-->
