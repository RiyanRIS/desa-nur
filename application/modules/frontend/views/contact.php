    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Contact</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Contact</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-row">
                            <h3>Contact</h3>
                            <ul class="list-style">
                                <li><p><strong>Email:</strong> <?= $data['email']?></p></li>
                                <li><p><strong>Phone:</strong> <?= $data['phone']?></p></li>
                                <li><p><strong>Address:</strong> <?= $data['address']?></p></li>
                            </ul>
                        </div>
                        <div class="section-row pt-3">
                            <h3>Lokasi</h3>
                            <p class="col-sm-12">
                            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?= $data['map']?>&output=embed"></iframe>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-row">
                                <h3>Kirim Pesan</h3>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:void(0)" class="btn btn-default btn-md btn-block loadingBtn" style="display: none;" disabled><i class="fa fa-spinner fa-spin"></i> Sending Message...</a>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-md btn-block sendMessage">Kirim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->

<script>
    $('.sendMessage').on('click',function(){
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let message = $('textarea[name="message"]').val();

        if(name == '' || email == '' || message == ''){
            Swal.fire({
              title: 'Warning',
              text: "Silahkan lengkapi form dulu",
              animation: false,
              confirmButtonColor: '#2E9E5B',
              customClass: {
                popup: 'animated tada'
              }
            })                              
        }else{
            $.ajax({
                    type: "POST",
                    url: "<?= base_url().'contact/sendMessage'?>",
                    data: { name,email,message },
                    dataType: 'json',
                    beforeSend: function(){
                        $("input[name='name']").attr('disabled',true);
                        $("input[name='email']").attr('disabled',true);
                        $("textarea[name='message']").attr('disabled',true);
                        $(".sendMessage").hide();
                        $(".loadingBtn").show();
                    },
                    success: function(e) {
                        if(e.result != 'true'){
                            sleep(1000).then(() => {
                                Swal.fire({
                                  title: 'Failed',
                                  text: 'Dilarang spam! Tunggu 1 menit lagi',
                                  type: 'error',
                                  confirmButtonColor: '#2E9E5B',
                                })
                                $(".loadingBtn").hide();            
                                $("input[name='name']").val('').attr('disabled',false);
                                $("input[name='email']").val('').attr('disabled',false);
                                $("textarea[name='message']").val('').attr('disabled',false);
                                $(".sendMessage").show();
                            });
                        }else{
                            sleep(1000).then(() => {
                                Swal.fire({
                                  title: 'Success',
                                  text: 'Pesan berhasil dikirim, terimakasih',
                                  type: 'success',
                                  confirmButtonColor: '#2E9E5B',
                                })
                                $(".loadingBtn").hide();        
                                $("input[name='name']").val('').attr('disabled',false);
                                $("input[name='email']").val('').attr('disabled',false);
                                $("textarea[name='message']").val('').attr('disabled',false);
                                $(".sendMessage").show();
                            });
                        }
                    }
            });     
        }
    })
</script>