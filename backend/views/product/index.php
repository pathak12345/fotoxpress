<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'category_id',
                'value' => function($model){
                    return isset($model->category->name) ? $model->category->name : NULL;
                },
                'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Category'])
            ],
            //'media_id',
            'name',
            //'description:ntext',
            'stock_quantity',
            'purchase_cost',
            'selling_price',
            'max_height',
            'max_width',
            // 'delivery_information:ntext',
            // 'care_instruction:ntext',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
