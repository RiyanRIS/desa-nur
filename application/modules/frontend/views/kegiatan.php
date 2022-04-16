    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Jadwal Kegiatan</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Jadwal Kegiatan</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section mb-5 mt-5">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>TANGGAL</th>
                                <th>NAMA KEGIATAN</th>
                                <th>DETAIL KEGIATAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $kegiatans = $data['kegiatans'];
                            $no = 1;
                            foreach($kegiatans as $kegiatan):
                            ?>
                            <tr>
                                <td><?= date("d F Y", strtotime($kegiatan['tanggal'])) ?></td>
                                <td><?= $kegiatan['nama_kegiatan'] ?></td>
                                <td><?= $kegiatan['detail_kegiatan'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
