<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/19
 * Time: 下午9:19
 */

namespace app\assets;
use yii\web\AssetBundle;


class TeacherauthenAsset extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/stuauthen.css',
        'css/common.css'
    ];
    public $js = [
        'js/controllers/TeacherauthenCtrl.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}