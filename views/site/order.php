<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/21
 * Time: 下午11:31
 */

$this->title = 'order';
\app\assets\OrderAsset::register($this);
?>


<div class="shortcut1">
    <div class="scTop">
        <span class="title">订单详情</span>
        <a href="orderlist" target="_self"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="onSelect()" ng-show="onSure">申请教学</button>
    </div>
</div>

<div class="content" ng-controller="OrderCtrl">
    <div class="order">
        <div class="message">
            <div class="border">
                <div class="name"><span>订单状态</span></div>
                <div class="ctnt">{{status}}</div>
            </div>
        </div>

        <div class="message">
            <div class="border">
                <div class="name"><span>预约时间</span></div>
                <div class="ctnt">{{time}}</div>
            </div>

        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>授课教师</span></div>
                <div class="ctnt"><a>{{teacher}}</a></div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>授课内容</span></div>
                <div class="ctnt">{{description}}</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>上课区域</span></div>
                <div class="ctnt">{{area}}</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>上课地址</span></div>
                <div class="ctnt">{{address}}</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>价格</span></div>
                <div class="ctnt">{{price}}</div>
            </div>
        </div>


        <div class="teachers" ng-show=isPreparing>
            <div class="title">申请教师列表</div>
            <div class="border teacher"  ng-repeat="teacher in teacherList">
                <div class="wrap">
                    <img class="avatar" ng-src="{{teacher.url}}">
                    <div class="intro"><span>{{teacher.name}}</span><span>{{teacher.describe}}</span></div>
                </div>
                <div class="button" ng-click="onSelect(teacher.t_id)">选择</div>
            </div>
        </div>
    </div>
</div>


