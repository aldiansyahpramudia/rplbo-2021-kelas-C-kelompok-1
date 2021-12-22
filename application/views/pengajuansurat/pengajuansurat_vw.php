<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card mt-0">
            <div class="card-body mt-3">
                <form action="<?= base_url('pengajuansurat'); ?>" method="post">
                    <div class="form-row p-2 ">
                        <div class="form-group col-md-6">
                            <label for="nama_pengirim">Nama</label>
                            <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="<?= set_value('nama_pengirim'); ?>">
                            <?= form_error('nama_pengirim', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jenis_surat">Jenis Surat</label>
                            <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" value="<?= set_value('jenis_surat'); ?>">
                            <?= form_error('jenis_surat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="no_induk">NIS/NIK</label>
                            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?= set_value('no_induk'); ?>">
                            <?= form_error('no_induk', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="perihal">Perihal</label>
                            <input type="text" class="form-control" id="perihal" name="perihal" value="<?= set_value('perihal'); ?>">
                            <?= form_error('perihal', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= set_value('keterangan'); ?>">
                            <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="col-auto">
                            <div class="form-group">
                                <label for="jenis_pengajuan">Pengajuan</label>
                                <select name="jenis_pengajuan" id="jenis_pengajuan" class="form-control">
                                    <option value="Surat Keluar" selected>Surat Keluar</option>
                                    <option value="Legalisir">Legalisir</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>