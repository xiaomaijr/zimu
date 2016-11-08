<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:55:45
  from "/home/work/www/zimu/front/views/user-center/order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f44718d8690_18528358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5da12593d0ba929bb1b2d0c0dea04c299fcb70c2' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-center/order_list.tpl',
      1 => 1477788862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:user.tpl' => 1,
  ),
),false)) {
function content_581f44718d8690_18528358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1463605441581f44718973e6_23585969($_smarty_tpl);
?>

<?php 
new Block_content_478866556581f44718d1825_78442386($_smarty_tpl);
?>

<?php 
new Block_script_1007952354581f44718d7972_42445494($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/user-center/order_list.tpl */
class Block_css_1463605441581f44718973e6_23585969 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/user-center/personal_order.css"/>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} /home/work/www/zimu/front/views/user-center/order_list.tpl */
class Block_content_478866556581f44718d1825_78442386 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content center">
        <?php $_smarty_tpl->_subTemplateRender("file:user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="orderlist_titile">
                    <span class="wid350">商品</span>
                    <span class="wid100">夺宝状态</span>
                    <span class="wid100">总价</span>
                    <span class="wid100">参与人次</span>
                    <span class="wid100">夺宝号码</span>
                    <span class="wid125">操作</span>
                </div>
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
                    <div class="orderlist on">
                        <div class="orderlist_titile">
                            <label>第<?php echo $_smarty_tpl->tpl_vars['order']->value['issue'];?>
期</label>
                            <b item-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" item-type="order"></b>
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
                                    <span>总需:<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['total_inputs'];?>
次</span>
                                    <span>幸运号码:<label><?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaedOrder']->value[$_smarty_tpl->tpl_vars['order']->value['id']]['luck_number'])===null||$tmp==='' ? '未揭晓' : $tmp);?>
</label></span>
                                    <span>揭晓时间:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaedOrder']->value[$_smarty_tpl->tpl_vars['order']->value['id']]['create_time'])===null||$tmp==='' ? '请等待' : $tmp);?>
</span>
                                </div>
                                <div class="wid100 fl"><em><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</em></div>
                                <div class="wid100 fl"><em>¥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value['total_price']);?>
</em></div>
                                <div class="wid100 fl"><em><?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['num'])===null||$tmp==='' ? 0 : $tmp);?>
</em></div>
                            </div>
                        </div>
                        <div class="wid100 fl pd10"><a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['id'];?>
">查看更多</a></div>
                        <div class="wid125 fl pd10">
                            <?php if ($_smarty_tpl->tpl_vars['order']->value['original_status'] == 1) {?>
                            <a href="/order/pay?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">立即支付</a>
                            <em data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="cancal-order">取消订单</em>
                            <?php } else { ?>
                            <a href="/mall/reward?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['indiana_good']['id'];?>
" class="pdeail">详情</a>
                            <?php }?>
                        </div>
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
<!--content end-->




<!--删除提示-->
    <div class="deletetipopen">
        <div class="deletetipboxbg"></div>
        <div class="deletetipbox">
            <p>确认删除订单?</p>
            <div class="deleteopenbtn">
                <a href="javascript:void(0)">取消</a>
                <a href="javascript:void(0)" class="deleteover">确认</a>
            </div>
        </div>
    </div>
<!--删除提示 end-->

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
/* {block 'script'} /home/work/www/zimu/front/views/user-center/order_list.tpl */
class Block_script_1007952354581f44718d7972_42445494 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="/js/user-center/personal_order.js"><?php echo '</script'; ?>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
