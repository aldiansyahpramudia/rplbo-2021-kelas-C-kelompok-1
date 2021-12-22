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
                    <div class="row justify-content-end">
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
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getusers as $usr) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $usr['nama']; ?></td>
                                <td><?= $usr['email']; ?></td>
                                <td><?= $usr['role_id']; ?></td>

                                <td class="td-actions text-right">
                                    <a href="<?= base_url() ?>kelolauser/edit/<?= $usr['id']; ?>" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?= base_url() ?>kelolauser/hapus/<?= $usr['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data surat?');">
                                        <i class="material-icons">delete</i>
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