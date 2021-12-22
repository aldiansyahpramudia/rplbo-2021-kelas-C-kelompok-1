<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card mt-0">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="no_suratkeluar">No. Surat</label>
                            <input type="text" class="form-control" id="no_suratkeluar" name="no_suratkeluar" value="<?= $suratkeluar['no_suratkeluar']; ?>">
                            <?= form_error('no_suratkeluar', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_surat">Tanggal Surat</label>
                            <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" value="<?= $suratkeluar['tgl_surat']; ?>">
                            <?= form_error('tgl_surat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="pengirim">Pengirim</label>
                            <input type="text" class="form-control" id="pengirim" name="pengirim" value="<?= $suratkeluar['pengirim']; ?>">
                            <?= form_error('pengirim', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_diterima">Tanggal Diterima</label>
                            <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima" value="<?= $suratkeluar['tgl_diterima']; ?>">
                            <?= form_error('tgl_diterima', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="jenis_surat">Jenis Surat</label>
                            <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" value="<?= $suratkeluar['jenis_surat']; ?>">
                            <?= form_error('jenis_surat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="perihal">Perihal</label>
                            <input type="text" class="form-control" id="perihal" name="perihal" value="<?= $suratkeluar['perihal']; ?>">
                            <?= form_error('perihal', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <label for="file_surat">Ganti File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_surat" name="file_surat">
                            <label class=" custom-file-label" for="file_surat">Choose file</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit Data Surat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>