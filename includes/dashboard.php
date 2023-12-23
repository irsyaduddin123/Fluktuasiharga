<?php
     $conn = new mysqli('localhost', 'root', '', 'ppsi');
    // include koneksi.php
    $sql = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '2'";
    $nama_barang = $conn->query($sql);
    $nama_pasar = $conn->query($sql);
    $harga = $conn->query($sql);
?>

<script>
        var ctx = document.getElementById("myBarChart1");
        var myBarChart1 = new Chart(ctx, {
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