<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/material-dashboard.css',
    ];
    public $js = [
        'js/core/popper.min.js',
        'js/core/bootstrap-material-design.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        'js/plugins/moment.min.js',
        'js/plugins/sweetalert2.js',
        'js/plugins/jquery.validate.min.js',
        'js/plugins/jquery.bootstrap-wizard.js',
        'js/plugins/bootstrap-selectpicker.js',
        'js/plugins/bootstrap-datetimepicker.min.js',
        'js/plugins/jquery.dataTables.min.js',
        'js/plugins/bootstrap-tagsinput.js',
        'js/plugins/jasny-bootstrap.min.js',
        'js/plugins/fullcalendar.min.js',
        'js/plugins/jquery-jvectormap.js',
        'js/plugins/nouislider.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js',
        'js/plugins/arrive.min.js',
        'js/plugins/chartist.min.js',
        'js/plugins/bootstrap-notify.js',
        'js/material-dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
