<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
    <form action="<?= backend_url('pengumuman/editAction')?>" method="POST" enctype="multipart/form-data">
        <div class="col-lg-12">
          <div class="col-md-6">
            <input type="hidden" id="id" name="id" value="<?= $this->urlcrypt->encode($data['id'])?>">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal pengumuman" value="<?= ($data['tanggal'] ? $data['tanggal']:set_value('tanggal')) ?>" required>
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="<?= ($data['judul'] ? $data['judul']:set_value('judul')) ?>" required>
            </div>
            <div class="form-group">
              <label>Konten</label>
              <textarea name="konten" id="konten" cols="30" rows="10" class="form-control"><?= ($data['konten'] ? $data['konten']:set_value('konten')) ?></textarea>
            </div>
            <div class="form-group">
              <label>Video Youtube</label>
              <input type="text" id="video" name="video" class="form-control" placeholder="Video youtube" value="<?= ($data['video'] ? $data['video']:set_value('video')) ?>">
            </div>
            <div class="form-group">
              <label>File</label>
              <?php if(isset($data['file']) && !empty($data['file']) && file_exists("public/pengumuman/".$data['file'])): ?>
              <br>
              <img style="width: 200px;margin:10px 0 10px 0;" src="<?= base_url('/public/pengumuman/'.$data['file']) ?>">
              <?php endif; ?>
              <input type="file" id="file" name="file" class="form-control" placeholder="Gambar" value="<?= ($data['file'] ? $data['file']:set_value('file')) ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
          </div>
        </div>
    </form>
  </div>
  </div>
