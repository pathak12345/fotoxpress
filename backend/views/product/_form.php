<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
$categoryArray = ArrayHelper::map($categories, 'id', 'name');
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryArray); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_image')->fileInput() ?>

    <?= $form->field($model, 'max_height')->textInput() ?>

    <?= $form->field($model, 'max_width')->textInput() ?>

    <?= $form->field($model, 'purchase_cost')->textInput() ?>

    <?= $form->field($model, 'selling_price')->textInput() ?>
    
    <?= $form->field($model, 'stock_quantity')->textInput() ?>

    <?= $form->field($model, 'delivery_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'care_instruction')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
