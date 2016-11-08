<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:56:08
  from "/home/work/www/zimu/front/views/user-center/address_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f4488a77921_61890784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bbf0185060e9338968519e42f615ee6ccdbbf4' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-center/address_list.tpl',
      1 => 1477887528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:user.tpl' => 1,
  ),
),false)) {
function content_581f4488a77921_61890784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1209599691581f4488a46125_16678201($_smarty_tpl);
?>

<?php 
new Block_content_909296751581f4488a6fd99_22092862($_smarty_tpl);
?>

<?php 
new Block_script_836793649581f4488a76d35_74364153($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/user-center/address_list.tpl */
class Block_css_1209599691581f4488a46125_16678201 extends Smarty_Internal_Block
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
/* {block 'content'} /home/work/www/zimu/front/views/user-center/address_list.tpl */
class Block_content_909296751581f4488a6fd99_22092862 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content center">
        <?php $_smarty_tpl->_subTemplateRender("file:user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!--地址管理-->
                <?php if (!empty($_smarty_tpl->tpl_vars['addressList']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressList']->value, 'address');
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
$__foreach_address_0_saved = $_smarty_tpl->tpl_vars['address'];
?>
                <div class="info_box">
                    <i class="delete_adress"></i>
                    <h3><?php echo $_smarty_tpl->tpl_vars['address']->value['user_name'];?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['address']->value['city_name'])===null||$tmp==='' ? '北京' : $tmp);?>
</h3>
                    <div class="info_detailbox">
                        <label>收货人:</label>
                        <em><?php echo $_smarty_tpl->tpl_vars['address']->value['user_name'];?>
</em>
                    </div>
                    <div class="info_detailbox">
                        <label>所在地区:</label>
                        <em><?php echo (($tmp = @$_smarty_tpl->tpl_vars['address']->value['city_name'])===null||$tmp==='' ? '北京' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['address']->value['district_name'])===null||$tmp==='' ? '朝阳' : $tmp);?>
</em>
                    </div>
                    <div class="info_detailbox">
                        <label>详细地址:</label>
                        <em><?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</em>
                    </div>
                    <div class="info_detailbox">
                        <label>手机号:</label>
                        <em><?php echo $_smarty_tpl->tpl_vars['address']->value['mobile'];?>
</em>
                    </div>
                    <div class="info_detailbox">
                        <label>固定电话:</label>
                        <em><?php echo $_smarty_tpl->tpl_vars['address']->value['call_number'];?>
</em>
                    </div>
                    <div class="adress_manger" item-id="<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
">
                        <a href="javascript:void(0)" class="adress_modefy">编辑</a>
                        <?php if ($_smarty_tpl->tpl_vars['address']->value['is_default'] != 1) {?>
                        <a href="javascript:void(0)" class="set_adress">设为默认</a>
                        <?php }?>
                    </div>
                </div>
                <!--地址管理 end-->
                <?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                <?php }?>
                <!--地址管理 end-->
                <div class="add_adress_btn">
                    <a href="javascript:void(0)">新增收货信息</a>
                </div>
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
                    <input type="text" name="" id="receiver" value="" />
                </div>
                <div class="adresslist select">
                    <label><em>*</em>所在地区:</label>
                    <span>-请选择-</span>
                    <div class="ad_select">
                        <div class="ad_title">
                            <p>请选择</p>
                        </div>
                        <div class="ad_city">

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
                    <textarea id="address" value=""></textarea>
                </div>
                <div class="adresslist">
                    <label><em>*</em>手机号码:</label>
                    <input type="text" name="" id="phone" value="" />
                    <label>固定电话 :</label>
                    <input type="text" name="" id="call_number" value="" />
                </div>
            </div>
            <div class="adressbtn">
                <a href="javascript:void(0)">保存收货人信息</a>
            </div>
        </div>
        <!--收货人信息 end-->
    </div>
<!--弹层 end-->
<!--content end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} /home/work/www/zimu/front/views/user-center/address_list.tpl */
class Block_script_836793649581f4488a76d35_74364153 extends Smarty_Internal_Block
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
