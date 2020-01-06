<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- Start Wishlist Area -->
    <div class="login-section section-padding">
        <div class="container">
            <div class="row">
               
                  <div class="col-md-8 col-md-offset-3">
                    <div class="registered-customers">
                        <div class="section-title text-uppercase mb-40">
                            <h4>NEW CUSTOMERS</h4>
                        </div>
                        <div class="login-account p-30 box-shadow">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Wishlist Area -->
</section>
<!-- End page content -->