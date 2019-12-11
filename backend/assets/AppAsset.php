<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    
    public $baseUrl = '@web';
    
    public $css = [
        'css/site.css',
        'bootstrap/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/iCheck/all.css',
        'plugins/colorpicker/bootstrap-colorpicker.min.css',
        'plugins/timepicker/bootstrap-timepicker.min.css',
        'plugins/select2/select2.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/floatingscroll.css',
        'css/sweetalert.css',
        //'css/editor.css',
        'css/summernote.css',
        'css/multiple-emails.css',
    ];
    
    public $js = [
        'plugins/jQuery/jquery-2.2.3.min.js',
        'bootstrap/js/bootstrap.min.js',
        'plugins/select2/select2.full.min.js',
        'plugins/input-mask/jquery.inputmask.js',
        'plugins/input-mask/jquery.inputmask.date.extensions.js',
        'plugins/input-mask/jquery.inputmask.extensions.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/colorpicker/bootstrap-colorpicker.min.js',
        'plugins/timepicker/bootstrap-timepicker.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/iCheck/icheck.min.js',
        'plugins/fastclick/fastclick.js',
        'dist/js/app.min.js',
        'dist/js/demo.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'js/floatingscroll.js',
        'js/sweetalert.min.js',
        //'js/editor.js',
        'js/summernote.js',
        'js/multiple-emails.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}