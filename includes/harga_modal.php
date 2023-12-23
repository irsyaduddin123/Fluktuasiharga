<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Data Baru</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="harga_tambah.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Nama Barang</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="barang" name="barang" required>
                      <option value="" selected>- Pilih Barang -</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Lokasi Barang</label>

                    <div class="col-sm-9">
                    <select class="form-control" id="pasar" name="pasar" required>
                      <option value="" selected>- Pilih Pasar -</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Harga Barang</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Tanggal Input (YYYY-MM-DD)</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tanggal_input" name="tanggal_input" required>
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

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Data Baru</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="harga_edit.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Nama Barang</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="edit_barang" name="barang" required>
                    <option selected id="barselected"></option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Lokasi Barang</label>

                    <div class="col-sm-9">
                    <select class="form-control" id="edit_pasar" name="pasar" required>
                    <option selected id="passelected"></option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Harga Barang</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_harga" name="harga" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Tanggal Input (YYYY-MM-DD)</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_tanggal_input" name="tanggal_input" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kembali</button>
              <button type="submit" class="btn btn-primary btn-flat" name="edit"><i class="fa fa-save"></i> Simpan</button>
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
              <form class="form-horizontal" method="POST" action="harga_hapus.php">
                <input type="hidden" class="harid" name="id">
                <div class="text-center">
                    <p>KONFIRMASI HAPUS DATA</p>
                    <h2 class="bold catname"></h2>
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
