<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

use common\models\User;

AppAsset::register($this);
$this->title = "BookMyPhoto"
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<?php $this->beginBody() ?>

 
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=Url::to(['site/index'])?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FX</b></span>
      <!-- <span class="logo-mini logo-mini-custom"><img height="45px" src="<?=Url::base().'/images/red_carpet_logo.png'?>"></span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BookMyPhoto</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=Yii::$app->user->isGuest ? 'Guest User' : 'Admin'?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=Yii::$app->user->isGuest ? 'Guest User' : 'Admin'?>
                  <small>Member since Nov. 2019</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=Url::to(['user/edit-profile'])?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

                  <?=Html::beginForm(['/site/logout'], 'post')?>

                  <?=Html::submitButton('<i class="fa fa-power-off"></i> Sign out', ['class' => 'btn btn-default btn-flat'])?>
                  
                  <?=Html::endForm()?>

                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> Avinash</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">Ecommerce <a href="<?=Url::to(['site/index'])?>"></li> -->
        <li >
            <a href="<?=Url::to(['site/index'])?>">
            <i class="fa fa-home"></i> <span>HOME</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        <li>
            <a href="<?=Url::to(['user/index'])?>">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        <li>
             <a href="<?=Url::to(['category/index'])?>">
            <i class="fa fa-tag"></i> <span>Category</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>

        </li> 
        <li>
            <a href="<?=Url::to(['product/index'])?>">
            <i class="fa fa-tags"></i> <span>Product</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        <!-- <li>
            <a href="<?=Url::to(['product-size/index'])?>">
            <i class="fa fa-dashboard"></i> <span>Product Size</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Photo print
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-info">     
        <div class="box-body">
          <?= $content ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2019 <a href="#">AKP Learning Solution Pvt. Ltd.</a>.</strong> All rights
    reserved.
  </footer>
  <?php $this->endBody() ?>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });

    //
    $(".timepicker").timepicker({
      showInputs: false
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    $('.sidebar-toggle').off('click').on('click', function(e){
        if($('body').hasClass('sidebar-collapse'))
        {
          $('.logo-div').show('fast');
        }else{
          $('.logo-div').hide('fast');
        }
    })

  });
</script>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>