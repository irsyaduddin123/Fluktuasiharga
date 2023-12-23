<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
<!DOCTYPE html>
<html>
<head>
    <title>Grafik Komoditas Harga Pangan </title>
    <script type="text/javascript" src="Chart.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script> -->
</head>
<body>

<?php
     $conn = new mysqli('localhost', 'root', '', 'ppsi');
    // include koneksi.php
    $sql = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '2'";
    $nama_barang = $conn->query($sql);
    $nama_pasar = $conn->query($sql);
    $harga = $conn->query($sql);
?>

    <style type="text/css">
        body{
            font-family: roboto;
        }
    </style>
 
    <h2>Grafik Laporan</h2>
    <div style="width: 500px;height: 400px">
        <canvas id="myLineChart"></canvas>
    </div>
    <!-- .getContext('2d') -->
    <script>
        var ctx = document.getElementById("myLineChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    label: 'nama barang', // judul grafik
                    data: [<?php while($a = mysqli_fetch_array($harga)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                    backgroundColor: [
                        // 'red',  //Warna Background
                        // 'blue', //Warna Background
                        // 'green', //Warna Background
                        // 'silver', //Warna Background
                        // 'black', //Warna Background
                        // 'yellow', //Warna Background
                        // 'purple', //Warna Background
                        // 'brown' //Warna Background
                    ],        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    // pointBackgroundColor: '#007bff'
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
    
</body>
</html>
<!-- <script type="text/javascript" src="chartjs/Chart.js"></script>
<script type="text/javascript" src="chartjs/Chart.js"></script> -->




