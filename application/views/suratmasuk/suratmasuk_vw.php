<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">mark_email_unread</i>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-9">
                            <a href="<?= base_url() ?>suratmasuk/tambah" class="btn btn-primary">
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
                        <?php foreach ($suratmasuk as $srm) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $srm['no_suratmasuk']; ?></td>
                                <td><?= $srm['pengirim']; ?></td>
                                <td><?= $srm['jenis_surat']; ?></td>
                                <td><?= $srm['perihal']; ?></td>
                                <td><?= $srm['tgl_surat']; ?></td>
                                <td class="td-actions text-right">
                                    <a href="" class="btn btn-warning">
                                        <i class="material-icons">move_to_inbox</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratmasuk/edit/<?= $srm['no_suratmasuk']; ?>" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratmasuk/hapus/<?= $srm['no_suratmasuk']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data surat?');">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a href="<?= base_url() ?>suratmasuk/detail/<?= $srm['no_suratmasuk']; ?>" class="btn btn-info" class="btn btn-info">
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