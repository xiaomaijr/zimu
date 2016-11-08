<?php
/* Smarty version 3.1.30-dev/59, created on 2016-09-10 17:52:01
  from "E:\app.xiaomaijr.com\front\views\user-passport\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57d3d7c1b24ab0_54300690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1344b71dd8b775b0b57c2dd1c0a9e65fd8f85a' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\user-passport\\login.tpl',
      1 => 1473500636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_57d3d7c1b24ab0_54300690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1621057d3d7c1b1cdb9_60863356($_smarty_tpl);
?>

<?php 
new Block_content_873957d3d7c1b20c30_58592078($_smarty_tpl);
?>

<?php 
new Block_script_2537657d3d7c1b24ab5_28769794($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\user-passport\login.tpl */
class Block_css_1621057d3d7c1b1cdb9_60863356 extends Smarty_Internal_Block
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
/* {block 'content'} E:\app.xiaomaijr.com\front\views\user-passport\login.tpl */
class Block_content_873957d3d7c1b20c30_58592078 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <div class="loginbox">
        <div class="logintitle">登陆</div>
        <div class="fibox">
            <label for="reusername">手机号</label>
            <input type="text" name="" id="reusername" maxlength="32" placeholder="请输入用户名" />
        </div>
        <div class="fibox code">
            <label for="codemsg">验证码</label>
            <input type="text" name="" id="codemsg" placeholder="请输入验证码" />
            <span>获取验证码</span>
            <b>59s重新获取</b>
        </div>
        <div class="loginbtn"><a href="javascript:void(0)">登录</a></div>
    </div>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\user-passport\login.tpl */
class Block_script_2537657d3d7c1b24ab5_28769794 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/login/login.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
