<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/2
 * Time: 9:40
 */

namespace app\assets;

use yii\web\AssetBundle;

class TaskAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/common.css',
        'css/task.css',
        'datepicker/bootstrap/css/bootstrap.css',
        'css/jquery.toastmessage.css'
    ];
    public $js = [
        'js/controllers/TaskCtrl.js',
        'js/jquery.toastmessage.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\AngularAsset'
    ];
}