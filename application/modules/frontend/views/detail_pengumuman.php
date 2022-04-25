    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Detail Pengumuman</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Detail Pengumuman</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
            <?php if(isset($data['pengumuman']['file']) && !empty($data['pengumuman']['file']) && file_exists("public/pengumuman/".$data['pengumuman']['file'])){ ?>
                <img src="<?= base_url('public/pengumuman/'.$data['pengumuman']['file'])?>" class="img-fluid" alt="">
            <?php } ?>
            <h1>Judul: <?= $data['pengumuman']['judul'] ?> </h1><br>
            <?= date("d F Y", strtotime($data['pengumuman']['tanggal'])) ?> <br>
            <?= $data['pengumuman']['konten'] ?>
            <?php if(isset($data['pengumuman']['video']) && !empty($data['pengumuman']['video'])){ ?>
                <iframe width="420" height="315"
                src="<?= $data['pengumuman']['video'] ?>" frameborder="0" allowfullscreen>
                </iframe>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- .section -->
