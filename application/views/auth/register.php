    <div class="container">

        <div class="lz-logo">
            <!-- Text Based Logo -->
            <a href="<?= base_url(''); ?>">
                <span><img src="<?= base_url('assets/'); ?>img/icon/logo.svg"></span>
                <p>lazy<strong>Mart</strong> <span>Belanja Jadi Mudah</span></p>
            </a>
        </div>

        <div class="lz-ilus">
            <!-- Text Based Logo -->
            <span><img src="<?= base_url('assets/'); ?>img/ilustrasi.png" width="371" height="379"></span>
            <p>Belanja Kebutuhan Bulanan Hanya di Lazy Mart</p>
            <p class="text-satu">Daftar Sekarang dan Rasakan Kemudahan Berbelanja </p>
        </div>

        <div class="card o-hidden my-5 col-lg-5 ml-7 lz-form">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center text-dua">
                                <h1 class="h4 text-gray-900 mb-4">Daftar dulu, yuk!</h1>
                                <p>Sudah punya akun?<a class="small" href="<?= base_url('login'); ?>"> Masuk</a></p>
                            </div>
                            <form class="user" method="post" action="<?= base_url('register'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Pengguna" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                        <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-login">
                                    <span>Daftar</span>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center text-tiga">
                                <p>Dengan mendaftar, kamu menyetujui <a class="small" href="#">Syarat dan Ketentuan </a>serta <a class="small" href="#"> Kebijakan Privasi</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center lz-copyright">
            <p class="">Copyright © 2021 Lazy Mart All Rights Reserved </p>
        </div>

    </div>