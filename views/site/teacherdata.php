<?php

/* @var $this yii\web\View */

$this->title = 'TeacherdataPage';
\app\assets\TeacherdataAsset::register($this);
?>
<div class="scTop" >
    <span class="title">教师资料</span>
    <a href="teachersearch" target="_self"><img src="/img/back.png" class="back"/></a>
</div >
<div class="pane2" ng-controller="TeacherdataCtrl">
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
                    <span class="text4">专业</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_major}}</span>
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
                    <span class="text4">星级</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_star}}星</span>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">个人描述</span>
                </div>
                <div class="text5">
                    <span class="text4">{{current_describe}}</span>
                </div>
            </div>
        </div>
        <div class="pane2-1">
            <a ng-click="postTask(current_id)">
                <div class="pane2-2">
                    <div class="pane2-3">
                        <div class="text3">
                            <span class="text4">收藏老师</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
