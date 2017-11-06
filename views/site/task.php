<?php

/* @var $this yii\web\View */

$this->title = 'TaskPage';
\app\assets\TaskAsset::register($this);
?>
<form ng-controller="StutaskCtrl">
    <div class="scTop">
        <span class="title">学生任务详情</span>
        <a href="index"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="">申请教学</button>
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>标题</span></div>
                        <div class="ctnt"><span>我是标题</span></div>
                </div>
                <div class="message">
                        <div class="name"><span>科目</span></div>
                        <div class="ctnt">
                            <span>app开发</span>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>问题描述</span></div>
                        <div class="ctnt"><span>我是问题描述</span></div>
                </div>


            </div>
            <div class="sec">
                <div class="message">
                        <div class="name"><span>地区</span></div>
                        <div class="ctnt">
                            <span>普陀区</span>
                        </div>
                </div>
                <div class="message">
                    <div class="name"><span>地址</span></div>
                    <div class="ctnt">
                        <span>我是地址</span>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>上课时间</span></div>
                        <div class="ctnt"><span>全天</span></div>
                </div>
            </div>

            <div class="sec">
                <div class="message">
                        <div class="name"><span>教员性别要求</span></div>
                        <div class="ctnt">
                            <span>女</span>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>赏金</span></div>
                        <div class="ctnt"><span>100元</span></div>
                </div>
                <div class="message">
                    <div class = "name">我很赶时间</div>
                    <input type = "checkbox" ng-model="isUrgent"/>
                    <div class="des">将支付1.5倍赏金</div>
                </div>
            </div>
    </div>
</form>
