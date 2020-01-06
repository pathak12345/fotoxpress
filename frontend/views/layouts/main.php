<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\ManaliAppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use common\models\Category;

ManaliAppAsset::register($this);
$this->title = "BookMyPhoto";
$categories = Category::find()->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

   <div class="wrapper">
        <!-- Start of header area -->
        <header>
            <div class="header-top-bar white-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="header-top">
                                <ul>
                                  <li><i class="zmdi zmdi-facebook"></i> </li>
                                  <li><i class="zmdi zmdi-instagram"></i> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header-logo text-center">
                                <a href="index.php">
                                <h1>BookMyPhoto</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header-top header-top-right">
                                <ul>
                                    <?php
                                        if(Yii::$app->user->isGuest){
                                    ?>
                                        <li class="lh-50">
                                            <a href="#" class="pr-20 text-uppercase">account</a>
                                            <div class="header-top-down header-top-hover pl-15 lh-35">
                                                <ul>
                                                    <li><a href="<?=Url::to(['site/login'])?>">Login</a></li>
                                                    <li><a href="cart.php">My Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
                                        }else{
                                    ?>
                                        <li class="lh-50">
                                            <a href="#" class="pr-20 text-uppercase">Welcome <?=Yii::$app->user->identity->username?></a>
                                            <div class="header-top-down header-top-hover pl-15 lh-35">
                                                <ul>
                                                    <li><a href="<?=Url::to(['site/logout-user'])?>">Logout</a></li>
                                                    <li><a href="cart.php">My Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                    
                                    <li class="lh-50">
                                        <a href="checkout.php" class="prl-20 text-uppercase">check out</a>
                                    </li>
                                    <li class="cart-link lh-50">
                                        <a href="checkout.php" class="pl-20">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                            <span>2</span>
                                        </a>
                                        <div class="mini-cart-inner header-top-down p-20">
                                            <ul class="cart-list">
                                                <li class="p-10 mb-15">
                                                    <a href="" class="product-image">
                                                        <img src="<?= Url::to('@web/manali/images/shop/cart/1.jpg')?>" alt="">
                                                    </a>
                                                    <div class="product-details ml-10">
                                                        <a href="#" class="remove">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                        <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                        <span class="selected-color">Color: Black</span>
                                                        <span class="selected-size">₹80.00</span>
                                                    </div>
                                                </li>
                                                <li class="p-10 mb-15">
                                                    <a href="#" class="product-image">
                                                        <img src="<?= Url::to('@web/manali/images/shop/cart/2.jpg')?>" alt="">
                                                    </a>
                                                    <div class="product-details ml-10">
                                                        <a href="#" class="remove">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                        <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                        <span class="selected-color">Color: white</span>
                                                        <span class="selected-size">₹65.00</span>
                                                    </div>
                                                </li>
                                                <li class="p-10 mb-15">
                                                    <a href="#" class="product-image">
                                                        <img src="<?= Url::to('@web/manali/images/shop/cart/3.jpg')?>" alt="">
                                                    </a>
                                                    <div class="product-details ml-10">
                                                        <a href="#" class="remove">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                        <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                        <span class="selected-color">Color: Red</span>
                                                        <span class="selected-size">₹100.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="border-bottom"></div>
                                            <div class="cart-footer text-center">
                                                <p class="total mtb-15">
                                                    Subtotal:
                                                    <span class="ml-35">₹190.98</span>
                                                </p>
                                                <p class="buttons m-0">
                                                    <a href="checkout.php" class="button extra-small">
                                                        <span>Checkout</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-area header-wrapper transparent-header">
                <div class="header-middle-area black-bg">
                    <div class="container">
                        <div class="full-width-mega-dropdown">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-center">
                                            <!-- <li class="nav-item active"><a href="#" class="nav-link">POST CARD</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">PHOTO FRAMES SIZES</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">MUGS</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">MOBILE POUCH</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">T SHIRT+ PRINTING</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">ALBUM DESIGNING + PRINTING</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">ALBUMS</a></li> -->
                                            <?php
                                                foreach ($categories as $category) {
                                            ?>
                                                <li class="nav-item"><a href="<?=Url::to(['site/category', 'id' => $category->id])?>" class="nav-link"><?=$category->name?></a></li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <!-- <li class="nav-item active"><a href="#" class="nav-link">POST CARD</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">PHOTO FRAMES SIZES</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">MUGS</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">MOBILE POUCH</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">T SHIRT+ PRINTING</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">ALBUM DESIGNING + PRINTING</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">ALBUMS</a></li> -->
                                        <?php
                                            foreach ($categories as $category) {
                                        ?>
                                            <li class="nav-item"><a href="<?=Url::to(['site/category', 'id' => $category->id])?>" class="nav-link"><?=$category->name?></a></li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu End -->
        </header>

        <?=$content?>

        <div class="footer-bottom black-bg ptb-15 navbar-fixed-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright text-white">
                                <p>Copyright <i class="fa fa-copyright"></i> 2019 <a href="#" target="_blank">BookMyPhoto.</a> All rights reserved. </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-img">
                               <ul class="footer-social-icon">
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="single-product-image">
                                    <div id="product-img-content">
                                        <div id="my-tab-content" class="tab-content mb-20">
                                            <div class="tab-pane b-img active" id="view1">
                                                <a class="venobox" href="<?= Url::to('@web/manali/assets/images/product6.png')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view2">
                                                <a class="venobox" href="<?= Url::to('@web/manali/assets/images/product6.png')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view3">
                                                <a class="venobox" href="<?= Url::to('@web/manali/assets/images/product6.png')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view4">
                                                <a class="venobox" href="<?= Url::to('@web/manali/assets/images/product6.png')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                            <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view2" data-toggle="tab"><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view3" data-toggle="tab"><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view4" data-toggle="tab"><img src="<?= Url::to('@web/manali/assets/images/product6.png')?>" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-content">
                                    <div class="product-content text-uppercase">
                                        <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                        
                                        <div class="product-price pb-20">
                                            <span class="new-price">₹ 185.00</span>
                                            <span class="old-price">₹ 200.00</span>
                                        </div>
                                    </div>
                                    <div class="product-view pb-20">
                                        <h4 class="product-details-tilte text-uppercase">overview</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                    </div>
                                    <div class="product-size text-uppercase pb-30">
                                        <h4 class="product-details-tilte text-uppercase pb-10">size</h4>
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-attributes clearfix">
                                        <div class="product-color text-uppercase pb-30">
                                            <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                            <ul>
                                                <li class="color-1"><a href="#"></a></li>
                                                <li class="color-2"><a href="#"></a></li>
                                                <li class="color-3"><a href="#"></a></li>
                                                <li class="color-4"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                        <div class="pull-left" id="quantity-wanted">
                                            <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                            <input type="number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-action-shop text-center mb-30">
                                        <a href="#" title="Quick view">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a href="#" title="Add to cart">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                       
                                    </div>
                                   
                                </div>
                                <!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->
    </div>
    <!-- Body main wrapper end -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
