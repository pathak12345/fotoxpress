<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //echo Html::a('Add Product Size', ['product-size/create', 'product_id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add Product Attribute', ['product-attribute/create', 'product_id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?php //echo Html::a('View Product Sizes', ['product-size/index-single', 'product_id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('View Product Attributes', ['product-attribute/index-single', 'product_id' => $model->id], ['class' => 'btn btn-info']) ?>
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
            'id',
            [
                'attribute' => 'category_id',
                'value' => isset($model->category->name) ? $model->category->name : NULL,
            ],
            /*[
                'attribute' => 'product_size',
                'value' => $model->getProductSizesText()
            ],*/
            'name',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
