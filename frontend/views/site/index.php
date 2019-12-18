<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'FotoXpress';
?>

<!-- Start of slider area -->
<div class="slider-area">
   <div id="ensign-nivoslider" class="slides">
      <img src="<?= Url::to('@web/manali/assets/images/banner1.png')?>" alt="" title="#htmlcaption1" />
      <img src="<?= Url::to('@web/manali/assets/images/banner2.png')?>" alt="" title="#htmlcaption2" />
   </div>
   <!-- direction 1 -->
   <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
      <div class="container slider-height">
         <div class="row slider-height">
            <div class="col-md-offset-5 col-md-7 slider-height">
               <div class="slide-text">
                  <!--  <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                     <h2><strong>2016</strong></h2>
                     </div> -->
                  <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                     <h2>customize your mugs</h2>
                  </div>
                  <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                  </div>
                  <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                     <a href="#" class="button extra-small text-uppercase">
                     <span>Shop now</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- direction 2 -->
   <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
      <div class="container slider-height">
         <div class="row slider-height">
            <div class="col-md-offset-5 col-md-7 slider-height">
               <div class="slide-text">
                  <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                     <h2>customize your T-shirts</h2>
                  </div>
                  <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                  </div>
                  <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                     <a href="#" class="button extra-small text-uppercase">
                     <span>Shop now</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End of slider area -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
   <!-- Start Product List -->
   <div class="product-list-tab pt-90 pb-90">
      <div class="container">
         <div class="row">
            <!-- <div class="product-list"> -->
            <div class="col-md-3">
               <div class="single-product mb-40">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product1.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="T- shirt">T- shirt</a>
                     <div class="product-price">
                        <span class="new-price">₹ 185.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product5.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="Mug">Mug</a>
                     <div class="product-price">
                        <span class="new-price">₹ 150.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product mb-40">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="photo Frame">photo Frame</a>
                     <div class="product-price">
                        <span class="new-price">₹ 177.00</span>
                        <span class="old-price">₹ 200.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product3.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="T-Shirt"> T-Shirt</a>
                     <div class="product-price">
                        <span class="new-price">₹ 21.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3">
               <div class="single-product mb-40">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product4.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="T-Shirt">T-Shirt</a>
                     <div class="product-price">
                        <span class="new-price">₹ 38.00</span>
                        <span class="old-price">₹ 45.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product7.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="Post Cards">Post Cards</a>
                     <div class="product-price">
                        <span class="new-price">₹ 21.65</span>
                        <span class="old-price">₹ 24.60</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product mb-40">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product8.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                       
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="Mobile Cover">Mobile Cover</a>
                     <div class="product-price">
                        <span class="new-price">₹ 38.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-product">
                  <div class="product-img-content mb-20">
                     <div class="product-img">
                        <a href="product-details.php">
                        <img src="<?= Url::to('@web/manali/assets/images/product2.png')?>" alt="">
                        </a>
                     </div>
                     <div class="product-action text-center">
                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                        <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="#" title="Add to cart">
                        <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content text-center text-uppercase">
                     <a href="product-details.php" title="T-Shirt">T-Shirt</a>
                     <div class="product-price">
                        <span class="new-price">₹ 21.65</span>
                        <span class="old-price">₹ 24.60</span>
                     </div>
                  </div>
               </div>
            </div>
            <!-- </div> -->
         </div>
      </div>
   </div>
   <!-- End of Product List -->
</section>
<!-- End page content -->