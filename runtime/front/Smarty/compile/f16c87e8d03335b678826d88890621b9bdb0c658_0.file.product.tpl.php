<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-04 11:24:42
  from "/home/work/www/zimu/front/views/mall/product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581c6ffad15f84_75292054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f16c87e8d03335b678826d88890621b9bdb0c658' => 
    array (
      0 => '/home/work/www/zimu/front/views/mall/product.tpl',
      1 => 1477790762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581c6ffad15f84_75292054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_1339048131581c6ffacdc773_44875749($_smarty_tpl);
?>

<?php 
new Block_content_931099974581c6ffad0f248_23043076($_smarty_tpl);
?>

<?php 
new Block_script_707165421581c6ffad14cf6_40106535($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/mall/product.tpl */
class Block_css_1339048131581c6ffacdc773_44875749 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/product/product.css"/>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} /home/work/www/zimu/front/views/mall/product.tpl */
class Block_content_931099974581c6ffad0f248_23043076 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
    <div class="content">
        <div class="mianbaoxie">
            <span>当前位置:</span>
            <a href="javascript:void(0)">首页</a>
            <label>&gt;</label>
            <a href="javascript:void(0)">全部商品</a>
            <label>&gt;</label>
            <label>分类1</label>
        </div>
        <div class="titlebox">
            <div class="producttitle">
                <label>分类</label>
                <div class="protitlebox">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryMaps']->value, 'category', false, 'id');
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved = $_smarty_tpl->tpl_vars['category'];
?>
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['params']->value['categoryUrl'];?>
&category_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['params']->value['categoryId']) {?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></p>
                    <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </div>
            </div>
            
        </div>
        <!--box title-->
        <div class="productselect">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderByMaps']->value, 'brief', false, 'col');
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['brief']->value) {
$_smarty_tpl->tpl_vars['brief']->_loop = true;
$__foreach_brief_1_saved = $_smarty_tpl->tpl_vars['brief'];
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['params']->value['orderUrl'];?>
&orderBy=<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
" class="last <?php if ($_smarty_tpl->tpl_vars['col']->value == $_smarty_tpl->tpl_vars['params']->value['orderBy']) {?>on<?php }?>"><?php echo $_smarty_tpl->tpl_vars['brief']->value;?>
<i></i></a>
            <?php
$_smarty_tpl->tpl_vars['brief'] = $__foreach_brief_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        </div>
        <!--box title end-->
        <div class="product">
            <!--list-->
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_2_saved = $_smarty_tpl->tpl_vars['product'];
?>
            <div class="productbox">
                <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                        <label>总需人次:<?php echo $_smarty_tpl->tpl_vars['product']->value['total_inputs'];?>
</label>
                        <div class="sprice">
                            <b></b>
                        </div>
                        <div class="sprice_user">
                            <b><?php echo $_smarty_tpl->tpl_vars['indianaGoods']->value[$_smarty_tpl->tpl_vars['product']->value['id']]['involved_num'];?>
</b>
                            <strong><?php echo $_smarty_tpl->tpl_vars['product']->value['total_inputs']-$_smarty_tpl->tpl_vars['indianaGoods']->value[$_smarty_tpl->tpl_vars['product']->value['id']]['involved_num'];?>
</strong>
                        </div>
                        <div class="sprice_xx">
                            <b>已参与人次</b>
                            <strong>剩余人次</strong>
                        </div>
                    </div>
                    <div class="spricebtn" item-id="<?php echo $_smarty_tpl->tpl_vars['indianaGoods']->value[$_smarty_tpl->tpl_vars['product']->value['id']]['id'];?>
">
                        <i>立即一元购</i>
                        <em></em>
                    </div>
                </a>
            </div>
            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            <?php }?>
            <!--list end-->
        </div>
        <div class="clear"></div>
        <div class="pagelist">
            <?php echo $_smarty_tpl->tpl_vars['pageing']->value;?>

            
        </div>
    </div>
<!--content end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} /home/work/www/zimu/front/views/mall/product.tpl */
class Block_script_707165421581c6ffad14cf6_40106535 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/product/product.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
