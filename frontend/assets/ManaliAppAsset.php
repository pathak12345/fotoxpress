<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ManaliAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'manali/css/bootstrap.min.css',
        'manali/css/core.css',
        'manali/css/shortcode/shortcodes.css',
        'manali/css/style.css',
        'manali/css/responsive.css',
        'manali/css/custom.css',
    ];

    public $js = [
        //'manali/js/vendor/jquery-3.1.1.min.js',
        'manali/js/bootstrap.min.js',
        // 'manali/js/particles.js',
        'manali/js/plugins.js',
        'manali/js/main.js',
        'manali/js/cropzee.js',
        //'https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
