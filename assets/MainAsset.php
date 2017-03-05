<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/2
 * Time: 9:40
 */

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/common.css',
        'css/index2.css'
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}