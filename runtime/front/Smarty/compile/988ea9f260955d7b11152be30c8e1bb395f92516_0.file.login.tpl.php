<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:55:22
  from "/home/work/www/zimu/front/views/user-passport/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f445aca5727_32260897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988ea9f260955d7b11152be30c8e1bb395f92516' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-passport/login.tpl',
      1 => 1473500636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581f445aca5727_32260897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1174740856581f445ac9e329_78061102($_smarty_tpl);
?>

<?php 
new Block_content_1580876934581f445aca1771_17069977($_smarty_tpl);
?>

<?php 
new Block_script_840684264581f445aca4941_60517172($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/user-passport/login.tpl */
class Block_css_1174740856581f445ac9e329_78061102 extends Smarty_Internal_Block
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
/* {block 'content'} /home/work/www/zimu/front/views/user-passport/login.tpl */
class Block_content_1580876934581f445aca1771_17069977 extends Smarty_Internal_Block
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
/* {block 'script'} /home/work/www/zimu/front/views/user-passport/login.tpl */
class Block_script_840684264581f445aca4941_60517172 extends Smarty_Internal_Block
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
