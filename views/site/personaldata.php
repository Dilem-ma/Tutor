<?php

/* @var $this yii\web\View */

$this->title = 'PersonaldataPage';
\app\assets\PersonaldataAsset::register($this);
?>
<div class="scTop" >
    <span class="title">个人资料</span>
    <a href="mine"><img src="/img/back.png" class="back"/></a>
</div >
<div class="pane2" ng-controller="MineCtrl">
    <div class="pane2-1">
        <div class="pane2-4">
            <div class="pane2-5">
                <div class="text6">
                    <span class="text4">头像</span>
                </div>
                <div class="image1">
                    <img align="absmiddle" src="{{current_url}}" class="pic_icon" height="70" width="70"/>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">昵称</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_name}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">性别</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_gender}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">手机号</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_num}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">地区</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_area}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">生日</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_birthday}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">擅长领域</span>
                </div>
                <div class="text5">
                    <span class="text4">Java，c++</span>
                </div>
            </div>
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">修改密码</span>
                </div>
            </div>
        </div>
    </div>
</div>
