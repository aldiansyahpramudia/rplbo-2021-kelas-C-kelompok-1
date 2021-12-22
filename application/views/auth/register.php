<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card my-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h3>Create an Account!</h3>
                                    <br>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?= set_value('nama'); ?>">
                                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address " value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url() ?>auth">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>