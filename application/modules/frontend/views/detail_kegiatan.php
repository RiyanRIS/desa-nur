    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Detail Kegiatan</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Detail Kegiatan</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
              <h1>Nama Kegiatan: <?=  $data['kegiatans']['nama_kegiatan'] ?></h1>
              <h6>Tanggal Kegiatan: <?=  date("d F Y", strtotime($data['kegiatans']['tanggal'])) ?></h6>
              <p>Detail Kegiatan: <?=  $data['kegiatans']['detail_kegiatan'] ?></p>
            </div>
        </div>
    </section>
    <!-- .section -->
