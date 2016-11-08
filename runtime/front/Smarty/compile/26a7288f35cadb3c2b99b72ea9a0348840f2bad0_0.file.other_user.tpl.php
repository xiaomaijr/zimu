<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-08 15:50:49
  from "E:\app.xiaomaijr.com\front\views\user-center\other_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f8a559639816_41307792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a7288f35cadb3c2b99b72ea9a0348840f2bad0' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\user-center\\other_user.tpl',
      1 => 1475912951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f8a559639816_41307792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="personcenter">
    <div class="userhead">
        <img src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
">
    </div>
    <div class="userinfo">
        <div class="usernikename">
            <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userInfo']->value['nick_name'])===null||$tmp==='' ? '' : $tmp);?>
</span>
        </div>
    </div>
</div>
<div class="otherbox">
    <div class="othernav">
        <div class="each">
            <a href="/user-center/order-list?user_id=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/order-list') {?>class="on"<?php }?> style="border-left: 0;">夺宝记录</a>
            <a href="/user-center/indianaed-list?user_id=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/indianaed-list') {?>class="on"<?php }?>>中奖记录</a>
            <a href="/user-center/display-order-list?user_id=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['curUrl']->value == '/user-center/display-order-list') {?>class="on"<?php }?>>晒单记录</a>
        </div>
    </div><?php }
}
