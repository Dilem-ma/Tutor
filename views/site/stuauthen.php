<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/19
 * Time: 下午9:09
 */
/* @var $this yii\web\View */

$this->title = 'stuauthen';
\app\assets\StuauthenAsset::register($this);
?>
<div class="shortcut">
    <div class="scTop">
        <span class="title">学生认证</span>
        <a href="authentication"><img src="/img/back.png" class="back"/></a>
    </div>
</div>
<div class="content" ng-controller="StuauthenCtrl"">
    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>学校</span></div>
                <div class="ctnt"><select ng-model="school">
                        <option value ="1">华东师范大学</option>
                        <option value ="2">同济大学</option>
                        <option value="3">上海交通大学</option>
                        <option value="4">复旦大学</option>
                    </select></div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>年级</span></div>
                <div class="ctnt"><select ng-model="grade">
                        <option value ="1">大一</option>
                        <option value ="2">大二</option>
                        <option value="3">大三</option>
                        <option value="4">大四</option>
                        <option value="4">研一</option>
                        <option value="4">研二</option>
                        <option value="4">研三</option>
                        <option value="4">博一</option>
                        <option value="4">博二</option>
                    </select></div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>姓名</span></div>
                <div class="ctnt"><input ng-model="name" type="text" placeholder="请输入本人姓名"></div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>卡号</span></div>
                <div class="ctnt"><input ng-model="education" type="text" placeholder="请输入校园卡卡号"></div>
            </div>
        </div>
    </div>
    <a ng-click="onAuthen(name,school,grade,education)" >
        <button class="submit" type="submit">认证</button>
    </a>
</div>
