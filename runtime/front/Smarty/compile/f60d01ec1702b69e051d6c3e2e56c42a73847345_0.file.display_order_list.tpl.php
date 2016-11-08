<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:56:05
  from "/home/work/www/zimu/front/views/user-center/display_order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f44859a3824_93635330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60d01ec1702b69e051d6c3e2e56c42a73847345' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-center/display_order_list.tpl',
      1 => 1475925510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:user.tpl' => 1,
  ),
),false)) {
function content_581f44859a3824_93635330 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/work/www/zimu/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1477790455581f4485974342_90787238($_smarty_tpl);
?>

<?php 
new Block_content_1849055062581f448599c835_60571413($_smarty_tpl);
?>

<?php 
new Block_script_1111133997581f44859a2c19_69444970($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/user-center/display_order_list.tpl */
class Block_css_1477790455581f4485974342_90787238 extends Smarty_Internal_Block
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
/* {block 'content'} /home/work/www/zimu/front/views/user-center/display_order_list.tpl */
class Block_content_1849055062581f448599c835_60571413 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content center">
        <?php $_smarty_tpl->_subTemplateRender("file:user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php if (!empty($_smarty_tpl->tpl_vars['displayOrders']->value)) {?>
                <div class="orderview order">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrders']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_0_saved = $_smarty_tpl->tpl_vars['order'];
?>
                    <div class="viewlist2">
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
                <?php }?>
            </div>
        </div>
    </div>
<!--content end-->




<!--删除提示-->
    <div class="deletetipopen">
        <div class="deletetipboxbg"></div>
        <div class="deletetipbox">
            <p>确认删除地址?</p>
            <div class="deleteopenbtn">
                <a href="javascript:void(0)">取消</a>
                <a href="javascript:void(0)" class="deleteover">确认</a>
            </div>
        </div>
    </div>
<!--删除提示 end-->

<!--弹层-->
    <div class="openbox">
        <div class="openboxbg"></div>
        <!--收货人信息-->
        <div class="addaddress">
            <div class="opentitle">
                <span>新增收货人信息</span>
                <a href="javascript:void(0)" class="closebox"></a>
            </div>
            <div class="adresscontent">
                <div class="adresslist">
                    <label><em>*</em>收货人:</label>
                    <input type="text" name="" id="" value="" />
                </div>
                <div class="adresslist select">
                    <label><em>*</em>所在地区:</label>
                    <span>-请选择-</span>
                    <div class="ad_select">
                        <div class="ad_title">
                            <em>北京</em>
                            <em>北京</em>
                            <p>请选择</p>
                        </div>
                        <div class="ad_city">
                            <b>北京</b>
                            <b>上海</b>
                            <b>南京</b>
                        </div>
                        <div class="ad_area">
                            <b>朝阳</b>
                            <b>朝北</b>
                            <b>朝南</b>
                        </div>
                        <div class="ad_newadd">
                            <b>11</b>
                            <b>222</b>
                            <b>33</b>
                        </div>
                    </div>
                </div>
                <div class="adresslist">
                    <label><em>*</em>详细地址:</label>
                    <textarea></textarea>
                </div>
                <div class="adresslist">
                    <label><em>*</em>手机号码:</label>
                    <input type="text" name="" id="" value="" />
                    <label>固定电话 :</label>
                    <input type="text" name="" id="" value="" />
                </div>
            </div>
            <div class="adressbtn">
                <a href="javascript:void(0)">保存收货人信息</a>
            </div>
        </div>
        <!--收货人信息 end-->
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
/* {block 'script'} /home/work/www/zimu/front/views/user-center/display_order_list.tpl */
class Block_script_1111133997581f44859a2c19_69444970 extends Smarty_Internal_Block
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
