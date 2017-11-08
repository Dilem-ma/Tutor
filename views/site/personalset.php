<?php

/* @var $this yii\web\View */

$this->title = 'PersonalsetPage';
\app\assets\PersonalsetAsset::register($this);
?>
<div class="scTop"  >
    <span class="title">个人资料</span>
    <a href="mine"><img src="/img/back.png" class="back"/></a>
</div >
<div class="pane2" ng-controller="PersonalsetCtrl" ng-cloak class="ng-cloak">
    <div class="pane2-1">
        <div class="pane2-4">
            <div class="pane2-5">
                <div class="text6">
                    <span class="text4">头像</span>
                </div>
                <div class="image1">
                    <img align="absmiddle" src="{{current_url}}" class="pic_icon" height="70" width="70"/>
                </div>
            </div>
        </div>
    </div>

    <div class="pane2-1">
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">昵称</span>
                </div>
                <div class="text5">
                    <input class="text4" ng-model="name" placeholder="{{current_name}}"></input>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">性别</span>
                </div>
                <div class="text5">
                        <select ng-model="gender">
                            <option value ="male">男</option>
                            <option value ="female">女</option>
                        </select>
                </div>
            </div>
        </div>

    </div>
    <div class="pane2-1">
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">手机号</span>
                </div>
                <div class="text5">
                    <input class="text4" ng-model="num" placeholder="{{current_num}}"></input>
                </div>
            </div>
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">地区</span>
                </div>
                <div class="text5">
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
        </div>
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">生日</span>
                </div>
                <div class="text5">
                    <input class="text4" ng-model="birthday" placeholder="{{current_birthday}}"></input>
                </div>
            </div>
        </div>
        <div class="pane2-2" >
            <div class="pane2-3" >
                <div class="text3">
                    <span class="text4">擅长领域</span>
                </div>
                <div class="text5">
                    <input class="text4" ng-model="text" placeholder="java,c++"></input>
                </div>
            </div>
        </div>
        <div class="pane2-2" >
            <div class="pane2-3" >
                <div class="text3">
                    <span class="text4">个人描述</span>
                </div>
                <div class="text5">
                    <input class="text4" ng-model="text" placeholder="java,c++"></input>
                </div>
            </div>
        </div>
    </div>
    <div class="pane2-1">
        <a ng-click="postTask(name,gender,area,birthday)">
        <div class="pane2-2">
            <div class="pane2-3">
                <div class="text3">
                    <span class="text4">确认修改</span>
                </div>
            </div>
        </div>
        </a>
    </div>

</div>
