<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('password/editAction')?>" method="POST">
      <div class="col-lg-12">
        <div class="col-md-6">
          <div class="form-group">
            <label>Old Password</label>
            <input type="password" id="old_password" name="old_password" class="form-control">
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" id="new_password" name="new_password" class="form-control">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
        </div>
      </div>
    </form>
  </div>
</div>
