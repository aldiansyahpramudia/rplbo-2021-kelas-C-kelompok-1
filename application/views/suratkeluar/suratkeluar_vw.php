<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header card-header-icon card-header-success">
                <div class="card-icon">
                    <i class="material-icons">drafts</i>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-9">
                            <a href="<?= base_url() ?>suratkeluar/tambah" class="btn btn-primary">
                                <i class="material-icons">post_add</i>
                                Tambah Data
                            </a>
                        </div>
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
                            <th>No. Surat</th>
                            <th>Nama Pengirim</th>
                            <th>Jenis Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Surat</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($suratkeluar as $srk) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $srk['no_suratkeluar']; ?></td>
                                <td><?= $srk['pengirim']; ?></td>
                                <td><?= $srk['jenis_surat']; ?></td>
                                <td><?= $srk['perihal']; ?></td>
                                <td><?= $srk['tgl_surat']; ?></td>
                                <td class="td-actions text-right">
                                    <a href="" class="btn btn-warning">
                                        <i class="material-icons">move_to_inbox</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratkeluar/edit/<?= $srk['no_suratkeluar']; ?>" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratkeluar/hapus/<?= $srk['no_suratkeluar']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data surat?');">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratkeluar/detail/<?= $srk['no_suratkeluar']; ?>" class="btn btn-info" class="btn btn-info">
                                        <i class="material-icons">view_list</i>
                                    </a>
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