<?php

use yii\helpers\Url;
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
            'category_id',
            //'media_id',
            [
                'attribute' => 'media_id',
                'label' => 'Product Image',
                'format' => ['image', ['height' => '100px']],
                'value' => $model->media_id ?  Url::to('@web/uploads/product_images/' . $model->media->file_name) : null,
            ],
            'name',
            'description:ntext',
            'stock_quantity',
            'purchase_cost',
            'selling_price',
            'max_height',
            'max_width',
            'delivery_information:ntext',
            'care_instruction:ntext',
            [
                'attribute' => 'created_by',
                'value' => $model->createdBy->name,
            ],
            [
                'attribute' => 'updated_by',
                'value' => $model->updatedBy->name,
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
