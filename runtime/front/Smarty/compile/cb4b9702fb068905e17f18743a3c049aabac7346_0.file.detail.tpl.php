<?php
/* Smarty version 3.1.30-dev/59, created on 2016-11-03 17:28:07
  from "E:\app.xiaomaijr.com\front\views\mall\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_581b03270c1407_84004095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4b9702fb068905e17f18743a3c049aabac7346' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\mall\\detail.tpl',
      1 => 1478165282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_581b03270c1407_84004095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_28893581b0327040567_09337360($_smarty_tpl);
?>

<?php 
new Block_content_5202581b03270b5875_22734054($_smarty_tpl);
?>

<?php 
new Block_script_21283581b03270c1407_06151821($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\mall\detail.tpl */
class Block_css_28893581b0327040567_09337360 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/detail/detail.css"/>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\mall\detail.tpl */
class Block_content_5202581b03270b5875_22734054 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
<div class="content">
    <div class="mianbaoxie">
        <span>当前位置:</span>
        <a href="/">首页</a>
        <label>&gt;</label>
        <label>商品详情</label>
    </div>
    <div class="detailtop">
        <div class="topleft">
            <div class="bigpic">
                <img src="<?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['image'];?>
">
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['goodInfo']->value['cover_images'])) {?>
            <div class="smallpic">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodInfo']->value['coverImages'], 'smllImage');
foreach ($_from as $_smarty_tpl->tpl_vars['smllImage']->value) {
$_smarty_tpl->tpl_vars['smllImage']->_loop = true;
$__foreach_smllImage_0_saved = $_smarty_tpl->tpl_vars['smllImage'];
?>
                <span class="on">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['smllImage']->value;?>
">
                    <em></em>
                </span>
                <?php
$_smarty_tpl->tpl_vars['smllImage'] = $__foreach_smllImage_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </div>
            <?php }?>
        </div>
        <div class="topmid">
            <div class="midtext">
                <em>(第<?php echo $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['issue'];?>
期)</em>
                <?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['name'];?>

            </div>
            <div class="midrenshu">
                <label>总需:<em><?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['total_inputs'];?>
</em>人次</label>
                <div class="sprice">
                    <b style="width: 20%"></b>
                </div>
                <div class="sprice_user">
                    <b><?php echo $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['involved_num'];?>
</b>
                    <strong><?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['total_inputs']-$_smarty_tpl->tpl_vars['indianaGoodInfo']->value['involved_num'];?>
</strong>
                </div>
                <div class="sprice_xx">
                    <b>已参与人次</b>
                    <strong>剩余人次</strong>
                </div>
                <div class="canyutext">
                    <em><?php echo $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['involved_num'];?>
</em>
                    人次已参与，赶快去参加吧！剩余
                    <i><?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['total_inputs']-$_smarty_tpl->tpl_vars['indianaGoodInfo']->value['involved_num'];?>
</i>
                    人次
                </div>
                <div class="shopnum" item-id="<?php echo $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['id'];?>
">
                    <label>我要参与:</label>
                    <b class="reduce">-</b>
                    <input type="tel" name="" id="" value="1" />
                    <b class="plus">+</b>
                    <label>人次</label>
                </div>
                <div class="midbtn">
                    <a href="javascript:void(0)" class="ljdb fl">立即夺宝</a>
                    <a href="javascript:void(0)" class="adsc fr">加入清单</a>
                </div>
            </div>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['rewardInfos']->value)) {?>
        <div class="topright">
            <div class="xyusertitle">开奖信息</div>
            <div class="xyuser">
                <div class="titlebg"></div>
                <div class="xyuserpic"><img src="<?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['user']['avatar'];?>
"> </div>
                <label>恭喜<a href="javascript:void(0)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['user']['nick_name'];?>
</a><b>(河南商丘)</b>获得该期奖品</label>
                <p>幸运号码:<em><?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['luck_number'];?>
</em></p>
                <p>本期参与:<em><?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['order']['num'];?>
</em>人次</p>
                <p>揭晓时间:<?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['create_time'];?>
</p>
                <a href="/mall/reward?id=<?php echo $_smarty_tpl->tpl_vars['rewardInfos']->value[0]['id'];?>
" target="_blank" class="userview">查看详情</a>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['rewardInfos']->value[1])) {?>
            <div class="xylist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rewardInfos']->value, 'info', false, 'index');
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_1_saved = $_smarty_tpl->tpl_vars['info'];
?>
                <?php if ($_smarty_tpl->tpl_vars['index']->value > 0) {?>
                <span class="reward-issue" item-data="<?php echo $_smarty_tpl->tpl_vars['info']->value['indiana_good_id'];?>
">第<?php echo $_smarty_tpl->tpl_vars['info']->value['issue'];?>
</span>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                <div class="xypages">
                    <a href="javascript:void(0)">下一页</a>
                    <a href="javascript:void(0)" class="on">上一页</a>
                </div>
            </div>
            <?php }?>
        </div>
        <?php }?>
    </div>
    <!--cont-->
    <div class="detailcontent">
        <div class="conttitle">
            <div class="titleborder">
                <span class="on">商品介绍</span>
                <span>所有参与记录</span>
                <span>晒单</span>
            </div>
        </div>
        <div class="conteach">
            <!--商品介绍-->
            <?php if (!empty($_smarty_tpl->tpl_vars['goodInfo']->value['coverImages'])) {?>
            <div class="contlist shopview" style="display: block">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodInfo']->value['coverImages'], 'ci');
foreach ($_from as $_smarty_tpl->tpl_vars['ci']->value) {
$_smarty_tpl->tpl_vars['ci']->_loop = true;
$__foreach_ci_2_saved = $_smarty_tpl->tpl_vars['ci'];
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['ci']->value;?>
">
                <?php
$_smarty_tpl->tpl_vars['ci'] = $__foreach_ci_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </div>
            <?php }?>
            <!--所有参与记录-->
            <div class="contlist joinhistory">
                <?php if (!empty($_smarty_tpl->tpl_vars['partRecords']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partRecords']->value, 'partRecord', false, 'partTime');
foreach ($_from as $_smarty_tpl->tpl_vars['partTime']->value => $_smarty_tpl->tpl_vars['partRecord']->value) {
$_smarty_tpl->tpl_vars['partRecord']->_loop = true;
$__foreach_partRecord_3_saved = $_smarty_tpl->tpl_vars['partRecord'];
?>
                <div class="contdate">
                    <label><?php echo $_smarty_tpl->tpl_vars['partTime']->value;?>
</label>
                    <em></em>
                </div>
                <div class="viewuserbox">
                    <!---list--->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partRecord']->value, 'record');
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->_loop = true;
$__foreach_record_4_saved = $_smarty_tpl->tpl_vars['record'];
?>
                <div class="viewuserlist">
                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['record']->value['create_time'];?>

                            <b><strong></strong></b>
                        </label>
                        <div class="listright">
                            <p>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['record']->value['user_avatar'];?>
">
                                <a href="javascript:void(0)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['record']->value['user']['nick_name'];?>
</a>
                                (<?php echo $_smarty_tpl->tpl_vars['record']->value['ip'];?>
)参与了
                                <em><?php echo $_smarty_tpl->tpl_vars['record']->value['num'];?>
人次</em>
                                <b>所有夺宝号码</b>
                            </p>
                            <?php if (!empty($_smarty_tpl->tpl_vars['luckNumbers']->value[$_smarty_tpl->tpl_vars['record']->value['id']])) {?>
                            <div class="hiddenbox">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['luckNumbers']->value[$_smarty_tpl->tpl_vars['record']->value['id']], 'luckNum');
foreach ($_from as $_smarty_tpl->tpl_vars['luckNum']->value) {
$_smarty_tpl->tpl_vars['luckNum']->_loop = true;
$__foreach_luckNum_5_saved = $_smarty_tpl->tpl_vars['luckNum'];
?>
                                <span><?php echo $_smarty_tpl->tpl_vars['luckNum']->value['luck_number'];?>
</span>
                                <?php
$_smarty_tpl->tpl_vars['luckNum'] = $__foreach_luckNum_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['record'] = $__foreach_record_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                    <!---list end--->
                </div>
                <?php
$_smarty_tpl->tpl_vars['partRecord'] = $__foreach_partRecord_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                <div class="xypages down">
                    <a href="javascript:void(0)">下一页</a>
                    <a href="javascript:void(0)" class="on">上一页</a>
                </div>
                <?php }?>
            </div>
            <!--晒单-->
            <?php if (!empty($_smarty_tpl->tpl_vars['displayOrders']->value)) {?>
            <div class="contlist viewpic">
                <!---list-->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrders']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_6_saved = $_smarty_tpl->tpl_vars['order'];
?>
                <div class="viewlist">
                    <div class="viewpicbox">
                        <a href="javascript:;" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['user_avatar'];?>
">
                            <label><?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
</label>
                        </a>
                    </div>
                    <div class="viewtext">
                        <div class="texttitle">
                            <span><?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>
</span>
                            <label><?php echo $_smarty_tpl->tpl_vars['order']->value['create_time'];?>
</label>
                        </div>
                        <div class="textcont">
                            <a href="/member/display-order-detail?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" target="_blank">
                                <label>(<?php echo $_smarty_tpl->tpl_vars['order']->value['good']['issue'];?>
)<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['good']['name'])===null||$tmp==='' ? '' : $tmp);?>
</label>
                                <p><?php echo $_smarty_tpl->tpl_vars['order']->value['comment'];?>
</p>
                                <div class="clear"></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['image'];?>
">
                            </a>
                        </div>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                <!---list end-->
                <div class="xypages down">
                    <a href="javascript:void(0)">下一页</a>
                    <a href="javascript:void(0)" class="on">上一页</a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!--cont end-->

</div>
<!--content end-->


<!----login---->
<div class="openloginbox">
    <div class="openbg"></div>
    <div class="detaillogin">
        <div class="logintitle">登陆</div>
        <div class="fibox">
            <label for="reusername">手机号</label>
            <input type="text" name="" id="reusername" maxlength="32" placeholder="请输入用户名" />
        </div>
        <div class="fibox code">
            <label for="codemsg">验证码</label>
            <input type="text" name="" id="codemsg" placeholder="请输入验证码" />
            <span>获取验证码</span>
            <b>59s重新获取</b>
        </div>
        <div class="loginbtn"><a href="javascript:void(0)">登录</a></div>
    </div>
</div>
<!----login end---->
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
/* {block 'script'} E:\app.xiaomaijr.com\front\views\mall\detail.tpl */
class Block_script_21283581b03270c1407_06151821 extends Smarty_Internal_Block
{
public $name = "script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

    <?php echo '<script'; ?>
 src="/js/detail/detail.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'script'} */
}
