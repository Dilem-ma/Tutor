<?php

/* @var $this yii\web\View */

$this->title = 'CoursedetailPage';
\app\assets\CoursedetailAsset::register($this);
?>
<?php

/* @var $this yii\web\View */

$this->title = 'StudentTaskPage';
\app\assets\StudentTaskAsset::register($this);
?>
<form ng-controller="OrderCtrl">
    <div class="scTop">
        <span class="title">课程详情</span>
        <a href="index"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <div class="sec">
            <div class="message">
                <div class="name"><span>标题</span></div>
                <div class="ctnt">{{title}}</div>
            </div>
            <div class="message">
                <div class="name"><span>科目</span></div>
                <div class="ctnt">
                    <div ng-model="technique">
                       {{technique}}
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="name"><span>问题描述</span></div>
                <div class="ctnt">{{description}}</div>
            </div>


        </div>
        <div class="sec">
            <div class="message">
                <div class="name"><span>地区</span></div>
                <div class="ctnt">
                    {{area}}
                </div>
            </div>
            <div class="message">
                <div class="name"><span>地址</span></div>
                <div class="ctnt">
                    {{}}
                </div>
            </div>
            <div class="message">
                <div class="name"><span>上课时间</span></div>
                <div class="ctnt">{{time}}</div>
            </div>
        </div>

        <div class="sec">
            <div class="message">
                <div class="name"><span>教员性别要求</span></div>
                <div class="ctnt">
                    {{gender}}
                </div>
            </div>
            <div class="message">
                <div class="name"><span>赏金</span></div>
                <div class="ctnt">{{price}}</div>
            </div>
        </div>
    </div>
</form>

    <div class="pane1-4">
        <button class="but1">申请订单</button>
        <button class="but2">收藏</button>
    </div>
</div>
