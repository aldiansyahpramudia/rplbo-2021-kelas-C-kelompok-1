<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header card-header-text card-header-success">
                <div class="card-text">
                    <h4 class="card-title">Diterima</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-3">
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Surat</th>
                            <th>Pengajuan</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($laporanpengajuan as $lpr) : ?>
                            <?php if ($lpr['status'] == "Diterima") { ?>
                                <tr>
                                    <td><?= $lpr['nama_pengirim']; ?></td>
                                    <td><?= $lpr['email']; ?></td>
                                    <td><?= $lpr['jenis_surat']; ?></td>
                                    <td><?= $lpr['jenis_pengajuan']; ?></td>
                                    <td><span class="badge badge-success"><?= $lpr['status']; ?></span></td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>laporanpengajuan/detail/<?= $lpr['id_pengajuan']; ?>" class="btn btn-info">
                                            <i class="material-icons">view_list</i>
                                        </a>
                                        <a href="<?= base_url() ?>laporanpengajuan/hapus/<?= $lpr['id_pengajuan']; ?>" class="btn btn-success">
                                            <i class="material-icons">done</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header-text card-header-danger">
                <div class="card-text">
                    <h4 class="card-title">Ditolak</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-3">
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Surat</th>
                            <th>Pengajuan</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($laporanpengajuan as $lpr) : ?>
                            <?php if ($lpr['status'] == "Ditolak") { ?>
                                <tr>
                                    <td><?= $lpr['nama_pengirim']; ?></td>
                                    <td><?= $lpr['email']; ?></td>
                                    <td><?= $lpr['jenis_surat']; ?></td>
                                    <td><?= $lpr['jenis_pengajuan']; ?></td>
                                    <td><span class="badge badge-danger"><?= $lpr['status']; ?></span></td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>laporanpengajuan/detail/<?= $lpr['id_pengajuan']; ?>" class="btn btn-info">
                                            <i class="material-icons">view_list</i>
                                        </a>
                                        <a href="<?= base_url() ?>laporanpengajuan/hapus/<?= $lpr['id_pengajuan']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menolak laporan pengajuan surat?');">
                                            <i class="material-icons">close</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>