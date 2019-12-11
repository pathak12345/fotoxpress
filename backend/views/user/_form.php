<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-md-6"> 
			
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

    <div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-md-6">
			<?= $form->field($model, 'password_hash')->textInput(['type' => 'password']) ?>
		</div>
	</div>

    <div class="row">	
		<div class="col-md-6">
			<?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-md-6">
			<?= $form->field($model, 'role')->dropDownList(User::$backend_roles,['prompt'=>'Select role']) ?>
		</div>
	</div>

    <div class="form-group">
    	<div class="row">
	    	<div class="col-md-12" align="right">
        		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success create-btn' : 'btn btn-primary create-btn']) ?>
	    	</div>
    	</div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
	$this->registerCss("
		.create-btn{
			margin-right: 18px;
		}
	");
?>