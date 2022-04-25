<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $GLOBALS['title'].( this_module(2) != NULL ? ' - '.ucwords(this_module(2)) : '') ?></title>
    <link rel="shortcut icon" href="<?= $this->config->item('frontend').'img/'.$GLOBALS['icon'];?>">
    <!--META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/animate.css">

    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/aos.css">

    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/flaticon.css">
    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/icomoon.css">
    <link rel="stylesheet" href="<?= $this->config->item('frontend');?>css/style.css">
    <script src="<?= $this->config->item('frontend');?>js/jquery.min.js"></script>

    <!--END META-->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url()?>">
                <span><img src="<?= $this->config->item('frontend').'img/'.$GLOBALS['logo'];?>" width="200">
                </span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link" onclick="window.location.assign('<?= base_url()?>')"><span>Home</span></a></li>
                    <?php if($this->uri->segment(1) != null){ ?>
                        <li class="nav-item"><a href="#about" class="nav-link" onclick="window.location.assign('<?= base_url()?>#about')"><span>About</span></a>
                        </li>
                    <?php }else{ ?>
                        <li class="nav-item"><a href="#about" class="nav-link" data-nav-section="about"><span>About</span></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item"><a href="#" class="nav-link" onclick="window.location.assign('<?= base_url()?>struktur')"><span>Struktur Organisasi</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" onclick="window.location.assign('<?= base_url()?>pengumuman')"><span>Pengumuman</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" onclick="window.location.assign('<?= base_url()?>kegiatan')"><span>Jadwal Kegiatan</span></a>
                    <li class="nav-item"><a href="#" class="nav-link" onclick="window.location.assign('<?= base_url()?>contact')"><span>Contact</span></a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <?php 
        if (isset($content)) {
            $this->load->view($content);
        }
    ?>
    <!-- Batas Konten -->

    <div class="p-1 shadow-none bg-dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ftco-footer-widget mb-2 text-center">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook text-light"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter text-light"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram text-light"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <p class="mt-4 mb-2 text-light">2021 &copy; Desa Madaprama</p>
                </div>
            </div>
        </div>
    </div>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="<?= $this->config->item('frontend');?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/popper.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/bootstrap.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/jquery.easing.1.3.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/jquery.waypoints.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/jquery.stellar.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/owl.carousel.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/aos.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/scrollax.min.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/google-map.js"></script>
    <script src="<?= $this->config->item('frontend');?>js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- DISINI -->
    <script type="text/javascript">
        function sleep(time) {
            return new Promise((resolve) => setTimeout(resolve, time));
        }
    </script>
</body>

</html>