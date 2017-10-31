<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/22
 * Time: 上午12:54
 */

namespace app\assets;
use yii\web\AssetBundle;


class FavoriteAssete extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/favorite.css',
        'css/common.css'
    ];
    public $js = [
        'js/controllers/FavoriteCtrl.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}