<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                <i class="material-icons">assignment</i>
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
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>NIS/NIK</th>
                            <th>Email</th>
                            <th>Jenis Surat</th>
                            <th>Perihal</th>
                            <th>Pengajuan</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($laporanpengajuan as $lpr) : ?>
                        <tr>
                            <td class="text-center"><?= $i; ?></td>
                            <td><?= $lpr['nama_pengirim']; ?></td>
                            <td><?= $lpr['no_induk']; ?></td>
                            <td><?= $lpr['email']; ?></td>
                            <td><?= $lpr['jenis_surat']; ?></td>
                            <td><?= $lpr['perihal']; ?></td>
                            <td><?= $lpr['jenis_pengajuan']; ?></td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-warning">
                                    <i class="material-icons">move_to_inbox</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger">
                                    <i class="material-icons">delete</i>
                                </button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>