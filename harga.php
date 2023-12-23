<?php include 'includes/session.php'; ?>
<?php
  $where = '';
  if(isset($_GET['pasar'])){
    $pasid = $_GET['pasar'];
    $where = 'WHERE pasar_id ='.$pasid;
  }

?>
<?php
  $where = '';
  if(isset($_GET['barang'])){
    $barid = $_GET['barang'];
    $where = 'WHERE bar_id ='.$barid;
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar-harga.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Barang Komoditas
      </h1>
      <ol class="breadcrumb">
        <li class="active">Daftar Barang Komoditas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box-header with-border">
            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addharga"><i class="fa fa-plus"></i> Tambah Data Baru</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Nama Barang</th>
                  <th>Lokasi Barang</th>
                  <th>Harga Barang (Rp.)</th>
                  <th>Tanggal Input</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $now = date('Y-m-d');
                      $stmt = $conn->prepare("SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td>".$row['nama_barang']."</td>
                            <td>".$row['nama_pasar']."</td>
                            <td>Rp. ".number_format($row['harga'], 2)."</td>
                            <td>".date('M d, Y', strtotime($row['tanggal_input']))."</td>
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Hapus</button>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/harga_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('#addharga').click(function(e){
    e.preventDefault();
    getBarang();
    getPasar();
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'harga_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.harid').val(response.id);
      $('#barselected').val(response.barang_id).html(response.barnama);
      $('#passelected').val(response.pasar_id).html(response.pasnama);
      $('#edit_harga').val(response.harga);
      $('#edit_tanggal_input').val(response.tanggal_input);
      getBarang();
      getPasar();
    }
  });
}

function getBarang(){
  $.ajax({
    type: 'POST',
    url: 'barang_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#barang').append(response);
      $('#edit_barang').append(response);
    }
  });
}

function getPasar(){
  $.ajax({
    type: 'POST',
    url: 'pasar_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#pasar').append(response);
      $('#edit_pasar').append(response);
    }
  });
}
</script>
</body>
</html>
