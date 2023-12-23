<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Barang Baru</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="barang_tambah.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Nama Barang</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kembali</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Barang</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="barang_edit.php">
                <input type="hidden" class="barid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Nama Barang</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_nama" name="nama">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kembali</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Menghapus....</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="barang_hapus.php">
                <input type="hidden" class="barid" name="id">
                <div class="text-center">
                    <p>KONFIRMASI HAPUS Barang</p>
                    <h2 class="bold barnama"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kembali</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Hapus</button>
              </form>
            </div>
        </div>
    </div>
</div>
