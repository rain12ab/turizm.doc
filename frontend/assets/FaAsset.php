<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FaAsset extends AssetBundle
{
    public $sourcePath = '@npm';
    public $css = [
        'font-awesome/css/all.min.css',
    ];

    public $js = [
        'font-awesome/js/all.min.js',
    ];
}
