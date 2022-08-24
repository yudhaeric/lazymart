  <!-- ---------------------------- -->
  <!--CONTENT HOME BEFORE LOGGED IN  -->
  <!-- ---------------------------- -->
  
  <!-- Start Scroll Top -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- End Scroll Top -->

  <!-- Start Slider -->
  <section id="slider">
      <div id="sequence" class="seq">
        <!-- <div class="seq-screen"> -->
          <ul class="seq-canvas">
            <!-- Image Slider 1 -->
            <li>
              <div class="seq-model">
                <picture>
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-428.jpg" media="(max-width: 600px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-414.jpg" media="(max-width: 428px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-390.jpg" media="(max-width: 414px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-375.jpg" media="(max-width: 390px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-360.jpg" media="(max-width: 375px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider1-320.jpg" media="(max-width: 360px)">
                  <img data-seq srcset="<?= base_url('assets/'); ?>img/slider/slider-desktop.jpg" alt="Belanja Bulanan Meriah" />
                </picture>
              </div>
            </li>
            <!-- Image Slider 2 -->
            <li>
              <div class="seq-model">
                <picture>
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-428.jpg" media="(max-width: 600px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-414.jpg" media="(max-width: 428px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-390.jpg" media="(max-width: 414px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-375.jpg" media="(max-width: 390px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-360.jpg" media="(max-width: 375px)">
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slider2-320.jpg" media="(max-width: 360px)">
                  <img data-seq srcset="<?= base_url('assets/'); ?>img/slider/slider2-desktop.png" alt="Gratis Ongkir" />
                </picture>
              </div>
            </li>
          </ul>
        <!-- </div> -->
        <!-- Slider Navigation Btn Next / Prev -->
        <div class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </div>
      </div>
  </section>
  <!-- End Slider -->

  <!-- Start Category Section -->
  <section id="product">
    <ul class="judul-menu">
      <li class="heading">Kategori Pilihan</li>
      <li class="subheading"><a href="#">Lihat Semua <i class="fas fa-chevron-right fa-xs"></i></a></li>
    </ul>
    <!-- Start Category -->
    <div class="product-catg">
        <img src="<?= base_url('assets/'); ?>img/item/kopi.png" alt="...">
        <img src="<?= base_url('assets/'); ?>img/item/cemilan.png" alt="...">
        <img src="<?= base_url('assets/'); ?>img/item/susu.png" alt="...">
        <img src="<?= base_url('assets/'); ?>img/item/bumbu.png" alt="...">
        <img src="<?= base_url('assets/'); ?>img/item/nugget.png" alt="...">
        <img src="<?= base_url('assets/'); ?>img/item/buah.png" alt="...">
    </div>
  </section>
  <!-- End Category Section -->

  <!-- Start Pembatas Section -->
  <div class="pembatas-section"></div>
  <!-- End Pembatas Section -->

  <!-- Start Category Section -->
  <section id="populer">
    <ul class="judul-menu">
      <li class="heading2"><a href="#">Populer</a></li>
      <li class="subheading2"><a href="#">Lihat Semua <i class="fas fa-chevron-right fa-xs"></i></a></li>
    </ul>
    <!-- Start Category -->
    <?php foreach ($produk as $item) : ?>
      <div class="card card-populer">
        <a href="#">
          <img class="card-img" src="<?= base_url('assets/img/item/') . $item->image; ?>" class="card-img-top" alt="...">
          <div class="card-body">
              <p class="card-name"><?= $item->name; ?></p>
              <p class="card-price">Rp <?= $item->price; ?></p>
              <div class="card-disc">
                <div class="card-disc-percent">
                    <p class="card-disc-percent2"><?= $item->disc; ?></p>
                </div>
                <p class="card-disc-price">Rp <?= $item->disc2; ?></p>
              </div>
              <div class="card-rating">
                  <img class="card-rating-star" src="<?= base_url('assets/');?>img/icon/star-fill.png" alt="">
                  <img class="card-rating-star" src="<?= base_url('assets/');?>img/icon/star-fill.png" alt="">
                  <img class="card-rating-star" src="<?= base_url('assets/');?>img/icon/star-fill.png" alt="">
                  <img class="card-rating-star" src="<?= base_url('assets/');?>img/icon/star-fill.png" alt="">
                  <img class="card-rating-star" src="<?= base_url('assets/');?>img/icon/star-fill.png" alt="">
                  <p class="card-rating-sold">|  <?= $item->rating; ?> Terjual</p>
              </div>
              <div class="card-button">
                <button type="submit" class="card-button-wishlist" name="addWish"><i class="fas fa-heart"></i></button>
                <button type="submit" class="card-button-addcart" name="addCart"><i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="product_id" value="<?= $item->id; ?>">
              </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </section>
  <!-- End Category Section -->

  <!-- Start Pembatas Section -->
  <div class="pembatas-section2"></div>
  <!-- End Pembatas Section -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="lost-password"><a href="#">Lost your password?</a></p>
            <div class="register-now">
              Don't have an account?<a href="account.php">Register now!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>