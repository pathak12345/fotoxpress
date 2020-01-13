<?php
use yii\helpers\Url;
?>

<div class="container">
	<div class="page-content">
		<h4><?=$categoryModel->name?></h4>

		<div class="row">
			<?php
				foreach ($categoryProducts as $key => $product) {
			?>
					<div class="col-md-3">
		               	<div class="single-product mb-40">
		                  	<div class="product-img-content mb-20">
			                    <div class="product-img">
			                        <a href="product-details.php">
			                        <img src="<?= 'https://localhost/projects/fotoxpress/backend/web/uploads/product_images/' . $product->media->file_name ?>" alt="">
			                        </a>
			                     </div>
			                    <div class="product-action text-center">
			                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
			                        <i class="zmdi zmdi-eye"></i>
			                        </a>
			                        <a href="<?=Url::to(['site/product-detail', 'id' => $product->id])?>" title="Add to cart">
			                        <i class="zmdi zmdi-shopping-cart"></i>
			                        </a>
			                    </div>
			                </div>
			                <div class="product-content text-center text-uppercase">
			                    <a href="product-details.php" title="T-shirt"><?=$product->name?></a>
			                    <div class="product-price">
			                    	<span class="new-price">₹ <?=$product->selling_price?></span>
			                    </div>
			                </div>
		               	</div>
		            </div>
			<?php
				}
			?>
        </div>
	</div>
</div>

<?php

	$this->registerCss("

		.page-content{
			padding: 20px;
			margin: 20px;
		}

	");

?>