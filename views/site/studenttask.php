<?php

/* @var $this yii\web\View */

$this->title = 'StudentTaskPage';
\app\assets\StudentTaskAsset::register($this);
?>
<form ng-controller="StutaskCtrl">
    <div class="scTop">
        <span class="title">学生任务发布</span>
        <a href="index"><img src="/img/back.png" class="back"/></a>
        <button class="login_btn" type="submit" ng-click="postTask(technique, area, title, description, price, teachTime, isUrgent, gender)">提交</button>
    </div>
    <div class="content">
            <div class="sec">
                <div class="message">
                        <div class="name"><span>标题</span></div>
                        <div class="ctnt"><input placeholder="请输入标题(5-20字)" ng-model="title"></div>
                </div>
                <div class="message">
                        <div class="name"><span>科目</span></div>
                        <div class="ctnt">
                            <select ng-model="technique" pattern="[0-9]{1}">
                                <option value = "1">编程语言</option>
                                <option value = "2">数据库</option>
                                <option value = "3">web技术</option>
                                <option value = "4">计算机概念</option>
                                <option value = "5">环境配置</option>
                                <option value = "6">app开发</option>
                                <option value = "7">服务器脚本</option>
                                <option value = "8">运维技术</option>
                                <option value = "9">其他</option>

                            </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>问题描述</span></div>
                        <div class="ctnt"><input rows ="1" placeholder="请在此详细地描述问题详情" ng-model="description"/></div>
                </div>


            </div>
            <div class="sec">
                <div class="message">
                        <div class="name"><span>地区</span></div>
                        <div class="ctnt" placeholder="区县" pattern="[0-9]{1-2}">
                            <select ng-model="area">
                                <option value ="1">黄浦区</option>
                                <option value ="2">徐汇区</option>
                                <option value ="3">长宁区</option>
                                <option value ="4">静安区</option>
                                <option value ="5">普陀区</option>
                                <option value ="6">虹口区</option>
                                <option value ="7">杨浦区</option>
                                <option value ="8">浦东新区</option>
                                <option value ="9">闵行区</option>
                                <option value ="10">宝山区</option>
                                <option value ="11">嘉定区</option>
                                <option value ="12">金山区</option>
                                <option value ="13">松江区</option>
                                <option value ="14">青浦区</option>
                                <option value ="15">奉贤区</option>
                                <option value ="16">崇明区</option>
                            </select>
                        </div>
                </div>
                <div class="message">
                    <div class="name"><span>地址</span></div>
                    <div class="ctnt">
                        <input placeholder="5-60个字，且不能全部为数字"/>
                    </div>
                </div>
                <div class="message">
                        <div class="name"><span>上课时间</span></div>
                        <div class="ctnt"><input placeholder="请输入你计划的上课时间" ng-model="teachTime"></div>
                </div>
            </div>

            <div class="sec">
                <div class="message">
                        <div class="name"><span>教员性别要求</span></div>
                        <div class="ctnt" placeholder="性别要求" pattern="[0-9]{1}">
                            <select ng-model="gender" selected="selected">
                                <option value ="1">男</option>
                                <option value ="2">女</option>
                                <option value ="3">不限</option>
                            </select>
                        </div>
                </div>
                <div class="message">
                        <div class="name"><span>赏金</span></div>
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
