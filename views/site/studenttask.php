<?php

/* @var $this yii\web\View */

$this->title = 'StudentTaskPage';
\app\assets\StudentTaskAsset::register($this);
?>
<div class="scTop">
    <span class="title">学生任务发布</span>
    <a href="login.html"><img src="/img/back.png" class="back"/></a>
</div>
<div class="content">
    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>选择科目</span></div>
                <div class="ctnt">
                    <select>
                        <option value ="male">网络授课</option>
                        <option value ="female">线下授课</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message2">
            <div class="lastborder">
                <div class="name"><span></span></div>
                <div class="ctnt"><textarea type=" text"  placeholder="如选择线下授课，请在此写明授课地址" style="word-break:break-all"></textarea></div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>*上课时间</span></div>
                <div class="ctnt"><input type="text" placeholder="请输入你计划的上课时间"></div>
            </div>
        </div>

    </div>
    <div class="form">
        <div class="message">
            <div class="border">
                <div class="name"><span>*标签分类</span></div>
                <div class="ctnt" >
                    <select>
                        <option value ="male">考试</option>
                        <option value ="female">技术</option>
                        <option value ="female">科目</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>*求教科目</span></div>
                <div class="ctnt" placeholder="请输入你的求教科目">
                    <select>
                        <option value ="male">Java</option>
                        <option value ="female">C++</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="message2">
            <div class="lastborder">
                <div class="name"><span>*情况描述</span></div>
                <div class="ctnt"><textarea type=" text"  placeholder="请在此详细地描述你当前的情况和你的需求，这将更利于帮你满足需求" style="word-break:break-all"></textarea></div>
            </div>
        </div>
        <div class="message">
            <div class="border">
                <div class="name"><span>*是否加急</span></div>
                <div class="ctnt" >
                    <select>
                        <option value ="male">是</option>
                        <option value ="female">否</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="message2">
            <div class="lastborder">
                <div class="name"><span>教员要求</span></div>
                <div class="ctnt"><textarea type="text" placeholder="请在此详细地描述你对教员的需求，这将更利于匹配教员"></textarea></div>
            </div>
        </div>
        <div class="message">
            <div class="lastborder">
                <div class="name"><span>收费要求</span></div>
                <div class="ctnt"><input type="text" placeholder="请输入你的收费要求"></div>
            </div>
        </div>
        <div class="message2">
            <div class="lastborder">
                <div class="name"><span>备注</span></div>
                <div class="ctnt"><textarea type="text" placeholder="请输入备注"></textarea></div>
            </div>
        </div>
    </div>

</div>
<a href="course.html">
    <div class="bottom">
        提交
    </div>
</a>