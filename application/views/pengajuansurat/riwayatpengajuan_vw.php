<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header card-header-text card-header-rose">
                <div class="card-text">
                    <h4 class="card-title">Riwayat Pengajuan</h4>
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
                            <?php if ($lpr['id'] == $users['id']) { ?>
                                <tr>
                                    <td><?= $lpr['nama_pengirim']; ?></td>
                                    <td><?= $lpr['email']; ?></td>
                                    <td><?= $lpr['jenis_surat']; ?></td>
                                    <td><?= $lpr['jenis_pengajuan']; ?></td>
                                    <td>
                                        <?php
                                        if ($lpr['status'] == 'Belum Diproses') {
                                        ?>
                                            <span class="badge badge-warning"><?= $lpr['status']; ?></span>
                                        <?php
                                        } else if ($lpr['status'] == 'Sedang Diproses') {
                                        ?>
                                            <span class="badge badge-primary"><?= $lpr['status']; ?></span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="badge badge-success"><?= $lpr['status']; ?></span>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>laporanpengajuan/detail/<?= $lpr['id_pengajuan']; ?>" class="btn btn-info">
                                            <i class="material-icons">view_list</i>
                                        </a>
                                        <?php
                                        if ($lpr['status'] == 'Belum Diproses') {
                                        ?>
                                            <a href="<?= base_url() ?>laporanpengajuan/hapus/<?= $lpr['id_pengajuan']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin membatalkan pengajuan?');">
                                                <i class="material-icons">close</i>
                                            </a>
                                        <?php
                                        }
                                        ?>
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