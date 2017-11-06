<?php

/* @var $this yii\web\View */

$this->title = 'TaskPage';
\app\assets\TaskAsset::register($this);
?>
<form ng-controller="StutaskCtrl">
    <div class="scTop">
        <span class="title">学生任务详情</span>
        <a href="index"><img src="/img/back.png" class="back"/></a>
<!--        <button class="login_btn" type="submit" ng-click="">申请教学</button>-->
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>标题</span></div>
                        <div class="ctnt"><span>kubernetes中service的配置</span></div>
                </div>
                <div class="message">
                        <div class="name"><span>科目</span></div>
                        <div class="ctnt">
                            <span>环境配置</span>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>问题描述</span></div>
                        <div class="ctnt"><span>最近在使用kubernetes做web运行环境的优化，将web中各模块分别部署到不同的docker中以后，怎么利用service进行端口的配置？</span></div>
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
                        <span>华东师范大学理科楼二楼</span>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>上课时间</span></div>
                        <div class="ctnt"><span>2017-12-03 17：00：00</span></div>
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
            </div>
    </div>
</form>
