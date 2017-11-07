<?php

/* @var $this yii\web\View */

$this->title = 'TaskPage';
\app\assets\TaskAsset::register($this);
?>
<form ng-controller="TaskCtrl">
    <div class="scTop">
        <span class="title">学生任务详情</span>
        <a href="search" target="_self"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="postRequirement()" ng-hide="!isTeacher">申请教学</button>
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>标题</span></div>
                        <div class="ctnt"><span>{{title}}</span></div>
                </div>
                <div class="message">
                        <div class="name"><span>科目</span></div>
                        <div class="ctnt">
                            <span>{{technique}}</span>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>问题描述</span></div>
                        <div class="ctnt"><span>{{description}}</span></div>
                </div>


            </div>
            <div class="sec">
                <div class="message">
                        <div class="name"><span>地区</span></div>
                        <div class="ctnt">
                            <span>{{area}}</span>
                        </div>
                </div>
                <div class="message">
                    <div class="name"><span>地址</span></div>
                    <div class="ctnt">
                        <span>{{address}}</span>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>上课时间</span></div>
                        <div class="ctnt"><span>{{time}}</span></div>
                </div>
            </div>

            <div class="sec">
                <div class="message">
                        <div class="name"><span>教员性别要求</span></div>
                        <div class="ctnt">
                            <span>{{gender}}</span>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>价格</span></div>
                        <div class="ctnt"><span>{{price}}</span></div>
                </div>
            </div>
    </div>
</form>
