<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/19
 * Time: 下午9:18
 */

/* @var $this yii\web\View */

$this->title = 'teacher_authentication';
\app\assets\TeacherauthenAsset::register($this);
?>
<div class="shortcut">
    <div class="scTop">
        <span class="title">教师认证</span>
        <a href="authentication"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <div class="form">
            <div class="message">
                <div class="border">
                    <div class="name"><span>姓名</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入本人姓名"></div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>性别</span></div>
                    <div class="ctnt">
                        <select>
                            <option value ="male">男</option>
                            <option value ="female">女</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="message">
                <div class="lastborder">
                    <div class="name"><span>出生年月</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入本人姓名"></div>
                </div>
            </div>
        </div>

        <div class="form">
            <div class="message">
                <div class="border">
                    <div class="name"><span>学历</span></div>
                    <div class="ctnt"><select>
                            <option value ="male">高中及以下</option>
                            <option value ="female">本科</option>
                            <option value ="female">硕士</option>
                            <option value ="female">博士</option>
                        </select></div>
                </div>
            </div>

            <div class="message">
                <div class="border">
                    <div class="name"><span>专业</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入专业"></div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>有关证件</span></div>
                    <div class="ctnt">
                        <span>点击上传图片（需要上传学生证、身份证、能力证书）</span>
                    </div>
                </div>
            </div>

            <div class="message">
                <div class="lastborder">
                    <div class="name"><span>自我简介</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入自我简介"></div>
                </div>
            </div>
        </div>
        <button class="submit" type="submit">认证</button>
    </div>
</div>