<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Title</label>
              <input type="text" id="title" name="title" class="form-control" value="<?= $data['title']?>">
            </div>
            <div class="form-group">
              <label>Subtitle</label>
              <input type="text" id="subtitle" name="subtitle" class="form-control" value="<?= $data['subtitle']?>">
            </div>
            <div class="form-group">
              <label>Subtitle Description</label>
              <textarea id="subtitle_desc" name="subtitle_desc" class="form-control"><?= $data['subtitle_desc']?></textarea>
            </div>
            <div class="form-group">
              <label>Description</label>
              <?= $this->ckeditor->editor("desc","".$data['desc'].""); ?>
            </div>
            <a href="javascript:void(0)" id="submitData" class="btn btn-warning btn-user btn-block">Ubah</a>
            <a class="btn btn-default btn-user btn-block" id="loadingBtn" style="display: none;"><i class="fa fa-spinner fa-spin fa-fw"></i> Loading</a>
          </div>
        </div>
    </div>
</div>

<script>
$("#submitData").on("click",function(){
  var title = $("#title").val();
  var subtitle = $("#subtitle").val();
  var subtitle_desc = $("#subtitle_desc").val();
  var desc = CKEDITOR.instances.desc.getData();

  $.ajax({
      type: "POST",
      url: "<?= backend_url('page/editAction')?>",
      data:{ 
        title,subtitle,subtitle_desc,desc
      },
      beforeSend: function(e){
        $("#submitData").hide();
        $("#loadingBtn").show();
      },
      success: function(e) {
        sleep(400).then(() => { 
          $.jGrowl("Berhasil merubah data", { header: 'Success' });
          $("#loadingBtn").hide();
          $("#submitData").show();
          sleep(800).then(() => { 
            window.location.href = "<?= backend_url('page/home')?>";
          });    
        });    
      },
  });
})
</script>