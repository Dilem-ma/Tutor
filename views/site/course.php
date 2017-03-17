<?php

/* @var $this yii\web\View */

$this->title = 'CoursePage';
\app\assets\CourseAsset::register($this);
?>
<div class="thehead">
    <div class="text1">
        <img align="absmiddle" src="/img/android-location.png"  height="20" width="15"/>
        <span class="title">地区</span>
    </div>
    <div class="message">
        <form class="search">
            <input type="text" placeholder="请输入搜索内容">
        </form>
    </div>
</div>
<div class="pane4">
    <div class="pane4text">
        <a class="title5">教员库</a></br>
        <a class="title6">寻找合适的老师【</a>
    </div>
    <div class="pane4circle">
        <div class="circle3">
        </div>
    </div>
</div>
<div class="pane5">
    <div class="pane4circle2">
        <div class="circle3">
        </div>
    </div>
    <div class="pane4text2">
        <a class="title5">学员库</a></br>
        <a class="title6">寻找合适的学生【</a>
    </div>

</div>
<div id="NotMoveDIV">
    <div class="icon-box">
        <a href="index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br />主页</a>
    </div>
    <div class="icon-box">
        <a href="" class="botm-icon-text"><img src="/img/ios7-compose.png" class="botm-icon"/><br />课程</a>
    </div>
    <div class="icon-box">
        <a href="message" class="botm-icon-text"><img src="/img/ios7-bell-outline.png" class="botm-icon"/><br />消息</a>
    </div>
    <div class="icon-box">
        <a href="mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br />我的</a>
    </div>
</div>
