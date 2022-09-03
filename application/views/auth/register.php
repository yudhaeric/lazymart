    <div class="container">

        <div class="logo">
            <a href="<?= base_url(''); ?>">
                <span><img src="<?= base_url('assets/'); ?>img/logo.svg"></span>
            </a>
        </div>

        <div class="ilus-form">
            <div class="ilus">
                <span><img src="<?= base_url('assets/'); ?>img/ilustrasi.png" width="371" height="379"></span>
                <p>Belanja Kebutuhan Bulanan Hanya di Lazy Mart</p>
                <p class="text-satu">Daftar Sekarang dan Rasakan Kemudahan Berbelanja </p>
            </div>

            <div class="form">
                <div class="text-center text-dua">
                    <h1>Daftar dulu, yuk!</h1>
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

        <div class="text-center copyright">
            <p class="">Copyright © 2021 Lazy Mart All Rights Reserved </p>
        </div>

    </div>