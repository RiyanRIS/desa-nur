<?php 
    $this->db->order_by('dibaca', 'asc');
    $this->db->limit(5);
    $data   = $this->umum->get_data('pengunjung');
    $total  = $this->umum->get_total('pengunjung',['dibaca' => 0]);
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $GLOBALS['title'].( this_module(2) != NULL ? ' - '.ucwords(this_module(2)) : '') ?></title>
  <link rel="shortcut icon" href="<?= $this->config->item('frontend');?>img/<?= $GLOBALS['icon']?>">

  <!-- Custom fonts for this template-->
  <link href="<?= $this->config->item('backend');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= $this->config->item('backend');?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets');?>/custom.css" rel="stylesheet">
  <script src="<?= $this->config->item('backend');?>vendor/jquery/jquery.min.js"></script>

  <!-- Custom styles for this page -->
  <link href="<?= $this->config->item('backend');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- CKEditor -->
  <script src="<?= $this->config->item('backend');?>ckeditor/ckeditor.js"></script>
  <script src="<?= $this->config->item('backend');?>ckfinder/ckfinder.js"></script>

  <!-- jGrowl -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>

  <style type="text/css">
    label{
      font-weight: bold;
    }
  </style>

</head>

<?php if (isset($login)){?>
<body class="bg-gradient-primary" style="background-image: url(<?= $this->config->item('frontend');?>/img/bg_1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Administrator Area</h5>
            <hr class="my-4">
            <!-- <form class="form-signin"> -->
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <hr class="my-4">
              <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-block text-uppercase btn-login">Login</a>
              <a href="javascript:void(0)" class="btn btn-lg btn-default btn-block text-uppercase loadingBtn" style="display: none;">Authenticating...</a>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }else{ ?>
<div class="loading" style="display: none;"></div>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= backend_url() ?>">
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="<?= $this->config->item('frontend');?>img/<?= $GLOBALS['icon']?>" style="width: 30px;">
        </div>
        <div class="sidebar-brand-text mx-3">Desa <br> <sup>Madaprama</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($this->uri->segment(2) == null ? 'active':'')?>">
        <a class="nav-link" href="<?= backend_url() ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pegawai -->
      <li class="nav-item <?= ($this->uri->segment(2) == 'pegawai' ? 'active':'')?>">
        <a class="nav-link" href="<?= backend_url('pegawai')?>">
          <i class="fa fa-fw fa-users"></i>
          <span>Pegawai</span>
        </a>
      </li>

      <!-- Nav Item - Pengumuman -->
      <li class="nav-item <?= ($this->uri->segment(2) == 'pengumuman' ? 'active':'')?>">
        <a class="nav-link" href="<?= backend_url('pengumuman')?>">
          <i class="fa fa-fw fa-bullhorn"></i>
          <span>Pengumuman</span>
        </a>
      </li>

      <!-- Nav Item - Kegiatan -->
      <li class="nav-item <?= ($this->uri->segment(2) == 'kegiatan' ? 'active':'')?>">
        <a class="nav-link" href="<?= backend_url('kegiatan')?>">
          <i class="fa fa-fw fa-calendar"></i>
          <span>Jadwal Kegiatan</span>
        </a>
      </li>

      <!-- Nav Item - Pengunjung -->
      <li class="nav-item <?= ($this->uri->segment(2) == 'pengunjung' ? 'active':'')?>">
        <a class="nav-link" href="<?= backend_url('pengunjung')?>">
          <i class="fas fa-fw fa-user-secret"></i>
          <span>Pengunjung</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Web Setting
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= backend_url('page/home')?>">Home</a>
            <a class="collapse-item" href="<?= backend_url('page/pengumuman')?>">Pengumuman</a>
            <a class="collapse-item" href="<?= backend_url('page/contact')?>">Contact</a>
          </div>
        </div>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <i class="fas fa-search fa-fw"></i>
              </a> -->
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <?php if ($total > 0): ?>
                  <span class="badge badge-danger badge-counter"><?= $total?></span>
                <?php endif ?>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>

                <?php if($data) { foreach ($data as $key => $val): ?>
                  
                <a class="dropdown-item d-flex align-items-center" href="<?= backend_url('pengunjung/read/').$this->urlcrypt->encode($val['id'])?>">
                  <?php if($val['dibaca'] != 1){ ?>
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?= $val['pesan']?></div>
                    <div class="small text-gray-500"><?= $val['nama'].' · '.$val['email']?></div>
                  </div>
                  <?php }else{ ?>
                  <div>
                    <div class="text-truncate"><?= $val['pesan']?></div>
                    <div class="small text-gray-500"><?= $val['nama'].' · '.$val['email']?></div>
                  </div>
                  <?php } ?>
                </a>

                <?php endforeach;  ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?= backend_url('pengunjung')?>">Read More Messages</a>
                <?php }else{ ?>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div>
                      <div class="text-truncate">Belum ada pesan</div>
                    </div>
                  </a>
                <?php } ?>

              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $GLOBALS['user']['name']?></span>
                <i class="fa fa-user-circle fa-fw"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= backend_url('profile')?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?= backend_url('password')?>">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><?= ($this->uri->segment(2) != null ? ucfirst($this->uri->segment(2)):'Dashboard') ?> <?= ($this->uri->segment(3) != null ? ' - '.ucfirst($this->uri->segment(3)).' Data':'') ?>
          <?php if(isset($subtitle)){ ?>
            <br>
            <small style="font-size:18px;"><?= $subtitle?></small>
          <?php } ?>
          </h1>
          <?php if($this->uri->segment(3) != null && $this->uri->segment(2) != 'page'){ ?>
            <a href="<?= backend_url($this->uri->segment(2)) ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-arrow-left fa-fw"></i> Back</a>
          <?php } ?>
          <?php if(isset($button)){ ?>
            <div class="d-none d-sm-inline-block"><?= $button?></div>
          <?php } ?>

        </div>

          <?php if($this->session->flashdata("success_message")){?>
            <script>
              $.jGrowl("<?= $this->session->flashdata("success_message") ?>", { header: 'Success' });
            </script>
          <?php }elseif($this->session->flashdata("error_message")){?>
            <script>
              $.jGrowl("<?= $this->session->flashdata("error_message") ?>", { header: 'Error' });
            </script>
          <?php }?>    


          <!-- Konten -->
          <?php 
              if (isset($content)) {
                  $this->load->view($content);
              }
          ?>
          <!-- Batas Konten -->
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>2021 &copy; <?= $GLOBALS['title'] ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Ingin keluar dari website ? Klik tombol "Logout" jika siap</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= backend_url('auth/logoutAction')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= $this->config->item('backend');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= $this->config->item('backend');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= $this->config->item('backend');?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= $this->config->item('backend');?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= $this->config->item('backend');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= $this->config->item('backend');?>js/demo/datatables-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <?php if(isset($login)){ ?>
    <script>
        $('.btn-login').on('click',function(){
            let email = $('input[name="email"]').val();
            let password = $('input[name="password"]').val();

            $.ajax({
                    type: "POST",
                    url: "<?= backend_url('auth/loginAction')?>",
                    data: { email,password },
                    dataType: 'json',
                    beforeSend: function(){
                        $(".loading").show();
                        $("input[name='email']").attr('disabled',true);
                        $("input[name='password']").attr('disabled',true);
                        $(".btn-login").hide();
                        $(".loadingBtn").show();
                    },
                    success: function(e) {
                        $(".loading").hide();
                        console.log(e);
                        if(e.response === 'false'){
                            sleep(500).then(() => {
                                Swal.fire({
                                  title: 'Login Gagal',
                                  text: e.result,
                                  type: 'error',
                                  confirmButtonColor: '#2E9E5B',
                                })
                                $(".loadingBtn").hide();            
                                $("input[name='email']").val('').attr('disabled',false);
                                $("input[name='password']").val('').attr('disabled',false);
                                $(".btn-login").show();
                            });
                        }else{
                            sleep(500).then(() => {
                                Swal.fire({
                                  title: 'Login Berhasil',
                                  text: 'Berhasil masuk! Silahkan tunggu sebentar...',
                                  type: 'success',
                                  confirmButtonColor: '#2E9E5B',
                                })
                                $(".loadingBtn").hide();        
                                $("input[name='email']").val('').attr('disabled',false);
                                $("input[name='password']").val('').attr('disabled',false);
                                $(".btn-login").show();
                                sleep(1000).then(() => {
                                    window.location.href = e.result;
                                });
                            });
                        }
                    }
            });     
        })
    </script>
  <?php }?>

  <script>
    function sleep(time) {
      return new Promise((resolve) => setTimeout(resolve, time));
    }
  </script>


</body>

</html>
