<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('pengumuman/addAction')?>" method="POST" enctype="multipart/form-data">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal Kegiatan" value="<?= set_value('tanggal') ?>" required>
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="<?= set_value('judul') ?>" required>
            </div>
            <div class="form-group">
              <label>File</label>
              <input type="file" id="file" name="file" class="form-control" placeholder="Gambar" value="<?= set_value('file') ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
          </div>
        </div>
    </form>
  </div>
</div>
