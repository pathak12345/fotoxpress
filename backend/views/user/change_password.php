<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\models\User;

$this->title = 'Change Password';
$this->params['breadcrumbs'][] = ['label' => 'Edit profile', 'url' => ['user/edit-profile']];
$this->params['breadcrumbs'][] = $this->title;

?>

<h2><?= Html::encode($this->title) ?></h2>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="row">
	
		<div class="col-md-8">
			<?= $form->field($model, 'old_password')->passwordInput() ?>
		</div>
	</div>
	
	<div class="row">
	
		<div class="col-md-8">
			<?= $form->field($model, 'new_password')->passwordInput() ?>
		</div>
	</div>
	
	<div class="row">
	
		<div class="col-md-8">
			<?= $form->field($model, 'confirm_password')->passwordInput() ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<?= Html::submitButton('Save', ['class' =>'btn btn-success']) ?>
			</div>
		</div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
