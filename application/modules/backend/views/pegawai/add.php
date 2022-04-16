<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('pegawai/addAction')?>" method="POST">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Pegawai</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai" value="<?= set_value('nama') ?>" required>
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <select  name="jabatan" id="jabatan" class="form-control select2" style="width: 100%;" <?= $id ? 'readonly' : '' ?> required>
                <?php 
                  if($jabatan) foreach($jabatan as $key => $val){
                    $slct = (isset($data['jabatan']) && $data['jabatan']==$val) ? 'selected' : '';
                    echo "<option value='".$val."' $slct  >".$val.   "</option>";
                  }
                ?>
              </select> 
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" value="<?= set_value('alamat') ?>" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
          </div>
        </div>
    </form>
  </div>
</div>
