<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-03 10:18:55
  from "E:\app.xiaomaijr.com\front\views\member\display_order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f1c00fd984e0_48759983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eef9b3197bd9faba88c341f87efd35359a2c56f' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\member\\display_order_list.tpl',
      1 => 1475461131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_57f1c00fd984e0_48759983 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\app.xiaomaijr.com\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_2886457f1c00fcfc0d8_56676200($_smarty_tpl);
?>

<?php 
new Block_content_1279357f1c00fd984e9_05345812($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\member\display_order_list.tpl */
class Block_css_2886457f1c00fcfc0d8_56676200 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/member/display_order_list.css"/>
    <?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\member\display_order_list.tpl */
class Block_content_1279357f1c00fd984e9_05345812 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content">
        <?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <div class="orderview order">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'record');
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->_loop = true;
$__foreach_record_0_saved = $_smarty_tpl->tpl_vars['record'];
?>
            <div class="viewlist2">
                <a href="/member/display-order-detail?id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['record']->value['image'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['record']->value['good']['name'];?>
</span>
                    <label>幸运号码:<em><?php echo $_smarty_tpl->tpl_vars['record']->value['luck_number'];?>
</em></label>
                    <div class="showtext">
                        <span><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</span>
                        <p>
                            <i><?php echo $_smarty_tpl->tpl_vars['record']->value['user_name'];?>
</i>
                            <em><?php echo $_smarty_tpl->tpl_vars['record']->value['create_time'];?>
</em>
                        </p>
                        <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['record']->value['comment'],100);?>
</b>
                    </div>
                </a>
            </div>
            <?php
$_smarty_tpl->tpl_vars['record'] = $__foreach_record_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        </div>
        <?php }?>
    </div>
    <div class="clear"></div>
    <div class="pagelist">
        <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

        
    </div>
<!--content end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
}