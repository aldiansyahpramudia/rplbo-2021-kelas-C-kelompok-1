<div class="content">
    <div class="container-fluid">
        <div class="card col-lg-6 md-auto">
            <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                    <h4 class="card-title">Detail Data Surat Keluar</h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-primary">
                                No. Surat
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $suratkeluar['no_suratkeluar']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Nama Pengirim
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $suratkeluar['pengirim']; ?>
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
                                <?= $suratkeluar['jenis_surat']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                perihal
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $suratkeluar['perihal']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Tanggal Surat
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $suratkeluar['tgl_surat']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                Tanggal Diterima
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?= $suratkeluar['tgl_diterima']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-primary">
                                File Surat
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                download
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <a href="<?= base_url() ?>suratkeluar" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>