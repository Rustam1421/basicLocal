<?php

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot/indexAsset';
    public $baseUrl = '@web/indexAsset';
    public $css = [
        "bootstrap.min.css",
        "font-awesome.min.css",
        "prettyPhoto.css",
        "owl.carousel.min.css",
        "icomoon.css",
        "main.css",
        "responsive.css",
        "animate.min.css",
    ];

    public $js = [
        'jquery.js',
        'bootstrap.min.js',
        'jquery.prettyPhoto.js',
        'owl.carousel.min.js',
        'jquery.isotope.min.js',
        'main.js',
    ];

//    public $depends = [
//        JqueryAsset::class
//    ];
}