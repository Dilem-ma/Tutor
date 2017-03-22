<?php

/* @var $this yii\web\View */

$this->title = 'WalletPage';
\app\assets\WalletAsset::register($this);
?>
<div class="scTop">
    <span class="title">我的钱包</span>
    <a href="mine"><img src="/img/back.png" class="back"/></a>
</div>
<div class="pane1">
    <a href="" class="pane1-1">
        余额</br>
        <span class="text1">10.00元</span>
    </a>
    <a href="" class="pane1-1">
        提现
    </a>
    <a href="" class="pane1-1">
        银行卡
    </a>
</div>
<div class="pane2">
    <div class="pane2-1">
        <div class="pane2-1-1">
            充值成功</br>
            <span class="text1">2017/3/21 10:13</span>
        </div>
        <div class="pane2-1-2">
            10.00元
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-1-1">
            提现成功</br>
            <span class="text1">2017/3/20 10:00</span>
        </div>
        <div class="pane2-1-2">
            -100.00元
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-1-1">
            课程赏金</br>
            <span class="text1">2017/3/20 08:00</span>
        </div>
        <div class="pane2-1-2">
            100.00元
        </div>
    </div>
</div>
<div class="pane3">
    <a href="">
        <div class="pane3-1">
            充值
        </div>
    </a>

</div>
