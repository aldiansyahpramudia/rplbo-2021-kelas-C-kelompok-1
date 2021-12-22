<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card my-5">
        <div class="card-body">
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h3>Login Page</h3>
                  <br>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url() ?>auth/register">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>