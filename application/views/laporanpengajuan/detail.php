<div class="content">
    <div class="container-fluid">
        <div class="card col-lg-6 md-auto">
            <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                    <h4 class="card-title"><?= $judul ?></h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-primary">
                                Nama Pengirim
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['nama_pengirim']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                NIS/NIK
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['no_induk']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Email
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Jenis Surat
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['jenis_surat']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Perihal
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['perihal']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Keterangan
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['keterangan']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Jenis Pengajuan
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['jenis_pengajuan']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Status
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $laporanpengajuan['status']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Tanggal Diajukan
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= date('d F Y', $laporanpengajuan['tgl_diajukan']); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <?php
                    if ($users['role_id'] == 'Member') {
                    ?>
                        <a href="<?= base_url() ?>pengajuansurat/riwayat" class="btn btn-primary">Kembali</a>
                    <?php
                    } else {
                    ?>
                        <a href="<?= base_url() ?>laporanpengajuan" class="btn btn-primary">Kembali</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>