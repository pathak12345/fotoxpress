<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProductAttribute */

//$this->title = $model->id;
$this->title = $model->product->name . "($model->attribute_name: $model->attribute_value)";
$this->params['breadcrumbs'][] = ['label' => 'Product Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-attribute-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('View Product', ['product/view', 'id' => $model->product_id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Product Attributes', ['product-attribute/index-single', 'product_id' => $model->product_id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'product_id',
            [
                'attribute' => 'product_name',
                'value' => $model->product->name,
            ],
            'attribute_name',
            'attribute_value',
            'purchase_cost',
            'selling_price',
            'max_height',
            'max_width',
            'stock_quantity',
            [
                'attribute' => 'product_image',
                'label' => 'Product Image',
                'format' => ['image', ['height' => '100px']],
                'value' => $model->media_id ?  Url::to('@web/uploads/product_images/' . $model->media->file_name) : null,
            ],
        ],
    ]) ?>

</div>
