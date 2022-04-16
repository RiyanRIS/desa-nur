<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('kegiatan/addAction')?>" method="POST">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal Kegiatan" value="<?= set_value('tanggal') ?>" required>
            </div>
            <div class="form-group">
              <label>Nama Kegiatan</label>
              <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" value="<?= set_value('nama_kegiatan') ?>" required>
            </div>
            <div class="form-group">
              <label>Detail Kegiatan</label>
              <textarea name="detail_kegiatan" class="form-control" value="<?= set_value('detail_kegiatan') ?>" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
          </div>
        </div>
    </form>
  </div>
</div>
