  <!-- Start Scroll Top -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- End Scroll Top -->

  <!-- Start Slider -->
  <section id="slider">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- Image Slider 1 -->
            <li>
              <div class="seq-model">
                <picture>
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slide1-1000.svg" media="(min-width: 600px)">                  
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slide1.svg" media="(min-width: 320px)">
                  <img data-seq src="<?= base_url('assets/'); ?>img/slider/onedesktop.jpg" alt="Belanja Bulanan Meriah" />
                </picture>
              </div>
            </li>
            <!-- Image Slider 2 -->
            <li>
              <div class="seq-model">
                <picture>
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slide2-1000.svg" media="(min-width: 600px)">                  
                  <source srcset="<?= base_url('assets/'); ?>img/slider/slide2.svg" media="(min-width: 320px)">
                  <img data-seq src="<?= base_url('assets/'); ?>img/slider/twodesktop.png" alt="Gratis Ongkir" />
                </picture>
              </div>
            </li>
          </ul>
        </div>

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

  <!-- Start Populer Section -->
  <section id="populer">
    <ul class="judul-menu">
      <li class="heading2"><a href="#">Populer</a></li>
      <li class="subheading2"><a href="#">Lihat Semua <i class="fas fa-chevron-right fa-xs"></i></a></li>
    </ul>
    <div class="kategori">
      <?php foreach ($produk as $item) : ?>
        <div class="card card-populer">
          <a href="#">
            <img class="card-img" src="<?= base_url('assets/img/item/') . $item->image; ?>" class="card-img-top" alt="...">
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
          </a>                                                                                                                                                                          
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- End Populer Section -->

  <!-- Start Pembatas Section -->
  <div class="pembatas-section2"></div>
  <!-- End Pembatas Section -->

  <div class="btn-lainnya">
    <button>Lihat Lainnya</button>
  </div>

