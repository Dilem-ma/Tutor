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
        <a href="orderlist"><img src="/img/back.png" class="back"/></a>
    </div>
</div>

<div class="content">
    <div class="order">
        <div class="message">
            <div class="border">
                <div class="name"><span>订单状态</span></div>
                <div class="ctnt">待确认</div>
            </div>
        </div>

        <div class="message" ng-if="time">
            <div class="border">
                <div class="name"><span>预约时间</span></div>
                <div class="ctnt">2017.3.20 15:30</div>
            </div>

        </div>
        <div class="message" ng-if="teacher">
            <div class="border">
                <div class="name"><span>授课教师</span></div>
                <div class="ctnt"><a>待确定</a></div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>授课内容</span></div>
                <div class="ctnt">C++环境配置</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>上课地址</span></div>
                <div class="ctnt">华东师范大学第五宿舍110</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>赏金</span></div>
                <div class="ctnt">100元</div>
            </div>
        </div>
        <div class="teachers">
            <div class="title">申请教师列表</div>
            <div class="border teacher">
                <div class="wrap">
                    <div class="avaster"></div>
                    <div class="intro"><span>崔宇璇</span><span>擅长c++</span></div>
                </div>
                <div class="button">选择</div>
            </div>
            <div class="border teacher">
                <div class="wrap">
                    <div class="avaster"></div>
                    <div class="intro"><span>孙静翎 </span><span>c++大神</span></div>
                </div>
                <div class="button">选择</div>
            </div>
            <div class="border teacher">
                <div class="wrap">
                    <div class="avaster"></div>
                    <div class="intro"><span>张嫣婧 </span><span></span></div>
                </div>
                <div class="button">选择</div>
            </div>
        </div>
    </div>
</div>


