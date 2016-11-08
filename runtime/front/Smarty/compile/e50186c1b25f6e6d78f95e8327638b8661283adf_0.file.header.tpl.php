<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-08 14:11:25
  from "E:\app.xiaomaijr.com\front\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f88e0dae8511_35834500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e50186c1b25f6e6d78f95e8327638b8661283adf' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\header.tpl',
      1 => 1475743774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f88e0dae8511_35834500 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--header-->
<div class="header">
    <div class="toptip">
        <span>一元购子苜商城唯一官方网址(www.zimu666.cn),请按Ctrl+D收藏我们网址.</span>
        <a href="javacript:void(0)"></a>
    </div>
    <div class="top_help">
        <div class="center">
            <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=2&uin=919292777" target="_blank" class="qqserver">在线客服</a>
            <a href="javascript:void(0)">充值</a>
            <span>
                    <a href="javascript:void(0)">个人中心</a>
                    <div class="zimume">
                        <a href="/user-center/order-list">购买记录</a>
                        <a href="/user-center/indianaed-list">中奖记录</a>
                        <a href="/user-center/display-order-list">晒单纪录</a>
                        <a href="/user-center/address-list">地址管理</a>
                    </div>
            </span>
            <?php if (!empty($_SESSION['USER_ID'])) {?>
            <a href="/user-passport/login-out">退出</a>
            <?php } else { ?>
            <a href="/user-passport/login-view">登陆</a>
            <?php }?>
        </div>
    </div>
    <div class="logosearch">
        <a href="/"><img src="/image/public/logo.png"></a>
        <div class="searchbox">
            <div class="searchinput">
                <input type="text" name="" id="">
                <b>充值卡</b>
                <b>点券</b>
            </div>
            <span></span>
        </div>
    </div>
    <div class="nav">
        <div class="center">
            <div class="allclick">
                <span>全部商品分类</span>
                <div class="allshopposition">
                    <a href="javascript:void(0)">商品1</a>
                    <a href="javascript:void(0)">商品3</a>
                    <a href="javascript:void(0)">商品2</a>
                </div>
            </div>
            <div class="nav_link">
                <a href="/">首页</a>
                <a href="/mall/product">全部商品</a>
                <a href="/mall/disclose">最新揭晓</a>
                <a href="/member/display-order-list">晒单分享</a>
            </div>
            <div class="shopcar" onclick="window.location.href='/shop-cart/list'">购物车</div>
        </div>
    </div>
</div>
<!--header end--><?php }
}
