<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<html lang = "en">
<head>
    
</head>
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
    <th>ID_Barang</th>
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
</html>