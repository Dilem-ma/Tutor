<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/19
 * Time: 下午9:09
 */
/* @var $this yii\web\View */

$this->title = 'talk';
\app\assets\StuauthenAsset::register($this);
?>
<div class="shortcut">
    <div class="scTop">
        <span class="title">学生认证</span>
        <a href="login.html"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <div class="form">
            <div class="message">
                <div class="border">
                    <div class="name"><span>学校</span></div>
                    <div class="ctnt"><select>
                            <option value ="volvo">Volvo</option>
                            <option value ="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select></div>
                </div>
            </div>

            <div class="message">
                <div class="border">
                    <div class="name"><span>姓名</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入本人姓名"></div>
                </div>
            </div>
            <div class="message">
                <div class="lastborder">
                    <div class="name"><span>卡号</span></div>
                    <div class="ctnt"><input type="text" placeholder="请输入校园卡卡号"></div>
                </div>
            </div>
        </div>
        <button class="submit" type="submit">认证</button>
    </div>
</div>