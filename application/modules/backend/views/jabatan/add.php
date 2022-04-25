<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('jabatan/addAction')?>" method="POST">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Jabatan</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Jabatan" value="<?= set_value('nama') ?>" required>
            </div>
            <div class="form-group">
              <label>Tugas</label>
              <input type="text" id="tugas" name="tugas" class="form-control" placeholder="Tugas Jabatan" value="<?= set_value('tugas') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
          </div>
        </div>
    </form>
  </div>
</div>
