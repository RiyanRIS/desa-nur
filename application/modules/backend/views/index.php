          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= backend_url('pengumuman')?>">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengumuman</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pengumuman?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-bullhorn fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= backend_url('pengunjung')?>">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengunjung</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pengunjung?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-secret fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
