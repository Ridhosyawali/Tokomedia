<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm">Tambah Barang</i></button>

    <table class="table table-bordered">
        <tr class="text-center">
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php 
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $brg->nama_brg ?></td>
            <td><?= $brg->keterangan ?></td>
            <td><?= $brg->kategori ?></td>
            <td><?= $brg->harga ?></td>
            <td><?= $brg->stok ?></td>
            <td><?= anchor('admin/data_barang/detail/'.$brg->id_barang,
            '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
            <td><?= anchor('admin/data_barang/edit/'.$brg->id_barang, 
            '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
            <td><?= anchor('admin/data_barang/hapus/' .$brg->id_barang,
            '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(). 'admin/data_barang/tambah_aksi' ?>"method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select class="form-control" name="kategori" required>
                  <option value="">--Pilih Kategori--</option>
                  <option value="Alat_musik">Alat Musik</option>
                  <option value="Alat_olahraga">Alat olahraga</option>
                  <option value="Alat_tulis">Alat tulis</option>
                  <option value="Buku">Buku</option>
                  <option value="Tas">Tas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Gambar Produk</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>