<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data <?= ucfirst($this->uri->segment(2)) ?></h6>
  </div>
  <div class="card-body">
        <div class="col-lg-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" id="email" name="email" class="form-control" value="<?= $data['email']?>">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" value="<?= $data['phone']?>">
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea name="address" id="address" class="form-control"><?= $data['address']?></textarea>
            </div>
            <div class="form-group">
              <label>Lokasi Map</label>
              <input type="text" id="map" name="map" class="form-control" value="<?= $data['map']?>">
            </div>
            <a href="javascript:void(0)" id="submitData" class="btn btn-warning btn-user btn-block">Ubah</a>
            <a class="btn btn-default btn-user btn-block" id="loadingBtn" style="display: none;"><i class="fa fa-spinner fa-spin fa-fw"></i> Loading</a>
          </div>
        </div>
    </div>
</div>

<script>
$("#submitData").on("click",function(){
  var email = $("#email").val();
  var phone = $("#phone").val();
  var address = $("#address").val();
  var map = $("#map").val();

  $.ajax({
      type: "POST",
      url: "<?= backend_url('page/editAction')?>",
      data:{
        email,phone,address,map
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
            window.location.href = "<?= backend_url('page/contact')?>";
          });    
        });    
      },
  });
})
</script>