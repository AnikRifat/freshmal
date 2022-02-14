<?php require APPROOT . '/views/front/inc/header.php'; ?>
<!-- hero start -->
<?php
if (isset($data['login_seccess'])) {
  if ($data['login_success']) {
    echo "<div class='alert alert-success'>
  <strong>" . $data['login_success'] . "</strong></div>";
  }
}
// die(var_dump($_SESSION));
?>
<section class="hero__area hero__style--2 pos-rel">
  <div class="slider__single hero__height d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center mt-none-30">
        <div class="col-xl-5 col-lg-5">
          <div class="hero__img">
            <img src="<?php echo URLROOT; ?>/assets/front/img/slider/img_03.png" alt="">
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 order-first">
          <div class="slider__content mt-30">
            <h2 class="slide__title">Get your foods online today</h2>
            <ul class="hero__features list-unstyled">
              <li>Quick delivery</li>
              <li>Always fresh</li>
              <li>hand made & 100% Organic </li>
            </ul>
            <div class="hero__btn mt-40">
              <a class="thm_btn thm_btn-2 radius_btn" href="shop.html">shop product
                now</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="hero__right text-md-end mt-30">
            <div class="hero__right--top mb-80">
              <h4 class="hr__title">Quality product</h4>
              <p>It’s been quite a while since talked about our failures here. Since then,
                we’ve made some new</p>
              <ul class="rating__star mt-15 mb-10 ul_li_right">
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
              </ul>
              <span>324 Review for our Stisfied Customer</span>
            </div>
            <div class="hero__right--bottom">
              <h4 class="hr__title">Always Fresh</h4>
              <p>IIt’s been quite a while since talked about our failures here. Since
                then, we’ve made some newIt’s been quite a while since talked</p>
              <span>We Provide best service in #345 Countries</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- hero end -->

<!-- category start -->
<section class="category__area pt-80 pb-80">
  <div class="container">
    <div class="category__active--3 owl-carousel slider__arrow slider__arrow--white text-center">
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_07.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">fresh meat</a></h3>
      </div>
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_08.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">Vegetable</a></h3>
      </div>
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_09.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">fruits</a></h3>
      </div>
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_10.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">Fish</a></h3>
      </div>
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_11.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">Peyaj TInar</a></h3>
      </div>
      <div class="category__single--3">
        <div class="cat__icon">
          <a href="#!"><img src="<?php echo URLROOT; ?>/assets/front/img/category/img_08.png" alt=""></a>
        </div>
        <h3 class="cat__title"><a href="#!">Vegetable</a></h3>
      </div>
    </div>
  </div>
</section>
<!-- category end -->

<!-- product start -->
<section class="product__area pt-60 pb-60">
  <div class="container">
    <div class="sec__title mb-25">
      <h2 class="title">Our Products</h2>
    </div>
    <div class="row g-0 justify-content-center">


      <?php foreach ($data['products'] as $product) : ?>


        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="product__single">
            <div class="product__img">
              <a href="shop-details.html"><img class="img-fluid" src="<?php echo $product->image; ?>" alt=""></a>
            </div>
            <div class="product__contact mt-25">
              <h3 class="product__title"><a href="#"><?php echo $product->title; ?></a>
              </h3>
              <h5 class="product__price"><?php echo $product->price; ?>৳/ <span><?php echo $product->unit; ?></span></h5>
            </div>
            <div class="product__bottom ul_li_between mt-15">
              <button class="addCart">Cart</button>
              <div class="ps__btns">
                <!-- <a class="ps__btn ps__btn--heart" href="#!"><i class="far fa-heart"></i></a> -->
                <div class="btnview_">
                  <button class="btn btn-success border-0 " onClick="cartLS.add({id: <?php echo $product->id; ?>, name: '<?php echo $product->title; ?>', price: <?php echo $product->price; ?>,unit:'<?php echo $product->unit; ?>',image:'<?php echo $product->image; ?>'})">
                    <div class="changebtn">
                      <i class="far fa-shopping-basket"></i>
                    </div>
                  </button>
                </div>
                <div class="id_<?php echo $product->id; ?> d-none">my-view</div>
              </div>
            </div>

            <!-- <div class="product__badge">
            <span>-20</span>
          </div> -->
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- product end -->

<!-- offer start -->
<section class="offer__area">
  <div class="container">
    <div class="row mt-none-30">
      <div class="col-lg-6 col-md-6">
        <div class="offer__single offer__bg offer__single--1 mt-30">
          <div class="offer__content">
            <h4 class="offer__title">Get 15% Organic Vegetable</h4>
            <p>Shop our selection of organic fresh vegetables in a discounted price. 10%
              off.</p>
            <div class="offer__btn mt-30">
              <a class="thm_btn radius_btn" href="shop.html">Shop now</a>
            </div>
          </div>
          <div class="offer__img">
            <img src="<?php echo URLROOT; ?>/assets/front/img/offer/img_01.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="offer__single offer__bg offer__single--2 mt-30">
          <div class="offer__content">
            <h4 class="offer__title">Get 10% off on all Fruits Item</h4>
            <p>Shop our selection of organic fresh vegetables in a discounted price. 10%
              off.</p>
            <div class="offer__btn mt-30">
              <a class="thm_btn thm_btn-2 radius_btn" href="shop.html">Shop now</a>
            </div>
          </div>
          <div class="offer__img">
            <img src="<?php echo URLROOT; ?>/assets/front/img/offer/img_02.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- offer end -->
<?php require APPROOT . '/views/front/inc/footer.php'; ?>