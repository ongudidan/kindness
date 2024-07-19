<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "dist/css/bootstrap.css",
        "dist/css/style.css",
        "dist/css/revolution-slider.css",
        "dist/css/responsive.css"
    ];
    public $js = [
        "dist/js/jquery.js",
        "dist/js/bootstrap.min.js",
        "dist/js/jquery.countTo.js",
        "dist/js/isotope.js",
        "dist/js/jquery.appear.js",
        "dist/js/html5lightbox/html5lightbox.js",
        "dist/js/owl.js",
        "dist/js/validate.js",
        "dist/js/wow.js",
        "dist/js/revolution.min.js",
        "dist/js/jquery.countdown.js",

        "dist/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
