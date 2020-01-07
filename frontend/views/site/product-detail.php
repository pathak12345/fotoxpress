<?php
// product detail
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!-- Start page content -->
<section id="page-content" class="page-wrapper pb-90">
    <!-- Start Shop Full Grid View -->
    <div class="product-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="single-product-image">
                        <div id="product-img-content">
                            <div id="my-tab-content" class="tab-content mb-30">
                                <div class="tab-pane b-img active" id="view1">

                                    <a class="venobox" href="<?= Url::to('@web/manali/images/product/product-details/1.jpg')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/images/product/product-details/1.jpg')?>" alt=""></a>
                                </div>
                                <div class="tab-pane b-img" id="view2">
                                    <a class="venobox" href="<?= Url::to('@web/manali/images/product/product-details/2.jpg')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/images/product/product-details/2.jpg')?>" alt=""></a>
                                </div>
                                <div class="tab-pane b-img" id="view3">
                                    <a class="venobox" href="<?= Url::to('@web/manali/images/product/product-details/3.jpg')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/images/product/product-details/3.jpg')?>" alt=""></a>
                                </div>
                                <div class="tab-pane b-img" id="view4">
                                    <a class="venobox" href="<?= Url::to('@web/manali/images/product/product-details/4.jpg')?>" data-gall="gallery" title=""><img src="<?= Url::to('@web/manali/images/product/product-details/4.jpg')?>" alt=""></a>
                                </div>
                            </div>
                            <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="<?= Url::to('@web/manali/images/product/product-details/s-1.jpg')?>" alt=""></a></div>
                                <div class="pro-view b-img"><a href="#view2" data-toggle="tab"><img src="<?= Url::to('@web/manali/images/product/product-details/s-2.jpg')?>" alt=""></a></div>
                                <div class="pro-view b-img"><a href="#view3" data-toggle="tab"><img src="<?= Url::to('@web/manali/images/product/product-details/s-3.jpg')?>" alt=""></a></div>
                                <div class="pro-view b-img"><a href="#view4" data-toggle="tab"><img src="<?= Url::to('@web/manali/images/product/product-details/s-4.jpg')?>" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-details-content">
                        <div class="product-content text-uppercase">
                            <a title="Product Name" href="product-details.html">Product Name</a>
                            <div class="rating-icon pb-30 mt-10">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                            <div class="product-price pb-30">
                                <span class="new-price">₹ 185.00</span>
                                <span class="old-price">₹ 200.00</span>
                            </div>
                        </div>
                        <div class="product-view pb-30">
                            <h4 class="product-details-tilte text-uppercase">overview</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                        </div>
                        <div class="product-size text-uppercase pb-40">
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
                            <div class="product-color text-uppercase pb-40">
                                <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                <ul>
                                    <li class="color-1"><a href="#"></a></li>
                                    <li class="color-2"><a href="#"></a></li>
                                    <li class="color-3"><a href="#"></a></li>
                                    <li class="color-4"><a href="#"></a></li>
                                </ul>
                            </div> 
                            <div id="quantity-wanted" class="pull-left">
                                <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                <input type="number" class="cart-plus-minus-box" value="1">    
                            </div>                                  
                        </div>
                        <div class="image-input">
                            <?php $form = ActiveForm::begin([
    'method' => 'post',
    'action' => ['site/edit-image'],
]); ?>
                                <?= $form->field($uploadModel, 'imageFile')->fileInput() ?>
                                <div class="form-group">
                                    <?= Html::submitButton('Proceed', ['class' => 'btn btn-success']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-details-content pt-90">
                        <div class="p-details-tab">
                            <ul class="nav nav-tabs text-uppercase mb-20" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Product Tags</a></li>
                            </ul>                             
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to and    what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus to a maiores maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims.</p>
                                <p>maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">
                                            <td>Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Styles</td>
                                            <td>Casual</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Properties</td>
                                            <td>Short Sleeve</td>
                                        </tr>
                                    </tbody>
                               </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tag">
                                <div id="product-comments-block-tab">
                                    <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                </div>
                            </div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Shop Full Grid View -->
</section>

<?php

    $this->registerCss("
        .image-input{
            margin: 20px 0;
        }
    ");

?>