<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/13
 * Time: 下午9:34
 */

namespace app\assets;

use yii\web\AssetBundle;

class AuthenticationAsset extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/authentication.css',
        'css/common.css'
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}