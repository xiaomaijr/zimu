<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:55:45
  from "/home/work/www/zimu/front/views/user-center/user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f44719299a3_22065991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81322633233af37c40c44f29179d26a5eb2d05e0' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-center/user.tpl',
      1 => 1477753122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f44719299a3_22065991 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="personal_listbox">
    <div class="personal_left">
        <h3>个人中心</h3>
        <p><a href="/user-center/order-list" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/order-list') {?>class="on"<?php }?>>购买记录</a></p>
        <p><a href="/user-center/indianaed-list" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/indianaed-list') {?>class="on"<?php }?>>中奖记录</a></p>
        <p><a href="/user-center/display-order-list" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/display-order-list') {?>class="on"<?php }?>>晒单记录</a></p>
        <p><a href="/user-center/address-list" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/address-list') {?>class="on"<?php }?>>地址管理</a></p>
    </div>
    <div class="personal_right">
        <div class="personcenter">
            <div class="userhead">
                <img src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
">
                <input type="file" name="" id="">
            </div>
            <div class="userinfo">
                <div class="usernikename">
                    <input type="text" name="" id="" maxlength="16">
                    <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userInfo']->value['nick_name'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <b>编辑昵称</b>
                </div>
                <div class="userphoennum"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['account'];?>
</div>
                <div class="userprice">
                    <span>账户余额:</span>
                    <em><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['userAccount']->value['recharge']);?>
元</em>
                    <a href="javascript:void(0)">充值</a>
                </div>
            </div>
        </div><?php }
}