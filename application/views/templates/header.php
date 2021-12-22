<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/logo.png">
  <title>
    <?php echo $judul; ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url() ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?= base_url() ?>assets/img/sidebar-1.jpg">
      <div class="logo">
        <a class="simple-text logo-normal">
          <img class="img" src="<?= base_url() ?>assets/img/logo.png" alt="logoweb" width="35">
        </a>
        <a href="<?= base_url() ?>" class="simple-text logo-normal">
          MTSN 10 PEKANBARU
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php
          if ($users['role_id'] == 'Admin') {
          ?>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>kelolauser">
                <i class="material-icons">people</i>
                <p>Kelola Users</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>suratmasuk">
                <i class="material-icons">mark_email_unread</i>
                <p>Surat Masuk</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>suratkeluar">
                <i class="material-icons">drafts</i>
                <p>Surat Keluar</p>
              </a>
            </li>
          <?php
          } else {
          ?>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>pengajuansurat">
                <i class="material-icons">send</i>
                <p>Pengajuan Surat</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url() ?>laporanpengajuan">
                <i class="material-icons">assignment</i>
                <p>Laporan Pengajuan</p>
              </a>
            </li>
          <?php
          }
          ?>
          <li class="nav-item " data-toggle="modal" data-target="#logoutModal">
            <a class="nav-link">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><?php echo $judul; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>