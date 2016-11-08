<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-08 16:06:03
  from "E:\app.xiaomaijr.com\front\views\user-center\other_display_order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f8a8eb8f9c10_26126534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a3a4878a38728182f479d2be256eb6d46fae03' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\user-center\\other_display_order_list.tpl',
      1 => 1475913889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:other_user.tpl' => 1,
  ),
),false)) {
function content_57f8a8eb8f9c10_26126534 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\app.xiaomaijr.com\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_590757f8a8eb8bf287_92048336($_smarty_tpl);
?>

<?php 
new Block_content_1979257f8a8eb8f5d91_05887998($_smarty_tpl);
?>

<?php 
new Block_script_3156157f8a8eb8f9c18_02176582($_smarty_tpl);
?>



<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\user-center\other_display_order_list.tpl */
class Block_css_590757f8a8eb8bf287_92048336 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/user-center/showpic.css"/>
    <?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\user-center\other_display_order_list.tpl */
class Block_content_1979257f8a8eb8f5d91_05887998 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


<!--content-->
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:other_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['displayOrders']->value)) {?>
    <div class="othereach">
        <div class="otherlist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrders']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_0_saved = $_smarty_tpl->tpl_vars['order'];
?>
            <div class="viewlist2 other">
                <a href="/member/display-order-detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['image'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['order']->value['good']['name'];?>
</span>
                    <label>幸运号码:<em><?php echo $_smarty_tpl->tpl_vars['order']->value['luck_number'];?>
</em></label>
                    <div class="showtext">
                        <span><?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>
</span>
                        <p>
                            <i><?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
</i>
                            <em><?php echo $_smarty_tpl->tpl_vars['order']->value['create_time'];?>
</em>
                        </p>
                        <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['order']->value['comment'],100);?>
</b>
                    </div>
                </a>
            </div>
            <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        </div>
    </div>
    <?php }?>
</div>
    </div>
<!--content end-->
<!--弹层 end-->
    <div class="clear"></div>
    <div class="pagelist">
        <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

    </div>
    <?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\user-center\other_display_order_list.tpl */
class Block_script_3156157f8a8eb8f9c18_02176582 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="/js/user-center/otherpersonal.js"><?php echo '</script'; ?>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
