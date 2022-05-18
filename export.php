<html>
<head>
	<title>Export</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Covid.xls");
	?>
 
	<center>
		<h1>Export</h1>
    </center>
    
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
                echo "</tr>";
                echo "<tr class=\"spacer\"></tr>";
            }
        }
    }
?>
                                        </tbody>
                                    </table>