<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <div class="card mt-0">
                    <div class="card-body mt-4">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $getusers['id'] ?>">
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $getusers['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $getusers['email']; ?>">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="inputState">Role</label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        <?php foreach ($role_id as $rid) : ?>
                                            <?php if ($rid == $getusers['role_id']) : ?>
                                                <option value="<?= $rid; ?>" selected><?= $rid; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $rid; ?>"><?= $rid; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Edit Data User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>