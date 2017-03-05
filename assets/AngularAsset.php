<?php

/**
 * Created by PhpStorm.
 * User: easonyan
 * Date: 2/21/2017
 * Time: 3:19 PM
 */

namespace app\assets;

use yii\web\AssetBundle;

class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular';
    public $js = [
        'angular.js',
    ];
}