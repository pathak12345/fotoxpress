<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

$this->title = "Mail Setting";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-form">

    <h1><?= Html::encode($this->title) ?></h1>

    <h5>Please note that the Email Id and password you provide here will be used to send mail from this account.</h5>
    
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	 <div class="row">
		<div class="col-md-4">
				<?= $form->field($model, 'app_password')->passwordInput(['maxlength' => true, 'value' => '']) ?>
			</div>
		</div>
	</div>

    <div class="form-group">
    	<div class="row">
    		<div class="col-md-6 pull-left">
        		<?= Html::submitButton('Submit', ['class' => 'btn btn-success create-btn']) ?>
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