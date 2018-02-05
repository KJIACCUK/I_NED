<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/pe-icon-7-stroke.min.css',
        'css/jquery-ui.min.css',
        'css/img-zoom/jquery.simpleLens.css',
        'css/meanmenu.min.css',
        'lib/css/nivo-slider.css',
        'lib/css/preview.css',
        'css/owl.carousel.css',
        'css/font-awesome.min.css',
        'style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/vendor/jquery-1.12.0.min.js',
        'js/bootstrap.min.js',
        'js/parallax.min.js',
        'js/owl.carousel.min.js',
        'js/img-zoom/jquery.simpleLens.min.js',
        'js/jquery.meanmenu.js',
        'js/jquery.countdown.min.js',
        'lib/js/jquery.nivo.slider.js',
        'lib/home.js',
        'js/jquery-ui.min.js',
        'js/sticky.js',
        'js/plugins.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
