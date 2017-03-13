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
        <span class="title">zzxqq</span>
        <a href=""><img src="/img/back.png" class="back"/></a>
    </div>

    <div class="content">
        <div class="receive-content">
            <div class="portrait"><a class="sender"><img src="/img/portrait.png" ></a></div>
            <div class="arrow"></div>
            <div class="talk">
                <p>这儿，我们可以得到一个黑色的正方形，其实这是边框组成的，因为div的宽度和高度都是0,。那么，我们具体来看看，div宽度和高度都是0时，它的上下左右四边框都是怎样的，下面我们把边框的各边颜色分别设置为不同颜色：</p>
            </div>
        </div>
        <div class="send-content">
            <div class="send">
                <p>可以通过css来实现一个三角形充当气泡的尾巴，将容器的宽度以及高度设置为0，然后给盒容器设置一个较粗的边框，浏览器会在边框的交界处绘制结合线</p>
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
