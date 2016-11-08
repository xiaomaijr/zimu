<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-08 15:50:58
  from "E:\app.xiaomaijr.com\front\views\user-center\other_order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57f8a562bf4712_38585079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4831cd796f30ddd4f20c5bd65c513dbde0b31d0d' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\user-center\\other_order_list.tpl',
      1 => 1475912982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:other_user.tpl' => 1,
  ),
),false)) {
function content_57f8a562bf4712_38585079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_2037957f8a562b9a989_96816557($_smarty_tpl);
?>

<?php 
new Block_content_2028057f8a562be8b99_04946535($_smarty_tpl);
?>

<?php 
new Block_script_3150557f8a562bf0893_20600216($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\user-center\other_order_list.tpl */
class Block_css_2037957f8a562b9a989_96816557 extends Smarty_Internal_Block
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
/* {block 'content'} E:\app.xiaomaijr.com\front\views\user-center\other_order_list.tpl */
class Block_content_2028057f8a562be8b99_04946535 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content">
            <?php $_smarty_tpl->_subTemplateRender("file:other_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="othereach">
                <div class="otherlist">
                    <!--订单列表-->
                    <?php if (!empty($_smarty_tpl->tpl_vars['orderList']->value)) {?>
                    <div class="orderlistbox">
                        <!--循环列表-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderList']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_0_saved = $_smarty_tpl->tpl_vars['order'];
?>
                        <div class="orderlist">
                            <div class="orderlist_titile">
                                <label>第<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['issue'];?>
期</label>
                            </div>
                            <div class="personal_orderlist">
                                <div class="order_list_d">
                                    <div class="wid350 fl">
                                        <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['id'];?>
" class="pic">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['image'];?>
" />
                                        </a>
                                        <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['id'];?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['order']->value['good']['name'];?>
</span>
                                        </a>
                                        <span>获得者:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaedOrder']->value[$_smarty_tpl->tpl_vars['order']->value['id']]['user']['nick_name'])===null||$tmp==='' ? '未揭晓' : $tmp);?>
</span>
                                        <span>本期参与:<?php echo $_smarty_tpl->tpl_vars['order']->value['num'];?>
次</span>
                                        <span>幸运号码:<label><?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaedOrder']->value[$_smarty_tpl->tpl_vars['order']->value['id']]['luck_number'])===null||$tmp==='' ? '未揭晓' : $tmp);?>
</label></span>
                                        <span>揭晓时间:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaedOrder']->value[$_smarty_tpl->tpl_vars['order']->value['id']]['create_time'])===null||$tmp==='' ? '请等待' : $tmp);?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wid100 fr pd10"><a href="javascript:void(0)">查看更多</a></div>
                            <div class="wid100 fr"><em><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</em></div>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                        <!--循环列表 end-->
                    </div>
                    <?php }?>
                    <!--订单列表 end-->
                </div>
            </div>
        </div>
    </div>
<!--content end-->

<div class="openviewmore">
    <div class="deletetipboxbg"></div>
    <div class="viewmorebox">
        <div class="viewtitle">第201010010001期  电信50元充值卡(可充值中国电信话费)</div>
        <div class="viewtextbox">
            <p>参与10次,夺宝号码</p>
            <span>10101010100011</span>
            <span>10101010100011</span>
            <span>10101010100011</span>
            <span>10101010100011</span>
            <span>10101010100011</span>
        </div>
        <div class="closethisbox">
            点击关闭窗口
        </div>
    </div>
</div>

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
/* {block 'script'} E:\app.xiaomaijr.com\front\views\user-center\other_order_list.tpl */
class Block_script_3150557f8a562bf0893_20600216 extends Smarty_Internal_Block
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
