<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-04 11:24:44
  from "/home/work/www/zimu/front/views/mall/disclose.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581c6ffc199168_91451501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b08a16254207df5ee5c62e13c983b98475289a1' => 
    array (
      0 => '/home/work/www/zimu/front/views/mall/disclose.tpl',
      1 => 1476685384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581c6ffc199168_91451501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_313169430581c6ffc17fbd0_97823876($_smarty_tpl);
?>

<?php 
new Block_content_1934871556581c6ffc195337_20361835($_smarty_tpl);
?>

<?php 
new Block_script_1785384438581c6ffc1982d5_94697855($_smarty_tpl);
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} /home/work/www/zimu/front/views/mall/disclose.tpl */
class Block_css_313169430581c6ffc17fbd0_97823876 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/index/index.css"/>
    <style type="text/css">
        .jxlist{
            margin: 0 0 20px;
        }
    </style>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} /home/work/www/zimu/front/views/mall/disclose.tpl */
class Block_content_1934871556581c6ffc195337_20361835 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!----content--->
<div class="content">
    <?php if (!empty($_smarty_tpl->tpl_vars['lattestGoods']->value)) {?>
    <div class="jiexiao" style="margin: 50px auto;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lattestGoods']->value, 'good');
foreach ($_from as $_smarty_tpl->tpl_vars['good']->value) {
$_smarty_tpl->tpl_vars['good']->_loop = true;
$__foreach_good_0_saved = $_smarty_tpl->tpl_vars['good'];
?>
        <div class="jxlist">
            <a href="/mall/detail?id=<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
                <div class="jxicon"></div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['image'];?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</span>
                <label>总需人次：<?php echo $_smarty_tpl->tpl_vars['good']->value['total_inputs'];?>
</label>
                <em>揭晓倒计时:<?php echo $_smarty_tpl->tpl_vars['good']->value['end_time'];?>
</em>
            </a>
        </div>
        <?php
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </div>
    <?php }?>
</div>
<!--content end-->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} /home/work/www/zimu/front/views/mall/disclose.tpl */
class Block_script_1785384438581c6ffc1982d5_94697855 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/mall/disclose.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}