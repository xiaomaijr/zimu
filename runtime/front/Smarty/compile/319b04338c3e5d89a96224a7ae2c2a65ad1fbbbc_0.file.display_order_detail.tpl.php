<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-29 18:16:01
  from "E:\app.xiaomaijr.com\front\views\member\display_order_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581476e1d01f11_73194483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319b04338c3e5d89a96224a7ae2c2a65ad1fbbbc' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\member\\display_order_detail.tpl',
      1 => 1477736157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581476e1d01f11_73194483 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\app.xiaomaijr.com\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_25022581476e1cdae10_75986371($_smarty_tpl);
?>

<?php 
new Block_content_12831581476e1cfe095_72681955($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\member\display_order_detail.tpl */
class Block_css_25022581476e1cdae10_75986371 extends Smarty_Internal_Block
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
/* {block 'content'} E:\app.xiaomaijr.com\front\views\member\display_order_detail.tpl */
class Block_content_12831581476e1cfe095_72681955 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content">
        <div class="personcenter">
            <div class="userhead">
                <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_avatar'];?>
">
            </div>
            <div class="userinfo">
                <div class="usernikename">
                    <span><?php echo $_smarty_tpl->tpl_vars['info']->value['user_name'];?>
</span>
                </div>
            </div>
        </div>
        <div class="viewlist">
            <div class="showtext">
                <span><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</span>
                <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['good']['id'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['info']->value['good']['name'];?>
</span>
                </a>
                <label>商品期数:<em>第<?php echo $_smarty_tpl->tpl_vars['info']->value['issue'];?>
期</em></label>
                <label>幸运号码:<em><?php echo $_smarty_tpl->tpl_vars['info']->value['luck_number'];?>
</em></label>
                <label>本期参与:<em><?php echo $_smarty_tpl->tpl_vars['order']->value['num'];?>
</em>次</label>
                <p>
                    <i><?php echo $_smarty_tpl->tpl_vars['info']->value['user_name'];?>
</i>
                    <em><?php echo $_smarty_tpl->tpl_vars['info']->value['create_time'];?>
</em>
                </p>
                <p>
                    <i>开奖时间:</i>
                    <em><?php echo $_smarty_tpl->tpl_vars['order']->value['create_time'];?>
</em>
                </p>
                <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['info']->value['comment'],100);?>
</b>
            </div>
            <div class="detailimg">
                <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
">
            </div>
        </div>
    </div>
<!--content end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
}
