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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                <div class="card-header">
                                        <strong>Doctor</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Identity</h3>
                                        </div>
                                        <hr>
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="id_dokter" class="control-label mb-1">Doctor ID</label>
                                                <input id="id_dokter" name="id_dokter" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="id_rs" class="control-label mb-1">Hospital ID</label>
                                                <input id="id_rs" name="id_rs" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_dokter" class="control-label mb-1">Doctor Name</label>
                                                <input id="nama_dokter" name="nama_dokter" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_dokter" class="control-label mb-1">Doctor Address</label>
                                                <input id="alamat_dokter" name="alamat_dokter" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-6 col-md-3">
                                                        <label for="jk_dokter" class=" form-control-label">Gender</label>
                                                    </div>
                                                    <div class="col-3 col-md-12">
                                                        <select name="jk_dokter" id="jk_dokter" class="form-control">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="no_hp_dokter" class="control-label mb-1">Phone Number</label>
                                                    <div class="input-group">
                                                        <input id="no_hp_dokter" name="no_hp_dokter" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir_dokter" class="control-label mb-1">Age</label>
                                                <input id="tanggal_lahir_dokter" name="tanggal_lahir_dokter" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <input name="doctor_submit" type="submit" class="btn btn-lg btn-info btn-block" value="Submit">
                                                </input>
                                            </div>
                                        </form>
<?php
include 'connection.php';

if(isset($_POST['doctor_submit'])){
    if(strlen($_POST['id_dokter'])){
        if(strlen($_POST['nama_dokter'])){
            if(strlen($_POST['alamat_dokter'])){
                if(strlen($_POST['no_hp_dokter'])){
                    if(strlen($_POST['tanggal_lahir_dokter'])){
                        $insert = mysqli_query($kon,"INSERT INTO `dokter` (`id_dokter`,`nama_dokter`,`jk_dokter`,`tanggal_lahir`,`alamat_dokter`,`no_hp_dokter`,`id_rs`)
                                    VALUES ('".$_POST['id_dokter']."','".$_POST['nama_dokter']."','".$_POST['jk_dokter']."','".$_POST['jk_dokter']."','".$_POST['alamat_dokter']."','".$_POST['no_hp_dokter']."','".$_POST['id_rs']."')");
                        if($insert){ 
                            $status = 'success'; 
                            $statusMsg = "Registration Successfully."; 
                            // echo "<script>window.location='form.php';</script>";
                            echo "<div class=\"alert alert-success mt-2\" role=\"alert\" style=\"\">";
                               echo "$statusMsg </div>";
                         }
                         else{ 
                                $statusMsg = "Registration Failed, Please Try Again"; 
                                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                                   echo "$statusMsg </div>";
                         }
                    }
                    else{
                        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                        echo "Date of Birth Should Not Be Empty</div>";
                    }
                }
                else{
                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                    echo "Phone Number Should Not Be Empty</div>";
                  }
            }
            else{
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                echo "Address Should Not Be Empty</div>";
              }
        }
        else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
            echo "Name Should Not Be Empty</div>";
          }
    }
    else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
        echo "ID Should Not Be Empty</div>";
      }
}
?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Hospital</strong>
                                        <small> Form</small>
                                    </div>
                                    <form method="post">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="hospital_id" class=" form-control-label">Hospital ID</label>
                                            <input type="text" name="hospital_id" placeholder="Enter hospital ID" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="hospital_name" class=" form-control-label">Hospital Name</label>
                                            <input type="text" name="hospital_name" placeholder="Enter hospital name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="hospital_address" class=" form-control-label">Hospital Address</label>
                                            <input type="text" name="hospital_address" placeholder="Enter hospital address" class="form-control">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="hospital_district" class=" form-control-label">District</label>
                                                    <input type="text" name="hospital_district" placeholder="Enter hospital district" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="hospital_city" class=" form-control-label">City</label>
                                                    <input type="text" name="hospital_city" placeholder="Enter hospital city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="hospital_phone" class=" form-control-label">Phone Number</label>
                                                    <input type="text" name="hospital_phone" placeholder="Enter hospital phone number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                                <input name="hospital_submit" type="submit" class="btn btn-lg btn-info btn-block" value="Submit">
                                                </input>
                                            </div>
                                        </form>
<?php
if(isset($_POST['hospital_submit'])){
    if(strlen($_POST['hospital_id'])){
        if(strlen($_POST['hospital_name'])){
            if(strlen($_POST['hospital_address'])){
                if(strlen($_POST['hospital_district'])){
                    if(strlen($_POST['hospital_city'])){
                        if(strlen($_POST['hospital_phone'])){
                            $insert = mysqli_query($kon,"INSERT INTO `rs` (`id_rs`,`nama_rs`,`alamat_rs`,`kelurahan`,`kota`,`telepon`)
                                        VALUES ('".$_POST['hospital_id']."','".$_POST['hospital_name']."','".$_POST['hospital_address']."','".$_POST['hospital_district']."','".$_POST['hospital_city']."','".$_POST['hospital_phone']."')");
                            if($insert){ 
                                $status = 'success'; 
                                $statusMsg = "Registration Successfully."; 
                                // echo "<script>window.location='form.php';</script>";
                                echo "<div class=\"alert alert-success mt-2\" role=\"alert\" style=\"\">";
                                   echo "$statusMsg </div>";
                             }
                             else{ 
                                    $statusMsg = "Registration Failed, Please Try Again"; 
                                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                                       echo "$statusMsg </div>";
                             }
                        }
                        else{
                            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                            echo "Phone Number Should Not Be Empty</div>";
                        }
                    }
                    else{
                        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                        echo "City Should Not Be Empty</div>";
                    }
                }
                else{
                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                    echo "District Should Not Be Empty</div>";
                  }
            }
            else{
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                echo "Address Should Not Be Empty</div>";
              }
        }
        else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
            echo "Name Should Not Be Empty</div>";
          }
    }
    else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
        echo "ID Should Not Be Empty</div>";
      }
}
?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Patient</strong>
                                        <small> Form</small>
                                    </div>
                                    <form method="post">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="id_pasien" class=" form-control-label">ID</label>
                                            <input type="text" name="id_pasien" placeholder="Enter patient ID" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_pasien" class=" form-control-label">Name</label>
                                            <input type="text" name="nama_pasien" placeholder="Enter patient name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pasien" class=" form-control-label">Address</label>
                                            <input type="text" name="alamat_pasien" placeholder="Enter patient address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="kelurahan_pasien" class=" form-control-label">Sub-District</label>
                                            </div>
                                            <div class="form-group">
                                                <select name="kelurahan_pasien" class="form-control">
                                                    <option value="Ciawi">Ciawi</option>
                                                    <option value="Ciangsana">Ciangasana</option>
                                                    <option value="Jatiasih">Jatiasih</option>
                                                    <option value="Tebet">Tebet</option>
                                                    <option value="Pasar Minggu">Pasar Minggu</option>
                                                    <option value="Dramaga">Dramaga</option>
                                                    <option value="Bantarjati">Bantarjati</option>
                                                    <option value="Ciputat">Ciputat</option>
                                                    <option value="Citayam">Citayam</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class=" form-control-label">City</label>
                                            </div>
                                            <div class="form-group">
                                                <select name="kota_pasien" class="form-control">
                                                    <option value="Bogor">Bogor</option>
                                                    <option value="Depok">Depok</option>
                                                    <option value="Bekasi">Bekasi</option>
                                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                                    <option value="Tangerang">Tangerang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jk_pasien" class=" form-control-label">Gender</label>
                                        </div>
                                        <div class="form-group">
                                            <select name="jk_pasien" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir_pasien" class="control-label mb-1">Age</label>
                                            <input name="tanggal_lahir_pasien" type="text" class="form-control" aria-required="true" aria-invalname="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp_pasien" class="control-label mb-1">Phone Number</label>
                                            <input name="no_hp_pasien" type="text" class="form-control" aria-required="true" aria-invalname="false">
                                        </div>
                                        <div>
                                            <input name="patient_submit" type="submit" class="btn btn-lg btn-info btn-block" value="Submit">
                                            </input>
                                        </div>
                                        </form>
<?php
if(isset($_POST['patient_submit'])){
    if(strlen($_POST['id_pasien'])){
        if(strlen($_POST['nama_pasien'])){
            if(strlen($_POST['alamat_pasien'])){
                if(strlen($_POST['kelurahan_pasien'])){
                    if(strlen($_POST['kota_pasien'])){
                            if(strlen($_POST['tanggal_lahir_pasien'])){
                                if(strlen($_POST['no_hp_pasien'])){
                                    $insert = mysqli_query($kon,"INSERT INTO `pasien` (`id_pasien`,`nama_pasien`,`alamat_pasien`,`kelurahan`,`kota`,`jk_pasien`,`tanggal_lahir`,`no_hp_pasien`)
                                                VALUES ('".$_POST['id_pasien']."','".$_POST['nama_pasien']."','".$_POST['alamat_pasien']."','".$_POST['kelurahan_pasien']."','".$_POST['kota_pasien']."','".$_POST['jk_pasien']."','".$_POST['tanggal_lahir_pasien']."','".$_POST['no_hp_pasien']."')");
                                    if($insert){ 
                                        $status = 'success'; 
                                        $statusMsg = "Registration Successfully."; 
                                        // echo "<script>window.location='form.php';</script>";
                                        echo "<div class=\"alert alert-success mt-2\" role=\"alert\" style=\"\">";
                                            echo "$statusMsg </div>";
                                        }
                                        else{ 
                                            $statusMsg = "Registration Failed, Please Try Again"; 
                                            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                                                echo "$statusMsg </div>";
                                        }
                                }
                                else{
                                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                                    echo "Phone Number Should Not Be Empty</div>";
                            }
                        }
                        else{
                            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                            echo "Date of Birth Should Not Be Empty</div>";
                        }
                    }
                    else{
                        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                        echo "City Should Not Be Empty</div>";
                    }
                }
                else{
                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                    echo "District Should Not Be Empty</div>";
                  }
            }
            else{
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
                echo "Address Should Not Be Empty</div>";
              }
        }
        else{
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
            echo "Name Should Not Be Empty</div>";
          }
    }
    else{
        echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\";\">";
        echo "ID Should Not Be Empty</div>";
      }
}
?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Check</strong>
                                        <small> Form</small>
                                    </div>
                                    <form method="post">
                                    <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="id_pasien_check" class=" form-control-label">Patient Name</label>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_pasien_check" class="form-control">
<?php
    $pasien = mysqli_query($kon, "SELECT * FROM pasien");
    while($dataPasien = mysqli_fetch_assoc($pasien)){
        echo "<option value=".$dataPasien['id_pasien'].">".$dataPasien['nama_pasien']."</option>";
    }
?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <div class="form-group">
                                                <label for="id_dokter_check" class=" form-control-label">Doctor Name</label>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_dokter_check" class="form-control">
<?php
    $dokter = mysqli_query($kon, "SELECT * FROM dokter");
    while($dataDokter = mysqli_fetch_assoc($dokter)){
        echo "<option value=".$dataDokter['id_dokter'].">".$dataDokter['nama_dokter']."</option>";
    }
?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_check" class="control-label mb-1">Checkup Date</label>
                                                <input name="date_check" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="result" class=" form-control-label">Result</label>
                                        </div>
                                        <div class="form-group">
                                            <select name="result" class="form-control">
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="treatment" class=" form-control-label">Treatment</label>
                                        </div>
                                        <div class="form-group">
                                            <select name="treatment" class="form-control">
                                                <option value="Self Isolation">Self Isolation</option>
                                                <option value="Quarrantine">Quarrantine</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                                <label for="id_rs_check" class=" form-control-label">Hospital Name</label>
                                            </div>
                                            <div class="form-group">
                                                <select name="id_rs_check" class="form-control">
<?php
    $rs = mysqli_query($kon, "SELECT * FROM rs");
    while($dataRS = mysqli_fetch_assoc($rs)){
        echo "<option value=".$dataRS['id_rs'].">".$dataRS['nama_rs']."</option>";
    }
?>
                                                </select>
                                            </div>
                                        <div>
                                            <input name="patient_check" type="submit" class="btn btn-lg btn-info btn-block" value="Submit">
                                            </input>
                                        </div>
                                    </div>
                                </form>
<?php
if(isset($_POST['patient_check'])){
    $insert = mysqli_query($kon,"INSERT INTO `pemeriksaan` (`id_pemeriksaan`,`id_pasien`,`id_dokter`,`tanggal_pemeriksaan`,`hasil`,`status`,`id_rs`)
            VALUES (NULL,'".$_POST['id_pasien_check']."','".$_POST['id_dokter_check']."','".$_POST['date_check']."','".$_POST['result']."','".$_POST['treatment']."','".$_POST['id_rs_check']."')");
    if($insert){ 
        $status = 'success'; 
        $statusMsg = "Registration Successfully."; 
        // echo "<script>window.location='form.php';</script>";
        echo "<div class=\"alert alert-success mt-2\" role=\"alert\" style=\"\">";
            echo "$statusMsg </div>";
        }
        else{ 
            $statusMsg = "Registration Failed, Please Try Again"; 
            echo "<div class=\"alert alert-danger mt-2\" role=\"alert\" style=\"\">";
                echo "$statusMsg </div>";
        }
}
?>
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
