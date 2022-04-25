    <!--BG HEADER-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Struktur Organisasi</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url()?>">Home</a>
                        </span>
                        <span><i class="ion-ios-arrow-forward"></i></span>
                        <span>Struktur Organisasi</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-lg-12 ftco-animate">
                 <h2 class="mb-4">Struktur Kepengurusan</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>JABATAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pegawais = $data['pegawais'];
                            $no = 1;
                            foreach($pegawais as $pegawai):
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pegawai['nama'] ?></td>
                                <td><a href="<?= base_url("struktur/detail_jabatan/" . $pegawai['id']) ?>"><?= $pegawai['nama_jabatan'] ?></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->
