<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/21
 * Time: 下午11:31
 */

$this->title = 'comment';
\app\assets\CommentAsset::register($this);
?>
<div class="shortcut1">
    <div class="scTop">
        <span class="title">订单评论</span>
        <a href="orderlist" target="_self"><img src="/img/back.png" class="back"/></a>

    </div>
</div>
<div class="comment" ng-controller="CommentCtrl">
    <div class="star"><input ng-model="grade" type="text">/5分</div>
    <div class="content"><textarea rows="6" ng-model="commenttext" placeholder="请填写对此订单的评价"></textarea></div>
    <button class="btn" type="submit" ng-model="grade" ng-click="postComment(grade,commenttext)">评论</button>
</div>


