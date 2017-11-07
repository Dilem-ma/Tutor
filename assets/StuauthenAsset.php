<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/19
 * Time: 下午9:09
 */

namespace app\assets;
use yii\web\AssetBundle;


class StuauthenAsset extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/stuauthen.css',
        'css/common.css'
    ];
    public $js = [
        'js/controllers/StuauthenCtrl.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}