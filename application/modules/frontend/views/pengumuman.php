    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Pengumuman</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Pengumuman</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                    <?php $i=0; foreach ($video as $key => $value){ ?>
                        
                    <?php if(isset($value['file']) && !empty($value['file']) && file_exists("public/pengumuman/".$value['file'])): ?>
                        <div class="col-md-4">
                            <a href="<?= site_url("pengumuman/detail/" . $value['id']) ?>">
                            <div class="section-row">
                                <div class="item">
                                    <div class="project">
                                        <div class="img">
                                            <?php if($value['file'] != ""){ ?>
                                            <img src="<?= base_url('public/pengumuman/'.$value['file'])?>" class="img-fluid" alt="">
                                            <?php } else { ?>
                                                <img src="<?= $this->config->item('frontend')?>img/download.jpeg" class="img-fluid" alt="">
                                            <?php } ?>
                                        </div>
                                        <div class="text px-4">
                                            <span class="label label-success"><?= convertDate($value['tanggal'])?></span>
                                            <h5 style="font-weight: bold"><?= $value['judul']?></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-4">
                        <a href="<?= site_url("pengumuman/detail/" . $value['id']) ?>">
                            <div class="section-row">
                                <div class="item">
                                    <div class="project">
                                    <div class="img">
                                        <img src="<?= $this->config->item('frontend')?>img/download.jpeg" class="img-fluid" alt="">
                                    </div>
                                        <div class="text px-4">
                                            <span class="label label-success"><?= convertDate($value['tanggal'])?></span>
                                            <h5 style="font-weight: bold"><?= $value['judul']?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
