<div class="container">
    <div class="logo">
        <a href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/'); ?>img/logo.svg">
        </a>
    </div>

    <div class="form-login">
        <div class="title">
            <h1>Login dulu, yuk!</h1>
        </div>

        <?= $this->session->flashdata('message'); ?>

        <form class="user" method="post" action="<?= base_url('login'); ?>">
            <div class="form-group email">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group password">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-block btn-login">
                <span>Lanjut</span>
            </button>
            <div class="form-group">
                <img class="masuk-dengan" src="<?= base_url('assets/'); ?>img/masuk-dengan.png">
            </div>
            <div class="form-group login-with">
                <a href="#" class="btn btn-facebook">
                    <img src="<?= base_url('assets/'); ?>img/icon/Facebook.png" width="18" height="18"></i>
                    <p> Facebook</p>
                </a>
                <a href="#" class="btn btn-google">
                    <img src="<?= base_url('assets/'); ?>img/icon/Google.png" width="18" height="18">
                    <span> Google</span>
                </a>
            </div>
        </form>
        <hr>
        <div class="text-center btn-lupa">
            <a class="small" href="forgot-password.html">Lupa Password?</a>
        </div>
        <div class="text-center text-satu">
            <p>Belum punya akun?<a class="small" href="<?= base_url('register'); ?>"> Daftar</a></p>
        </div>
    </div>

    <div class="text-center copyright">
        <p>Copyright © 2021 Lazy Mart All Rights Reserved </p>
    </div>
</div>