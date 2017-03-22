<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/22
 * Time: 下午11:00
 */
/* @var $this yii\web\View */
$this->title = 'intro';
\app\assets\IntroAsset::register($this);
?>
<div class="shortcut1">
    <div class="scTop">
        <div class="back"><a><img src="/img/back.png" class="back"/></a></div>
        <div class="portrait"><img src="/img/portrait2.png" ></div>
        <div class="intro">
        <h1>朱远青</h1>
        <p1>超喜欢学习，被很厉害的大学录取了</p1>
        </div>
    </div>
</div>
<div class="content">
    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>昵称</span></div>
                <div class="ctnt">小青青</div>
            </div>
        </div>

        <div class="message">
            <div class="border">
                <div class="name"><span>性别</span></div>
                <div class="ctnt">男</div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>擅长</span></div>
                <div class="ctnt">C++、Java、PHP</div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>认证信息</span></div>
                <div class="ctnt">未认证</div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>认证信息</span></div>
                <div class="ctnt">已通过教师认证</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>学历</span></div>
                <div class="ctnt">本科</div>
            </div>
        </div><div class="message">
            <div class="border">
                <div class="name"><span>专业</span></div>
                <div class="ctnt">软件工程</div>
            </div>
        </div><div class="message">
            <div class="border">
                <div class="name"><span>所在高校</span></div>
                <div class="ctnt">华东师范大学</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>地区</span></div>
                <div class="ctnt">上海 普陀</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>所获证书</span></div>
                <div class="ctnt">无</div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>自我描述</span></div>
                <div class="ctnt">有多年编程经验，技能过硬</div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>认证信息</span></div>
                <div class="ctnt">已通过学生认证</div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>学校</span></div>
                <div class="ctnt">华东师范大学</div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>地区</span></div>
                <div class="ctnt">上海普陀</div>
            </div>
        </div>
    </div>
</div>
<div id="NotMoveDIV">
    <button class="btn-left">收藏</button>
    <button class="btn-right">发消息</button>
</div>