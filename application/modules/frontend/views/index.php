   <section class="hero-wrap js-fullheight" style="background-image: url('<?= $this->config->item('frontend');?>img/bg_1.jpg');" data-section="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $data['subtitle']?></h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $data['subtitle_desc']?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb mb-5" id="section-counter" data-section="about">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-4 mt-5">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(<?= $this->config->item('frontend');?>img/kades.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate text-justify">
                            <span class="subheading">Sekilas Tentang</span>
                            <h2 class="mb-4">Desa Madaprama</h2>
                            <?= $data['desc']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb mb-5" id="struktur" data-section="struktur">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 mt-5">
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
                                <td><?= $pegawai['jabatan'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
