<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/11
 * Time: 上午11:08
 */
/* @var $this yii\web\View */

$this->title = 'talk';
\app\assets\TalkAsset::register($this);
?>


<div class="shortcut1">
    <div class="scTop">
        <span class="title">朱远青</span>
        <a href="/site/message"><img src="/img/back.png" class="back"/></a>
    </div>

    <div class="content">
        <div class="receive-content">
            <div class="portrait"><a class="sender"><img src="/img/portrait2.png" ></a></div>
            <div class="arrow"></div>
            <div class="talk">
                 <p>同学，请问你有什么需要帮助的吗？</p>
            </div>
        </div>
        <div class="send-content">
            <div class="send">
                <p>老师，能不能便宜一点？</p>
            </div>
        </div>
        <div class="receive-content">
            <div class="portrait"><a class="sender"><img src="/img/portrait2.png" ></a></div>
            <div class="arrow"></div>
            <div class="talk">
                <p>没有，快滚</p>
            </div>
        </div>

    </div>

    <div id="send">
        <div class="message">
            <div class="icon"><b><image src="/img/plus.png" class="plus"></image></b></div>

            <input type="text" placeholder="请输入消息">

        </div>
        <div class="btn-box"><button class="submit" type="submit">发送</button>
        </div>
    </div>

</div>
