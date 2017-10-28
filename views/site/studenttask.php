<?php

/* @var $this yii\web\View */

$this->title = 'StudentTaskPage';
\app\assets\StudentTaskAsset::register($this);
?>
<form ng-controller="StutaskCtrl">
    <div class="scTop">
        <span class="title">学生任务发布</span>
        <a href="login.html"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="postTask(technique, area, title, description, price, teachTime, isUrgent, gender)">提交</button>
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>*标题</span></div>
                        <div class="ctnt"><input placeholder="请输入标题" ng-model="title"></div>
                </div>
                <div class="message">
                        <div class="name"><span>*科目</span></div>
                        <div class="ctnt">
                            <select ng-model="technique" placeholder="--请选择科目--">
                                <option value ="编程语言">编程语言</option>
                                <option value ="数据库">数据库</option>
                                <option value ="web技术">web技术</option>
                                <option value ="计算机概念">计算机概念</option>
                                <option value ="环境配置">环境配置</option>
                                <option value ="app开发">app开发</option>
                                <option value ="服务器脚本">服务器脚本</option>
                                <option value ="运维技术">运维技术</option>
                            </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>*问题描述</span></div>
                        <div class="ctnt"><input rows ="1" placeholder="请在此详细地描述问题详情" ng-model="description"/></div>
                </div>


            </div>
            <div class="sec">
                <div class="message">
                        <div class="name"><span>*地区</span></div>
                        <div class="ctnt" placeholder="区县">
                            <select ng-model="area">
                                <option value ="0">--请选择区县--</option>
                                <option value ="1">黄浦区</option>
                                <option value ="2">徐汇区</option>
                                <option value ="3">长宁区</option>
                                <option value ="4">静安区</option>
                                <option value ="5">普陀区</option>
                            </select>
                        </div>
                </div>
                <div class="message">
                    <div class="name"><span>*地址</span></div>
                    <div class="ctnt">
                        <input placeholder="5-60个字，且不能全部为数字"/>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>*上课时间</span></div>
                        <div class="ctnt"><input placeholder="请输入你计划的上课时间" ng-model="teachTime"></div>
                </div>
            </div>

            <div class="sec">
                <div class="message">
                        <div class="name"><span>教员性别要求</span></div>
                        <div class="ctnt" placeholder="性别要求">
                            <select ng-model="gender">
                                <option value ="0">--请选择性别要求--</option>
                                <option value ="1">无</option>
                                <option value ="2">女</option>
                                <option value ="3">男</option>
                            </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>*赏金</span></div>
                        <div class="ctnt"><input placeholder="请输入预付费用（元）" ng-model="price"></div>
                </div>
                <div class="message">
                    <div class = "name">我很赶时间</div>
                    <input type = "checkbox" ng-model="isUrgent"/>
                    <div class="des">将支付1.5倍赏金</div>
                </div>
            </div>
    </div>
</form>
