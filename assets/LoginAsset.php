<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/5
 * Time: 14:17
 */

namespace app\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/common.css',
        'css/login.css',
        'css/index2.css',
        'css/register.css',
        'css/shortcut.css'
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}