    <header class="page-header gradient">
      <div class="container pt-3">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5">
            <h2>Kelompok 1</h2>

            <p>
              Tujuan dari Ini adalah Untuk memberikan gambaran mengenai berbagai kebutuhan yang diperlukan untuk membangun Sistem Informasi Pemantuan Fluktuasi Harga Komoditas Bahan Pangan.
            </p>

          </div>
          <div class="col-md-5">
            <img
              src="images/sayuran.png"
              alt="Header image"
            />
          </div>
        </div> 
        <body>



<!-- Code php -->
<?php
include "koneksi.php";
$sql = "select * from barang";
$res = mysqli_query($conn, $sql) or die (mysqli_error());
?>

<table border  ='1' width='100%' cellpadding='3' cellspacing='0' style='bordercollapse:collapse'>
<tr align = 'center'>
    <th>No</th>
    <!-- <th>ID_Barang</th> -->
    <th>Nama Barang</th>
    <th>Grafik</th>
</tr>

<?php

$i=1;
while($data = mysqli_fetch_array($res))
{
    if($i%2==0) $bg= '#CCCCCC';
    else $bg= '#FFFFFF';

    echo "<tr bgcolor = '".$bg."'>
    <td>".$i."</td>
    <td>".$data["id"]."</td>
    <td>".$data["nama"]."</td>
    <td>  <a href='grafik1.php?id=".$data['id']."'> View </a> </td>
    </tr>";
    $i++;
}
?>
</table>
<br>
<br> <br>


<div class="row row--dark-grey row--padding-narrow">
	<footer class="row container-wide">
		<div class="col-wide">
		</div>
	</footer>
</div>

</body>


        
      <!-- </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg> 
    </header>

    









    <!-- <div class="row">
    <div class="col-xl-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik 1</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart1"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Beras High
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Bersa Pulen
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Beras Biasa
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik 2</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart2"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Telur A
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Telur B
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Telur C
                    </span>
                </div>
            </div>
        </div>
    </div> -->