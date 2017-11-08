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

<form ng-controller="OrderCtrl" ng-cloak class="ng-cloak">
    <div class="shortcut1">
        <div class="scTop">
            <span class="title">订单详情</span>
            <a href="orderlist" target="_self"><img src="/img/back.png" class="back"/></a>
            <button class="login_btn" type="submit" ng-click="onComplete()" ng-show="onSure">完成订单</button>
            <button class="login_btn" type="submit" ng-click="onComment()" ng-show="onFinish">评论订单</button>

        </div>
    </div>

    <div class="content">
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
            <div class="message">
                <div class="border">
                    <div class="name"><span>评论</span></div>
                    <div class="ctnt">{{content}}</div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>评价星级</span></div>
                    <div class="ctnt">{{star}}</div>
                </div>
            </div>

            <div class="teachers" ng-show=isPreparing>
                <div class="teachers">
                    <div class="title">申请教师列表</div>
                    <div class="border teacher"  ng-repeat="teacher in teacherList">
                        <div class="wrap">
                            <img class="avatar" ng-src="{{teacher.url}}">
                            <div class="intro"><span>{{teacher.name}}</span><span>{{teacher.describe}}</span></div>
                            <button class="button" type="submit"  ng-click="onSelect(teacher.id)">选择</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>



