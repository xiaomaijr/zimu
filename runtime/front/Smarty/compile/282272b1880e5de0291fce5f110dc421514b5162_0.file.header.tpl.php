<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-30 19:04:45
  from "E:\app.xiaomaijr.com\front\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_5815d3cd33c771_76507733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282272b1880e5de0291fce5f110dc421514b5162' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\header.tpl',
      1 => 1477790663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5815d3cd33c771_76507733 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="/epay/recharge" target="_blank">充值</a>
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
        <a href="javascript:;"><img src="/image/public/logo.png"></a>
        <div class="searchbox">
            <div class="searchinput">
                <input type="text" name="" id="search_query" value="">
                <b>充值卡</b>
                <b>点券</b>
            </div>
            <span class="search-btn"></span>
        </div>
    </div>
    <div class="nav">
        <div class="center">
            <?php if (!empty($_SESSION['CATEGORYS'])) {?>
            <div class="allclick">
                <span>全部商品分类</span>
                <div class="allshopposition">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['CATEGORYS'], 'cate');
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
$__foreach_cate_0_saved = $_smarty_tpl->tpl_vars['cate'];
?>
                    <a href="/mall/product?category_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</a>
                    <?php
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </div>
            </div>
            <?php }?>
            <div class="nav_link">
                <a href="/" <?php if ($_SESSION['CURURL'] == '/') {?>class="on"<?php }?>>首页</a>
                <a href="/mall/product" <?php if ($_SESSION['CURURL'] == '/mall/product') {?>class="on"<?php }?>>全部商品</a>
                <a href="/mall/disclose" <?php if ($_SESSION['CURURL'] == '/mall/disclose') {?>class="on"<?php }?>>最新揭晓</a>
                <a href="/member/display-order-list" <?php if ($_SESSION['CURURL'] == '/member/display-order-list') {?>class="on"<?php }?>>晒单分享</a>
            </div>
            <div class="shopcar" onclick="window.location.href='/shop-cart/list'">购物车</div>
        </div>
    </div>
</div>
<!--header end--><?php }
}
