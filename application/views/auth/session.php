<div class="container">

    <div class="lz-logo">
        <!-- Text Based Logo -->
        <a href="<?= base_url('home'); ?>">
            <span><img src="<?= base_url('assets/'); ?>img/icon/logo.svg"></span>
            <p>lazy<strong>Mart</strong> <span>Belanja Jadi Mudah</span></p>
        </a>
    </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5 lz-form-login">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row lz-card">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb-4 title">Login dulu, yuk!</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('login'); ?>">
                                    <div class="form-group btn-email">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group btn-password">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-login">
                                        <span>Lanjut</span>
                                    </button>
                                    <div class="form-group">
                                        <img class="masuk-dengan" src="<?= base_url('assets/'); ?>img/masuk-dengan.png">
                                    </div>
                                    <div class="form-group row">
                                        <a href="#" class="col-lg-5 mb-2 mb-sm-0 btn btn-facebook">
                                            <img src="<?= base_url('assets/'); ?>img/icon/Facebook.png" width="18" height="18"></i>
                                            <p> Facebook</p>
                                        </a>
                                        <a href="#" class="col-sm-5 btn btn-google">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center lz-copyright">
        <p>Copyright © 2021 Lazy Mart All Rights Reserved </p>
    </div>

</div>