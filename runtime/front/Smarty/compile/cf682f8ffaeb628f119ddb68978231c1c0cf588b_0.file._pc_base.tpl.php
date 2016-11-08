<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-06 09:57:57
  from "E:\app.xiaomaijr.com\front\views\_pc_base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f5afa51db326_65538635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf682f8ffaeb628f119ddb68978231c1c0cf588b' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\_pc_base.tpl',
      1 => 1475719071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:headmain.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57f5afa51db326_65538635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢乐购</title>
    <link rel="stylesheet" type="text/css" href="/css/public/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/public/public.css" />
</head>
<body>
<input type="hidden" id="user-login" value="<?php echo (($tmp = @$_SESSION['USER_ID'])===null||$tmp==='' ? 0 : $tmp);?>
"/>

<?php 
new Block_css_2237557f5afa51bfda3_38487218($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:headmain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
new Block_content_1870857f5afa51cf7a5_42276171($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="/js/public/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="/js/public/public.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="/js/public/scroll.js"><?php echo '</script'; ?>
>
<?php 
new Block_script_2604557f5afa51d74a4_32234093($_smarty_tpl);
?>

</html>

<?php }
/* {block 'css'} E:\app.xiaomaijr.com\front\views\_pc_base.tpl */
class Block_css_2237557f5afa51bfda3_38487218 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\_pc_base.tpl */
class Block_content_1870857f5afa51cf7a5_42276171 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\_pc_base.tpl */
class Block_script_2604557f5afa51d74a4_32234093 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
