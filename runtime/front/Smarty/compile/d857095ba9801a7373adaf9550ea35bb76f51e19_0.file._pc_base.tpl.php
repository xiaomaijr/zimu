<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:53:58
  from "/home/work/www/zimu/front/views/_pc_base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f440664c600_29317233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd857095ba9801a7373adaf9550ea35bb76f51e19' => 
    array (
      0 => '/home/work/www/zimu/front/views/_pc_base.tpl',
      1 => 1475719070,
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
function content_581f440664c600_29317233 (Smarty_Internal_Template $_smarty_tpl) {
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
new Block_css_761249252581f44066370a3_80285634($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:headmain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
new Block_content_374623488581f4406643f76_39673287($_smarty_tpl);
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
new Block_script_750478464581f440664acf2_65947440($_smarty_tpl);
?>

</html>

<?php }
/* {block 'css'} /home/work/www/zimu/front/views/_pc_base.tpl */
class Block_css_761249252581f44066370a3_80285634 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} /home/work/www/zimu/front/views/_pc_base.tpl */
class Block_content_374623488581f4406643f76_39673287 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} /home/work/www/zimu/front/views/_pc_base.tpl */
class Block_script_750478464581f440664acf2_65947440 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
