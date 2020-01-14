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
                                    <a class="venobox" href="#" data-gall="gallery" title=""><img src="<?= 'https://localhost/projects/fotoxpress/backend/web/uploads/product_images/' . $productModel->media->file_name ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-details-content">
                        <div class="product-content text-uppercase">
                            <a title="Product Name" href="product-details.html"><?=$productModel->name?></a>
                            <!-- <div class="rating-icon pb-30 mt-10">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div> -->
                            <div class="product-price pb-30">
                                <span class="new-price">₹ <?=$productModel->selling_price?></span>
                                <!-- <span class="old-price">₹ 200.00</span> -->
                            </div>
                        </div>
                        <!-- <div class="product-view pb-30">
                            <h4 class="product-details-tilte text-uppercase">overview</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                        </div> -->
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
                            <div class="img-edit">
                                   
                                <label for="uploadform-imagefile" class="image-previewer" data-cropzee="uploadform-imagefile"></label>
                                <?= $form->field($uploadModel, 'imageFile')->fileInput() ?>
                                
                            </div>
                            <div class="form-group">
                                <?= Html::submitButton('Proceed', ['class' => 'btn btn-success proceed-btn']) ?>
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
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Delivery Information</a></li>
                                <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Care Instructions</a></li>
                            </ul>                             
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <p><?=$productModel->description?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <p><?=$productModel->delivery_information?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tag">
                                <p><?=$productModel->care_instruction?></p>
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

        .img-edit{
            max-height: 300px;
        }
    ");

    $this->registerJs("
        $(document).ready(function(){
            $('#uploadform-imagefile').cropzee();

            $('.proceed-btn').on('click', function(e){
                e.preventDefault();
                alert(adiyogi);
                console.log(adiyogi);
            });
        });
    ");

?>