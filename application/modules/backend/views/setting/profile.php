<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('profile/editAction')?>" method="POST">
      <div class="col-lg-12">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?= ($data['name'] ? $data['name']:set_value('name')) ?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="email" name="email" class="form-control" value="<?= ($data['email'] ? $data['email']:set_value('email')) ?>" required>
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
        </div>
      </div>
    </form>
  </div>
</div>
