<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//use.fontawesome.com/releases/v5.0.13/css/all.css',
        // '//fonts.googleapis.com/css?family=Raleway:400,600,700',
        'theme/vendor.css',
        'theme/main.css',
    ];
    public $js = [
        'theme/vendor.js',
        'theme/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
