<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-06 14:56:01
  from "/home/work/www/zimu/front/views/user-center/indianaed_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581f4481c7e3b9_06375780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813c40691b9f7aa1c875d4dc63d30c163420002f' => 
    array (
      0 => '/home/work/www/zimu/front/views/user-center/indianaed_list.tpl',
      1 => 1477824658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
    'file:user.tpl' => 1,
  ),
),false)) {
function content_581f4481c7e3b9_06375780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1724242423581f4481c3b676_40276531($_smarty_tpl);
?>

<?php 
new Block_content_1017186597581f4481c767c9_07411599($_smarty_tpl);
?>

<?php 
new Block_script_514460365581f4481c7d613_33137786($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/user-center/indianaed_list.tpl */
class Block_css_1724242423581f4481c3b676_40276531 extends Smarty_Internal_Block
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
/* {block 'content'} /home/work/www/zimu/front/views/user-center/indianaed_list.tpl */
class Block_content_1017186597581f4481c767c9_07411599 extends Smarty_Internal_Block
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
                    <span class="wid650 his">商品</span>
                    <span class="wid100">状态</span>
                    <span class="wid125">操作</span>
                </div>
                <!--订单列表-->
                <?php if (!empty($_smarty_tpl->tpl_vars['indianaedList']->value)) {?>
                <div class="orderlistbox">
                    <!--循环列表-->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['indianaedList']->value, 'record');
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->_loop = true;
$__foreach_record_0_saved = $_smarty_tpl->tpl_vars['record'];
?>
                    <div class="orderlist">
                        <div class="orderlist_titile">
                            <label>第<?php echo $_smarty_tpl->tpl_vars['record']->value['good']['issue'];?>
期</label>
                            <b item-id="<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" item-type="indianaed"></b>
                        </div>
                        <div class="personal_orderlist">
                            <div class="order_list_d">
                                <div class="wid350 fl add">
                                    <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['record']->value['good']['id'];?>
" class="pic">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['record']->value['good']['image'];?>
" />
                                    </a>
                                    <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['record']->value['good']['id'];?>
">
                                        <span><?php echo $_smarty_tpl->tpl_vars['record']->value['good']['name'];?>
</span>
                                    </a>
                                    <span>获得者:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['record']->value['user']['nick_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['record']->value['user']['account'] : $tmp);?>
(本期参与<?php echo $_smarty_tpl->tpl_vars['record']->value['order']['num'];?>
次)</span>
                                    <span>总需:<?php echo $_smarty_tpl->tpl_vars['record']->value['good']['total_inputs'];?>
次</span>
                                    <span>幸运号码:<label><?php echo (($tmp = @$_smarty_tpl->tpl_vars['record']->value['luck_number'])===null||$tmp==='' ? '' : $tmp);?>
</label></span>
                                    <span>揭晓时间:<?php echo $_smarty_tpl->tpl_vars['record']->value['create_time'];?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="wid100 fl pd10"><em><?php echo $_smarty_tpl->tpl_vars['orderStatusMap']->value[$_smarty_tpl->tpl_vars['record']->value['order']['status']];?>
</em></div>
                        <div class="wid125 fl pd10">
                            <?php if ($_smarty_tpl->tpl_vars['record']->value['order']['status'] == 6) {?><label item-status="<?php echo $_smarty_tpl->tpl_vars['record']->value['order']['status'];?>
" item-id="<?php echo $_smarty_tpl->tpl_vars['record']->value['order']['id'];?>
">确认收货</label><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['record']->value['order']['status'] == 7) {?><label item-status="<?php echo $_smarty_tpl->tpl_vars['record']->value['order']['status'];?>
" item-id="<?php echo $_smarty_tpl->tpl_vars['record']->value['order']['id'];?>
">晒单</label><?php }?>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['record'] = $__foreach_record_0_saved;
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

<!--晒单弹窗-->
    <div class="vieworderopen">
        <div class="deletetipboxbg"></div>
        <div class="vieworder">
            <div class="opentitle">
                <span>晒单信息</span>
                <a href="javascript:void(0)" class="closebox"></a>
            </div>
            <div class="adresscontent">
                <input type="hidden" class="order-id" value=""/>
                <div class="adresslist">
                    <label><em>*</em>标题:</label>
                    <input type="text" name="title" id="title" value="" />
                </div>
                <div class="adresslist share">
                    <label><em>*</em>分享感受:</label>
                    <textarea name="content" id="content" value=""></textarea>
                </div>
                <div class="adresslist">
                    <label><em>*</em>上传图片:</label>
                    <div class="uploadpic">
                        <input type="hidden" id="image_urls" value=""/>
                        <div class="uploadbtn">
                            <input type="file"  name="upload_image" id="upload_image" value="0">
                            <div class="uploadbtnbor"><i>+</i></div>
                        </div>
                        <div class="historypic">

                        </div>
                    </div>
                </div>
                <button class="display-btn">提交</button>
            </div>

        </div>
    </div>
<!--晒单弹窗 end-->

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
/* {block 'script'} /home/work/www/zimu/front/views/user-center/indianaed_list.tpl */
class Block_script_514460365581f4481c7d613_33137786 extends Smarty_Internal_Block
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
