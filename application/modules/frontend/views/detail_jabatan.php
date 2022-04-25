    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Detail Jabatan</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Detail Jabatan</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
            <p>Nama: <?=  $data['pegawais'][0]['nama'] ?></p>
            <p>Jabatan: <?=  $data['pegawais'][0]['nama_jabatan'] ?></p>
            <p>Alamat: <?=  $data['pegawais'][0]['alamat'] ?></p>
            <p>Tugas: <?=  $data['pegawais'][0]['tugas'] ?></p>
            </div>
        </div>
    </section>
    <!-- .section -->
