<?php
/* Smarty version 3.1.30-dev/59, created on 2016-08-28 10:34:56
  from "E:\app.xiaomaijr.com\front\views\user-passport\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57c24dd03cfd03_99454536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496f93a09691f18a95c4fc88c738e0026bf7608a' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\user-passport\\register.tpl',
      1 => 1472351692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_57c24dd03cfd03_99454536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_450357c24dd0383a39_23901355($_smarty_tpl);
?>

<?php 
new Block_content_1216457c24dd03b0904_11795229($_smarty_tpl);
?>

<?php 
new Block_script_906957c24dd03cbe89_71928150($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\user-passport\register.tpl */
class Block_css_450357c24dd0383a39_23901355 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <link rel="stylesheet" type="text/css" href="/css/login/login.css" />
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\user-passport\register.tpl */
class Block_content_1216457c24dd03b0904_11795229 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="loginbox">
    <div class="fibox">
        <label for="reusername">手机号</label>
        <input type="text" name="" id="reusername" maxlength="32" placeholder="请输入用户名" />
    </div>
    <div class="fibox code">
        <label for="repwd">验证码</label>
        <input type="text" name="" id="codemsg" placeholder="请输入验证码" />
        <span>获取验证码</span>
        <b>59s重新获取</b>
    </div>
    <div class="fibox">
        <label for="codemsg">密码</label>
        <input type="password" name="" id="repwd" placeholder="请输入账户密码" />
    </div>
    <div class="fibox">
        <label for="repwdre">重复密码</label>
        <input type="password" name="" id="repwdre" placeholder="重复输入账户密码" />
    </div>
    <p></p>
    <div class="forgotpwd">
        <a href="/user-passport/login-view">已有帐号,快速登录</a>
    </div>
    <div class="loginbtn"><a href="javascript:void(0)">注册</a></div>
</div>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\user-passport\register.tpl */
class Block_script_906957c24dd03cbe89_71928150 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/login/regist.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
