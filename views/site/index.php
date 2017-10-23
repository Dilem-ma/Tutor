<?php

/* @var $this yii\web\View */

$this->title = 'MainPage';
\app\assets\MainAsset::register($this);
?>
<div class="index2" ng-controller="MainCtrl">
    <div class="shortcut1">
    <div class="thehead">
        <div class="text">
            <img align="absmiddle" src="/img/android-location.png"  height="20" width="15"/>
            <span class="title">地区</span>
        </div>
        <div class="texth2">
            <h2 class="title">tutor</h2>
        </div>
        <div class="texth2">
            <img align="absmiddle" src="/img/2345_image_file_copy_1.jpg"  height="20" width="20"/>
        </div>
    </div>
    </div>
    <div class="content">

    <div class="pane2">
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引2</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>
        <div class="smallpane">
            <div class="circle">
            </div>
            <div class="text2">
                <a class="title">索引1</a>
            </div>
        </div>

    </div>
    <div class="pane3">
        <div class="pane3-1">
            <span class="title3">优质教师推荐</span>
        </div>
        <div ng-repeat="a in teachers">
            <div class="pane3-2">
                <img class="circle2" ng-src="{{a.url}}"/>
                <a class="title4">{{a.name}}</a>
            </div>
        </div>

    </div>
    <div class="pane4">
        <div class="pane4text">
            <a class="title5">我要悬赏</a></br>
            <a class="title6">寻找合适的老师【</a>
        </div>
        <div class="pane4circle">
            <div class="circle3">
            </div>
        </div>
    </div>
    <div class="pane4">
        <div class="pane4circle2">
            <div class="circle3">
            </div>
        </div>
        <div class="pane4text2">
            <a class="title5">我要接单</a></br>
            <a class="title6">寻找合适的学生【</a>
        </div>

    </div>
    <div class="pane5">
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
            <a href="/site/course" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br />课程</a>
        </div>
        <div class="icon-box">
            <a href="/site/message" class="botm-icon-text"><img src="/img/ios7-bell-outline.png" class="botm-icon"/><br />消息</a>

        </div>
        <div class="icon-box">
            <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br />我的</a>

        </div>
    </div>
</div>
