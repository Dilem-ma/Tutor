<?php

/* @var $this yii\web\View */

$this->title = 'MainPage';
\app\assets\MainAsset::register($this);
?>
<div class="index2" ng-controller="MainCtrl" ng-cloak class="ng-cloak">
    <div class="shortcut1">
    <div class="thehead">
        <div class="text">
            <img align="absmiddle" src="/img/android-location.png"  height="20" width="15"/>
            <span class="title"></span>
        </div>
        <div class="texth2">
            <h2 class="title">tutor</h2>
        </div>
        <div class="texth3">
            <a href="search" ><img align="absmiddle" src="/img/search.png"  height="20" width="20"/></a>
        </div>
    </div>
    </div>
    <div class="content">

    <div class="pane2">
        <div class="groupPane">
            <a class="smallpane" ng-click="doJump('数据库')">
                <img class="circle"src=../img/1.png>
                <div class="title">数据库</div>
            </a>
            <a class="smallpane" ng-click="doJump('编程语言')">
                <img class="circle"src=../img/2.png>
                <div class="title">编程语言</div>
            </a>
            <a class="smallpane" ng-click="doJump('app开发')">
                <img class="circle"src=../img/3.png>
                <div class="title">app开发</div>
            </a>
            <a class="smallpane" ng-click="doJump('web技术')">
                <img class="circle"src=../img/4.png>
                <div class="title">web技术</div>
            </a>
        </div>
        <div class="groupPane">
            <a class="smallpane" ng-click="doJump('服务器脚本')">
                <img class="circle"src=../img/5.png>
                <div class="title">服务器脚本</div>
            </a>
            <a class="smallpane" ng-click="doJump('环境配置')">
                <img class="circle"src=../img/6.png>
                <div class="title">环境配置</div>
            </a>
            <a class="smallpane" ng-click="doJump('计算机概念')">
                <img class="circle"src=../img/7.png>
                <div class="title">计算机概念</div>
            </a>
            <a class="smallpane" ng-click="doJump('不限')">
                <img class="circle"src=../img/8.png>
                <div class="title">查看所有</div>
            </a>
        </div>
    </div>
    <div class="pane3">
        <div class="pane3-1">
            <span class="title3">优质教师推荐</span>
        </div>
        <a href="talk">
        <div ng-repeat="a in teachers">
                <div class="pane3-2">
                    <img class="circle2" ng-src="{{a.url}}"/>
                    <a class="title4">{{a.name}}</a>
                </div>
        </div>
        </a>

    </div>
    <div class="pane4">
        <div class="pane4text">
            <a href="teachersearch"><a class="title5" href = "teachersearch">老师专区</a></a></br>
        </div>
    </div>

    </div>
    <!--<SCRIPT LANGUAGE="JavaScript">-->
    <!--function changeSrc(obj) {-->
    <!--obj.src = "img/ios7-compose-outline.png"; //改变图像地址-->
    <!--}-->
    <!--function changeSrc2(obj) {-->
    <!--obj.src = "img/ios7-compose.png"; //改变图像地址-->
    <!--}-->
    <!--</script>-->

    <div id="NotMoveDIV">
        <div class="icon-box">
            <a href="" class="botm-icon-text"><img src="/img/ios7-home.png" class="botm-icon"/><br />主页</a>
        </div>
        <div class="icon-box">
            <a href="/site/search" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br />课程</a>
        </div>
        <div class="icon-box2">
            <a href="/site/studenttask"><img src="/img/plus2.png" class="botm-icon2"/></a>
        </div>
        <div class="icon-box">
            <a href="/site/orderlist" class="botm-icon-text"><img src="/img/ios7-bell-outline.png" class="botm-icon"/><br />订单</a>
        </div>
        <div class="icon-box">
            <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br />我的</a>
        </div>
    </div>
</div>
