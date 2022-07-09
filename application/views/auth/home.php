  <!-- Start Scroll Top -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- End Scroll Top -->

  <!-- Start Slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- Image Slider 1 -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/'); ?>img/slider/1.jpg" alt="Belanja Bulanan Meriah" />
              </div>
            </li>
            <!-- Image Slider 2 -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/'); ?>img/slider/2.png" alt="Gratis Ongkir" />
              </div>
            </li>
          </ul>
        </div>
        <!-- Slider Navigation Btn Next / Prev -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- End Slider -->

  <!-- Start Category Section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="aa-product-area">
          <div class="aa-product-inner">
            <!-- Start Category Navigation -->
            <ul class="judul-menu">
              <li class="heading"><a href="#">Kategori Pilihan</a></li>
              <li class="subheading"><a href="#">Lihat Semua <i class="fas fa-chevron-right fa-xs"></i></a></li>
            </ul>
            <!-- Start Category -->
            <div class="aa-product-catg">
              <a href="#">
                <div class="card categori-satu">
                  <img src="<?= base_url('assets/'); ?>img/item/kopi.png" class="card-img-top" alt="...">
                </div>
                <div class="card categori-dua">
                  <img src="<?= base_url('assets/'); ?>img/item/cemilan.png" class="card-img-top" alt="...">
                </div>
                <div class="card categori-tiga">
                  <img src="<?= base_url('assets/'); ?>img/item/susu.png" class="card-img-top" alt="...">
                </div>
                <div class="card categori-empat">
                  <img src="<?= base_url('assets/'); ?>img/item/bumbu.png" class="card-img-top" alt="...">
                </div>
                <div class="card categori-lima">
                  <img src="<?= base_url('assets/'); ?>img/item/nugget.png" class="card-img-top" alt="...">
                </div>
                <div class="card categori-enam">
                  <img src="<?= base_url('assets/'); ?>img/item/buah.png" class="card-img-top" alt="...">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Category Section -->

  <!-- Start Pembatas Section -->
  <div class="pembatas-section"></div>
  <!-- End Pembatas Section -->

  <!-- Start Category Section -->
  <section id="aa-populer">
    <div class="container">
        <div class="col-md-12">
          <div class="row">
            <!-- Start Category Navigation -->
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
          </div>
        </div>
      </div>
    </div>
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
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.php">Register now!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>