<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-30 09:30:56
  from "E:\app.xiaomaijr.com\front\views\shop-cart\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_58154d50a43f37_61998372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0fea206ccb7a5f58347e90ebf20ca42619c86f' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\shop-cart\\list.tpl',
      1 => 1477791052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_58154d50a43f37_61998372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1994458154d5098c587_87122571($_smarty_tpl);
?>

<?php 
new Block_content_307358154d50a34539_78667788($_smarty_tpl);
?>

<?php 
new Block_script_682258154d50a400b1_08478452($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\shop-cart\list.tpl */
class Block_css_1994458154d5098c587_87122571 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/member/shopcar.css"/>
    <?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\shop-cart\list.tpl */
class Block_content_307358154d50a34539_78667788 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content">
        <!--购物车无商品-->
        <?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <div class="shopcar_null">
            <p>购物车空空的~快去看看心仪的商品吧<br /><a href="/mall/product">去购物&nbsp;&nbsp;&gt;</a> </p>
        </div>
        <?php } else { ?>
        <!--购物车无商品 end-->
        <!--购物车有商品-->
        <div class="cs_car">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th width="4%"></th>
                    <th class="shopname">商品</th>
                    <th class="shopval">商品价值</th>
                    <th>单价</th>
                    <th width="100">数量</th>
                    <th>价格</th>
                    <th width="4%"></th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'good');
foreach ($_from as $_smarty_tpl->tpl_vars['good']->value) {
$_smarty_tpl->tpl_vars['good']->_loop = true;
$__foreach_good_0_saved = $_smarty_tpl->tpl_vars['good'];
?>
                <tr>
                    <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
" class="shop-cart-id"/></td>
                    <td>
                        <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['good']->value['good']['id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['good']['image'];?>
" />
                            <span><?php echo $_smarty_tpl->tpl_vars['good']->value['good']['name'];?>
</span>
                            <label><?php echo $_smarty_tpl->tpl_vars['good']->value['good']['name'];?>
</label>
                        </a>
                    </td>
                    <td>¥<?php echo sprintf("%.2f",round($_smarty_tpl->tpl_vars['good']->value['good']['price']/100,2));?>
</td>
                    <td>¥<?php echo sprintf("%.2f",round($_smarty_tpl->tpl_vars['good']->value['good']['min_price']/100,2));?>
</td>
                    <td class="shopnum" item-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
                        <b class="reduce">-</b>
                        <input type="tel" name="buy_num" id="buy-num" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
" />
                        <b class="plus">+</b>
                    </td>
                    <td>¥<?php echo sprintf("%.2f",round($_smarty_tpl->tpl_vars['good']->value['total_price']/100,2));?>
</td>
                    <td class="deteleshop"><img src="/image/member/del.png"/></td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </table>
        </div>
        <div class="jiesuan">
            <div class="jiesuanlist">
                <label>总计:</label>
                <span>¥<?php echo sprintf("%.2f",round($_smarty_tpl->tpl_vars['totalPrice']->value/100,2));?>
</span>
            </div>
            <div class="jiesuanlist">
                <b>账户余额:</b>
                <strong>¥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['user_account']->value['recharge']);?>
</strong>
            </div>
        </div>
        <div class="clear"></div>
        <div class="shopcarbtn">
            <a href="javascript:;" class="paybtn">去计算</a>
            <a href="/mall/product" class="goshopbtn">继续购物</a>
        </div>
        <?php }?>
        <!--购物车有商品 end-->

    </div>
<!--content end-->


<!--删除提示-->
    <div class="deletetipopen">
        <div class="deletetipboxbg"></div>
        <div class="deletetipbox">
            <p>确认删除商品?</p>
            <div class="deleteopenbtn">
                <a href="javascript:void(0)">取消</a>
                <a href="javascript:void(0)" class="deleteover">确认</a>
            </div>
        </div>
    </div>
<!--删除提示 end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\shop-cart\list.tpl */
class Block_script_682258154d50a400b1_08478452 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/shop-cart/list.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
