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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "dist/otika/css/app.min.css",
        "dist/otika/css/style.css",
        "dist/otika/css/components.css",
        "dist/otika/css/custom.css",
       "dist/otika/css/app.min.css",
       "dist/otika/bundles/bootstrap-daterangepicker/daterangepicker.css",
       "dist/otika/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css",
       "dist/otika/bundles/select2/dist/css/select2.min.css",
       "dist/otika/bundles/jquery-selectric/selectric.css",
       "dist/otika/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css",
       "dist/otika/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
       "dist/otika/css/style.css",
       "dist/otika/css/components.css",
       "dist/otika/css/custom.css",
    ];
    public $js = [
        "dist/otika/js/app.min.js",
        // "js/bootstrap.min.js",
        "dist/otika/js/scripts.js",
        "dist/otika/js/custom.js",
        "dist/otika/js/app.min.js",
        "dist/otika/bundles/cleave-js/dist/cleave.min.js",
        "dist/otika/bundles/cleave-js/dist/addons/cleave-phone.us.js",
        "dist/otika/bundles/jquery-pwstrength/jquery.pwstrength.min.js",
        "dist/otika/bundles/bootstrap-daterangepicker/daterangepicker.js",
        "dist/otika/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js",
        "dist/otika/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js",
        "dist/otika/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js",
        "dist/otika/bundles/select2/dist/js/select2.full.min.js",
        "dist/otika/bundles/jquery-selectric/jquery.selectric.min.js",
        "dist/otika/js/page/forms-advanced-forms.js",
        "dist/otika/js/scripts.js",
        "dist/otika/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
