<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data <?= ucfirst($this->uri->segment(2)) ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="150px">Tanggal</th>
                        <th width="200px">Nama Kegiatan</th>
                        <th>Detail Kegiatan</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $e){ ?>
                        <tr>
                            <td><?= convertDate($e['tanggal'])?></td>
                            <td><?= $e['nama_kegiatan']?></td>
                            <td><?= $e['detail_kegiatan']?></td>
                            <td class="text-center">
                                <a href="<?= backend_url('kegiatan/edit/'.$this->urlcrypt->encode($e['id']))?>" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" data-id="<?= $this->urlcrypt->encode($e['id'])?>" data-kegiatan="<?= $e['nama_kegiatan']?>" class="btn btn-danger btn-delete">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(".btn-delete").on("click",function(){
  let id   = $(this).data('id');
  let link = $(this).data('kegiatan'); 

    Swal.fire({
      title: 'Warning',
      type: 'warning',
      html: 'Anda yakin, ingin menghapus item dibawah ini ? <hr> <pre>'+link+'</pre>',
      showCloseButton: true,
      showCancelButton: true,
      focusConfirm: true,
      confirmButtonAriaLabel: 'Yakin',
      cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        if(result.value != null){
            $.ajax({
                  type: "POST",
                  url: "<?= backend_url('kegiatan/deleteAction')?>",
                  data:{ id },
                  beforeSend: function(e){
                    $(".loading").show();
                  },
                  success: function(e) {
                    sleep(400).then(() => { 
                      $.jGrowl("Berhasil menghapus data", { header: 'Success' });
                      $(".loading").hide();
                      
                      sleep(800).then(() => { 
                        window.location.href = "<?= backend_url('kegiatan')?>";
                      });    
                    });    
                  },
            });
        }
    })
})
</script>
