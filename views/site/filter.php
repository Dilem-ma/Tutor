<?php

/* @var $this yii\web\View */

$this->title = 'FilterPage';
\app\assets\FilterAsset::register($this);
?>
<div class="scTop">
    <span class="title">筛选订单</span>
    <a href="search"><img src="/img/android-arrow-back.png" class="back"/></a>
</div>
<div class="content">
    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>技术</span></div>
                <div class="ctnt">
                    <select>
                        <option value ="female">不限</option>
                        <option value ="male">编程语言</option>
                        <option value ="female">数据库</option>
                        <option value ="female">web技术</option>
                        <option value ="female">计算机概念</option>
                        <option value ="female">环境配置</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>性别</span></div>
                <div class="ctnt">
                    <select>
                        <option value ="unlimited">不限</option>
                        <option value ="male">男</option>
                        <option value ="female">女</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>地区</span></div>
                <div class="ctnt">
                    <select>
                        <option value ="0">不限</option>
                        <option value ="1"> 黄浦区</option>
                        <option value ="2">虹口区</option>
                        <option value ="3">杨浦区</option>
                        <option value ="4">闸北区</option>
                        <option value ="5">普陀区</option>
                        <option value ="6">静安区</option>
                        <option value ="7">徐汇区</option>
                        <option value ="8">浦东新区</option>
                        <option value ="9">闵行区</option>
                        <option value ="10">奉贤区</option>
                        <option value ="11">金山区</option>
                        <option value ="12">松江区</option>
                        <option value ="13">青浦区</option>
                        <option value ="14">嘉定区</option>
                        <option value ="15">宝山区</option>
                        <option value ="16">长宁区</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>价格</span></div>
                <div class="ctnt">
                    <select>
                        <option value ="0">不限</option>
                        <option value ="0">50/h-100/h</option>
                        <option value ="1">100/h-150/h</option>
                        <option value ="2">150/h-200/h</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>关键词</span></div>
                <div class="ctnt"><input type="text" ></div>
            </div>
        </div>
    </div>
</div>
<a href="search">
    <div class="bottom">
        进行筛选
    </div>
</a>
