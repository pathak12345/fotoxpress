<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="login-box">
      <div class="login-logo">
        
        
        <a class='text-white' href="<?=Url::to(['site/login'])?>"><b class="company-name">Foto</b>Xpress</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
          <div class="form-group has-feedback">
            
            <?= $form->field($model, 'username')->textInput(['class'=>'form-control','placeholder'=>'Username','autofocus' => true])->label(false); ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control','placeholder'=>'Password'])->label(false); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
            <div class="checkbox icheck">
                <label>
                  <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </label>
            </div>
          
           <?= Html::submitButton('Sign In', ['class' => 'btn btn-danger btn-block btn-flat', 'name' => 'login-button']) ?>
           
           <!-- <a href="<?=Url::to(['/site/forgot-password'])?>">Forgot Password</a> -->
          
        <?php ActiveForm::end(); ?>

        

      </div>
      <!-- /.login-box-body -->
    </div>

<?php
$this->registerCss("
    html, .wrap{
        background-color: #F5B7B1;
    }
    .text-white{
      //color: #fff !important;
    }
");
?>