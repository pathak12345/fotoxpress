<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductAttribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-attribute-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <h4><?="Product Name: ".$productModel->name?></h4>

    <?= $form->field($model, 'product_id')->hiddenInput(['value' => $productModel->id])->label(false) ?>

    <?= $form->field($model, 'attribute_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attribute_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purchase_cost')->textInput() ?>

    <?= $form->field($model, 'selling_price')->textInput() ?>

    <?= $form->field($model, 'max_height')->textInput() ?>

    <?= $form->field($model, 'max_width')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
