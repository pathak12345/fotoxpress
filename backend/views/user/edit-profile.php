<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

$this->title = "Edit Profile";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-form">

    <h1><?= Html::encode($this->title) ?></h1>
    
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
			<?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

    <div class="form-group">
    	<div class="row">
    		<div class="col-md-6 pull-left">
        		<?= Html::submitButton('Update Profile', ['class' => 'btn btn-success create-btn']) ?>
	    	</div>
	    	<div class="col-md-3 pull-left" >
        		<?= Html::a('Change Password ?', ['user/change-password'], ['class' => 'create-btn']) ?>
	    	</div>
	    	<div class="col-md-3 pull-right" align="right">
        		<?= Html::a('Mail Setting', ['user/mail-setting'], ['class' => 'create-btn']) ?>
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