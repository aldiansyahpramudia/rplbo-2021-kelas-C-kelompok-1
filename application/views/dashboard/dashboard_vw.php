<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">mark_email_unread</i>
            </div>
            <p class="card-category">Surat Masuk</p>
            <h3 class="card-title"><?= $jml_suratmasuk ?></h3>
          </div>
          <div class="card-footer">

          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">drafts</i>
            </div>
            <p class="card-category">Surat Keluar</p>
            <h3 class="card-title"><?= $jml_suratkeluar ?></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <p class="card-category">Laporan Pengajuan</p>
            <h3 class="card-title"><?= $jml_laporanpengajuan ?></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">group</i>
            </div>
            <p class="card-category">Pengguna</p>
            <h3 class="card-title"><?= $jml_users ?></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Pengguna</h4>
            <p class="card-category">Jumlah Pengguna Setiap Hari</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Surat Masuk</h4>
            <p class="card-category">Jumlah Surat Masuk Setiap Bulan</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-danger">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Surat Keluar</h4>
            <p class="card-category">Jumlah Surat Keluar Setiap Bulan</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>