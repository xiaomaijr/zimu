<?php
/* Smarty version 3.1.30-dev/59, created on 2016-06-18 17:35:52
  from "E:\app.xiaomaijr.com\front\views\Index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_576515f8c3dd62_84341452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc6277b1e38339abbd5ca3a06fc565ae4bb81b7' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\Index\\index.tpl',
      1 => 1465871992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576515f8c3dd62_84341452 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" />
    <meta content="telephone=no" name="format-detection" />
    <title>导航</title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/index.js"><?php echo '</script'; ?>
>
</head>

<body>
<!--导航-->
<div class="menus">
    <?php if (!empty($_smarty_tpl->tpl_vars['categorys']->value)) {?>
    <ul class="g_clr">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorys']->value, 'category');
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved = $_smarty_tpl->tpl_vars['category'];
?>
        <li>
            <a class="link <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['currentId']->value) {?>active<?php }?>"  item-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value['id'])===null||$tmp==='' ? 2 : $tmp);?>
" href="javascript:void(0);">
                <span class="title"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
                <span class="menu-split"></span>
            </a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </ul>
    <?php }?>
</div>
<!--导航 end-->
<div class="content">
    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)) {?>
    <ul class="js_bd">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'app');
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
$__foreach_app_1_saved = $_smarty_tpl->tpl_vars['app'];
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
) no-repeat 2px -38px;;">
                <span><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</span>
            </a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </ul>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['others']->value)) {?>
    <div style="display: block;margin: 0 30px;background: #f7f7f7;height: 1px"></div>
    <ul class="eachlist">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'other');
foreach ($_from as $_smarty_tpl->tpl_vars['other']->value) {
$_smarty_tpl->tpl_vars['other']->_loop = true;
$__foreach_other_2_saved = $_smarty_tpl->tpl_vars['other'];
?>
        <li>
            <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['other']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['other']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
</a>
        </li>
	<?php
$_smarty_tpl->tpl_vars['other'] = $__foreach_other_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </ul>
    <?php }?>
</div>
</body>
</html><?php }
}
