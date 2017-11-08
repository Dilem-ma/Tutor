<?php

/* @var $this yii\web\View */

$this->title = 'StudentTaskPage';
\app\assets\StudentTaskAsset::register($this);
?>
<form ng-controller="StutaskCtrl">
    <div class="scTop">
        <span class="title">学生任务发布</span>
        <a href="index"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="postTask(technique, area, title, description, price, teachTime, gender, address)">提交</button>
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>标题</span></div>
                        <div class="ctnt"><input placeholder="请输入标题(5-20字)" ng-model="title" required pattern=".{5,20}"></div>
                </div>
                <div class="message">
                        <div class="name"><span>科目</span></div>
                        <div class="ctnt">
                            <select ng-init="technique = techs[0]" ng-model="technique" ng-options="x for x in techs">  </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>问题描述</span></div>
                        <div class="ctnt"><input rows ="1" placeholder="请在此详细地描述问题详情" ng-model="description" required/></div>
                </div>


            </div>
            <div class="sec">
                <div class="message">
                        <div class="name"><span>地区</span></div>
                        <div class="ctnt" placeholder="区县" pattern="[0-9]{1-2}">
                            <select ng-model="area" ng-init="area = areas[0]" ng-options="x for x in areas"> </select>
                        </div>
                </div>
                <div class="message">
                    <div class="name"><span>地址</span></div>
                    <div class="ctnt">
                        <input placeholder="5-60个字，且不能全部为数字" ng-model="address" required pattern=".{5,60}"/>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>上课时间</span></div>
                        <div class="ctnt"><input placeholder="请输入你计划的上课时间" ng-model="teachTime" required></div>
                </div>
            </div>

            <div class="sec">
                <div class="message">
                        <div class="name"><span>教员性别要求</span></div>
                        <div class="ctnt" placeholder="性别要求" pattern="[0-9]{1}">
                            <select ng-model="gender" ng-init="gender = genders[0]" ng-options="x for x in genders">
                            </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>赏金</span></div>
                        <div class="ctnt"><input placeholder="请输入预付费用（元）" ng-model="price" required pattern="\+?(?!0+(\.00?)?$)\d+(\.\d\d?)?"></div>
                </div>
<!--                <div class="message">-->
<!--                    <div class = "name">我很赶时间</div>-->
<!--                    <input type = "checkbox" ng-model="isUrgent"/>-->
<!--                    <div class="des">将支付1.5倍赏金</div>-->
<!--                </div>-->
            </div>
    </div>
</form>
