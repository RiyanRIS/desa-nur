<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('jabatan/editAction')?>" method="POST">
        <div class="col-lg-12">
          <div class="col-md-6">
            <input type="hidden" id="id" name="id" value="<?= $this->urlcrypt->encode($data['id'])?>">
            <div class="form-group">
              <label>Nama Jabatan</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Jabatan" value="<?= ($data['nama'] ? $data['nama']:set_value('nama')) ?>" required>
            </div>
            <div class="form-group">
              <label>Tugas</label>
              <input type="text" id="tugas" name="tugas" class="form-control" placeholder="Tugas Jabatan" value="<?= ($data['tugas'] ? $data['tugas']:set_value('tugas')) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
          </div>
        </div>
    </form>
  </div>
</div>
