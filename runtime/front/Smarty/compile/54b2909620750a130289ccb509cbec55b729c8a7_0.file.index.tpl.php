<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-04 09:30:04
  from "/home/work/www/zimu/front/views/mall/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581c551c77fcb9_99301545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b2909620750a130289ccb509cbec55b729c8a7' => 
    array (
      0 => '/home/work/www/zimu/front/views/mall/index.tpl',
      1 => 1477787198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581c551c77fcb9_99301545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1720646225581c551c72a076_81655209($_smarty_tpl);
?>

<?php 
new Block_content_974335804581c551c777fe4_60218742($_smarty_tpl);
?>

<?php 
new Block_script_1610563447581c551c77e866_04105169($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/mall/index.tpl */
class Block_css_1720646225581c551c72a076_81655209 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/index/index.css"/>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} /home/work/www/zimu/front/views/mall/index.tpl */
class Block_content_974335804581c551c777fe4_60218742 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!----content--->
<!--焦点-->
    <div class="leftLoop">
        <div class="hd">
            <ul class="hd_ul">
                <li class="small_click"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!--<div class="cut">
            <span class="prev"></span>
            <span class="next"></span>
        </div>-->
        <div class="bd">
            <ul class="picList">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
$__foreach_banner_0_saved = $_smarty_tpl->tpl_vars['banner'];
?>
                <li><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['banner']->value['url'])===null||$tmp==='' ? '/' : $tmp);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
" /></a></li>
                <?php
$_smarty_tpl->tpl_vars['banner'] = $__foreach_banner_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </ul>
        </div>
    </div>
<!--焦点 end-->
<?php if (!empty($_smarty_tpl->tpl_vars['lattestGoods']->value)) {?>
    <div class="indextext">
        <em></em>
        <span>最新揭晓</span>
        <label>截止目前共揭晓商品<i>1000</i>个</label>
        <a href="/mall/disclose">更多商品,点击查看>></a>
    </div>
    <div class="jiexiao">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lattestGoods']->value, 'lattestGood');
foreach ($_from as $_smarty_tpl->tpl_vars['lattestGood']->value) {
$_smarty_tpl->tpl_vars['lattestGood']->_loop = true;
$__foreach_lattestGood_1_saved = $_smarty_tpl->tpl_vars['lattestGood'];
?>
        <div class="jxlist">
            <a href="/mall/reward?id=<?php echo $_smarty_tpl->tpl_vars['lattestGood']->value['indiana_good_id'];?>
">
                <div class="jxicon"></div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['lattestGood']->value['image'];?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['lattestGood']->value['name'];?>
</span>
                <label>总需人次：<?php echo $_smarty_tpl->tpl_vars['lattestGood']->value['total_inputs'];?>
</label>
                <em>揭晓倒计时:<?php echo $_smarty_tpl->tpl_vars['lattestGood']->value['end_time']-time();?>
</em>
            </a>
        </div>
        <?php
$_smarty_tpl->tpl_vars['lattestGood'] = $__foreach_lattestGood_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['hotGoods']->value)) {?>
    <div class="indextext">
        <em></em>
        <span>人气推荐</span>
        <a href="/mall/product?page_type=hot">更多商品,点击查看>></a>
    </div>
    <div class="renqi">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotGoods']->value, 'hotGood');
foreach ($_from as $_smarty_tpl->tpl_vars['hotGood']->value) {
$_smarty_tpl->tpl_vars['hotGood']->_loop = true;
$__foreach_hotGood_2_saved = $_smarty_tpl->tpl_vars['hotGood'];
?>
        <div class="rqlist">
            <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['hotGood']->value['id'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['hotGood']->value['image'];?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['hotGood']->value['name'];?>
</span>
                <label>总需人次:<?php echo $_smarty_tpl->tpl_vars['hotGood']->value['total_inputs'];?>
</label>
                <div class="sprice">
                    <b></b>
                </div>
                <div class="sprice_user">
                    <b><?php echo $_smarty_tpl->tpl_vars['indianaHotGoods']->value[$_smarty_tpl->tpl_vars['hotGood']->value['id']]['involved_num'];?>
</b>
                    <strong><?php echo $_smarty_tpl->tpl_vars['hotGood']->value['total_inputs']-$_smarty_tpl->tpl_vars['indianaHotGoods']->value[$_smarty_tpl->tpl_vars['hotGood']->value['id']]['involved_num'];?>
</strong>
                </div>
                <div class="sprice_xx">
                    <b>已参与人次</b>
                    <strong>剩余人次</strong>
                </div>
            </a>
            <div class="spricebtn" item-id="<?php echo $_smarty_tpl->tpl_vars['indianaHotGoods']->value[$_smarty_tpl->tpl_vars['hotGood']->value['id']]['id'];?>
">
                <i>立即一元购</i>
                <em></em>
            </div>
    </div>
        <?php
$_smarty_tpl->tpl_vars['hotGood'] = $__foreach_hotGood_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['newGoods']->value)) {?>
    <div class="indextext">
        <em></em>
        <span>新品上架</span>
        <a href="/mall/product?page_type=new">更多商品,点击查看>></a>
    </div>
    <div class="newpro">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newGoods']->value, 'newGood');
foreach ($_from as $_smarty_tpl->tpl_vars['newGood']->value) {
$_smarty_tpl->tpl_vars['newGood']->_loop = true;
$__foreach_newGood_3_saved = $_smarty_tpl->tpl_vars['newGood'];
?>
        <div class="newprolist">
            <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['newGood']->value['id'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['newGood']->value['image'];?>
">
                <span>总需人次:<?php echo $_smarty_tpl->tpl_vars['newGood']->value['total_inputs'];?>
</span>
                <label><?php echo $_smarty_tpl->tpl_vars['newGood']->value['name'];?>
</label>
            </a>
        </div>
        <?php
$_smarty_tpl->tpl_vars['newGood'] = $__foreach_newGood_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayOrders']->value)) {?>
    <div class="indextext">
        <em></em>
        <span>晒单分享</span>
        <label>截止目前共揭晓商品<i>1000</i>个</label>
        <a href="/member/display-order-list">更多晒单,点击查看>></a>
    </div>
    <div class="index_share">
        <div class="scrollshare">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrders']->value, 'displayOrder');
foreach ($_from as $_smarty_tpl->tpl_vars['displayOrder']->value) {
$_smarty_tpl->tpl_vars['displayOrder']->_loop = true;
$__foreach_displayOrder_4_saved = $_smarty_tpl->tpl_vars['displayOrder'];
?>
            <div class="sharebox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrder']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_5_saved = $_smarty_tpl->tpl_vars['order'];
?>
                <div class="sharelist">
                    <a href="/member/display-order-detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['image'];?>
">
                    </a>
                    <div class="sharetext">
                        <i class="shareup"></i>
                        <a href="/member/display-order-detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['comment'];?>
</a>
                        <span>--<?php echo $_smarty_tpl->tpl_vars['order']->value['create_time'];?>
</span>
                        <i class="sharedown"></i>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </div>
            <?php
$_smarty_tpl->tpl_vars['displayOrder'] = $__foreach_displayOrder_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        </div>
    </div>
<?php }?>
<!----content end--->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} /home/work/www/zimu/front/views/mall/index.tpl */
class Block_script_1610563447581c551c77e866_04105169 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/index/index.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
