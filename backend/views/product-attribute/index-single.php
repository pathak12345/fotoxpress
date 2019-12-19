<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Product;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductAttributeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Attributes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-attribute-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Attribute', ['create', 'product_id' => $product_id], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'product_id',
            [
                'attribute' => 'product_id',
                'value' => function($model){
                    return isset($model->product->name) ? $model->product->name : NULL;
                },
                'filter' => Html::activeDropDownList($searchModel, 'product_id', ArrayHelper::map(Product::find()->where(['id' => $product_id])->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Product', 'value' => $product_id])
            ],
            'attribute_name',
            'attribute_value',
            'purchase_cost',
            'selling_price',
            'max_height',
            'max_width',
            'stock_quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
