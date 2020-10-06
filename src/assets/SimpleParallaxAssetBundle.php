<?php

namespace icesign\simpleparallax\assets;

use yii\web\AssetBundle;

class SimpleParallaxAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/icesign/yii2-simpleparallax/src/assets/web';

    public $js = [
        'js/simpleParallax.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
//        'yii\web\JqueryAsset'
    ];
}