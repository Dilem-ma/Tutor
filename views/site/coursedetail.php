<?php

/* @var $this yii\web\View */

$this->title = 'CoursedetailPage';
\app\assets\CoursedetailAsset::register($this);
?>
<div class="scTop">
    <span class="title">课程详情</span>
    <a href="search.html"><img src="/img/android-arrow-back.png" class="back"/></a>
</div>
<div class="pane1">
    <div class="pane1-1">
        <div class="pane1-1-1">
            <img align="absmiddle" src="/img/portrait.png" class="pic_icon" height="100" width="100"/>
        </div>
        <div class="pane1-1-2">
            <div class="pane1-1-2-1">
                <span class="name">寻找Java老师</br></br></span>
            </div>
            <div class="pane1-1-2-1">
                <span class="tel">高二 女 普陀区</span>
            </div>
        </div>
    </div>
    <div class="pane1-2">
        <div class="title1">
            <span class="student">标签</span>
        </div>

        <div class="pane1-2-1">java</div>
        <div class="pane1-2-1">java</div>
        <div class="pane1-2-1">java</div>
        <div class="pane1-2-1">java</div>
    </div>
    <div class="pane1-3">
        <div class="pane1-3-1">
            <span class="student">学员情况描述</br></span>
            <span class="green" style="word-break:break-all">*************************************************************************************************************</br></br></span>
        </div>
    </div>
    <div class="pane1-4">
        <button class="but1">申请订单</button>
        <button class="but2">收藏</button>
    </div>
</div>
