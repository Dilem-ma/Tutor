<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/21
 * Time: 下午10:09
 */

namespace app\assets;
use yii\web\AssetBundle;


class CommentAsset extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/comment.css',
        'css/common.css'
    ];
    public $js = [
        'js/controllers/CommentCtrl.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}