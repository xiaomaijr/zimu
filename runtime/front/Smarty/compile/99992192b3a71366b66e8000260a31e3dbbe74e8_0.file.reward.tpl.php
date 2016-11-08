<?php
/* Smarty version 3.1.30-dev/59, created on 2016-10-30 23:56:43
  from "E:\app.xiaomaijr.com\front\views\mall\reward.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_5816183b749784_75305042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99992192b3a71366b66e8000260a31e3dbbe74e8' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\mall\\reward.tpl',
      1 => 1477842999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_pc_base.tpl' => 1,
  ),
),false)) {
function content_5816183b749784_75305042 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\app.xiaomaijr.com\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_css_147585816183b68df50_21594054($_smarty_tpl);
?>

<?php 
new Block_content_204555816183b732076_92770513($_smarty_tpl);
?>

<?php 
new Block_script_60365816183b749788_88887008($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:_pc_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'css'} E:\app.xiaomaijr.com\front\views\mall\reward.tpl */
class Block_css_147585816183b68df50_21594054 extends Smarty_Internal_Block
{
public $name = "css";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<link rel="stylesheet" type="text/css" href="/css/detail/detail.css"/>
<link rel="stylesheet" type="text/css" href="/css/login/login.css"/>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'css'} */
/* {block 'content'} E:\app.xiaomaijr.com\front\views\mall\reward.tpl */
class Block_content_204555816183b732076_92770513 extends Smarty_Internal_Block
{
public $name = "content";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<!--content-->
<!--content-->
    <div class="content">
        <div class="mianbaoxie">
            <span>当前位置:</span>
            <a href="/">首页</a>
            <label>&gt;</label>
            <label>商品详情</label>
        </div>
        <div class="detailtop">
            <div class="boxleft">
                <div class="topleft">
                    <div class="bigpic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['image'];?>
">
                    </div>
                </div>
                <div class="topmid">
                    <div class="midtext">
                        <em>(第<?php echo $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['issue'];?>
期)</em>
                        <?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['name'];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['indianaGoodInfo']->value['status'] == 2) {?>
                    <div class="jiexiao">
                        <span>幸运号码:</span>
                        <em><?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaGoodInfo']->value['luck_number'])===null||$tmp==='' ? '' : $tmp);?>
</em>
                    </div>
                    <div class="xingyun">
                        <div class="userbox">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['rewardUserInfo']->value['avatar'];?>
">
                            <span>恭喜 <a href="javascript:void(0)"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rewardUserInfo']->value['nick_name'])===null||$tmp==='' ? '' : $tmp);?>
</a> 获得了本期奖品 </span>
                            <p>揭晓时间: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['indianaGoodInfo']->value['reward_time'])===null||$tmp==='' ? '' : $tmp);?>
</p>
                        </div>
                        <div class="userdetailbox">
                            <p>奖品获得者本期总共参与了<em><?php echo count($_smarty_tpl->tpl_vars['luckNumbers']->value);?>
</em>次</p>
                            <div class="numlist">
                                <span>Ta的号码:</span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['luckNumbers']->value, 'luckNumber');
foreach ($_from as $_smarty_tpl->tpl_vars['luckNumber']->value) {
$_smarty_tpl->tpl_vars['luckNumber']->_loop = true;
$__foreach_luckNumber_0_saved = $_smarty_tpl->tpl_vars['luckNumber'];
?>
                                <label <?php if ($_smarty_tpl->tpl_vars['luckNumber']->value['luck_number'] == $_smarty_tpl->tpl_vars['indianaGoodInfo']->value['luck_number']) {?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['luckNumber']->value['luck_number'];?>
</label>
                                <?php
$_smarty_tpl->tpl_vars['luckNumber'] = $__foreach_luckNumber_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            </div>
                        </div>
                    </div>
                    <div class="canyu">
                        <?php if ($_smarty_tpl->tpl_vars['indianaGoodInfo']->value['reward_user_id'] != $_SESSION['USER_ID']) {?>
                        <!---
                            您没有参与本次夺宝
                        -->
                        很遗憾没有中奖,再接再厉!
                        <?php } else { ?>
                        恭喜您,获得本次大奖!
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
                <!---计算公式-->
                <div class="clear"></div>
                <div class="gongshi">
                    <p>·&nbsp;&nbsp;计算公式</p>
                    <div class="gongshibox">
                        <div class="fl red">
                            <span>10000009</span>
                            <em>本期幸运号码</em>
                        </div>
                        <div class="gongshitext">=(</div>
                        <div class="fl">
                            <span>7621752908</span>
                            <label>50个时间求和</label>
                        </div>
                        <div class="gongshitext">%</div>
                        <div class="fl">
                            <span>75</span>
                            <label>该奖品总需人次</label>
                        </div>
                        <div class="gongshitext">)+</div>
                        <div class="fl">
                            <span>10000001</span>
                            <label>原始数</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topright">
                <div class="xyusertitle">最新一期</div>
                <div class="xyuser">
                    <div class="titlebg"></div>
                    <a href="javascript:void(0)">
                        <div class="xyuserpic"><img src="<?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['image'];?>
"> </div>
                        <label>最新一期正在进行,赶快参加吧!</label>

                        <div class="midtext">
                            <em>(第<?php echo $_smarty_tpl->tpl_vars['nextGoodInfo']->value['issue'];?>
期)</em>
                            <?php echo $_smarty_tpl->tpl_vars['goodInfo']->value['name'];?>

                        </div>
                    </a>
                    <div class="midrenshu on">
                        <label>总需:<em><?php echo $_smarty_tpl->tpl_vars['nextGoodInfo']->value['total_inputs'];?>
</em>人次</label>
                        <div class="sprice">
                            <b style="width: 20%"></b>
                        </div>
                        <div class="sprice_user">
                            <b><?php echo $_smarty_tpl->tpl_vars['nextGoodInfo']->value['involved_num'];?>
</b>
                            <strong><?php echo $_smarty_tpl->tpl_vars['nextGoodInfo']->value['total_inputs']-$_smarty_tpl->tpl_vars['nextGoodInfo']->value['involved_num'];?>
</strong>
                        </div>
                        <div class="sprice_xx">
                            <b>已参与人次</b>
                            <strong>剩余人次</strong>
                        </div>
                        <div class="shopnum" item-id="<?php echo $_smarty_tpl->tpl_vars['nextGoodInfo']->value['id'];?>
">
                            <label>我要参与:</label>
                            <b class="reduce">-</b>
                            <input type="tel" name="" id="" value="1" />
                            <b class="plus">+</b>
                            <label>人次</label>
                        </div>
                        <div class="midbtn">
                            <a href="javascript:void(0)" class="ljdb">立即夺宝</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--cont-->
        <div class="detailcontent">
            <div class="conttitle">
                <div class="titleborder">
                    <span class="on">所有参与记录</span>
                    <span>晒单</span>
                    <span>计算结果</span>
                </div>
            </div>
            <!--所有参与记录-->
            <div class="contlist joinhistory" style="display: block">
                <?php if (!empty($_smarty_tpl->tpl_vars['partRecords']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partRecords']->value, 'partRecord', false, 'partTime');
foreach ($_from as $_smarty_tpl->tpl_vars['partTime']->value => $_smarty_tpl->tpl_vars['partRecord']->value) {
$_smarty_tpl->tpl_vars['partRecord']->_loop = true;
$__foreach_partRecord_1_saved = $_smarty_tpl->tpl_vars['partRecord'];
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
$__foreach_record_2_saved = $_smarty_tpl->tpl_vars['record'];
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
                                <a href="javascript:void(0)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['record']->value['user_name'];?>
</a>
                                (<?php echo $_smarty_tpl->tpl_vars['record']->value['ip'];?>
)参与了
                                <em><?php echo $_smarty_tpl->tpl_vars['record']->value['num'];?>
人次</em>
                                <b>所有夺宝号码</b>
                            </p>
                            <?php if (!empty($_smarty_tpl->tpl_vars['orderLuckNumbers']->value[$_smarty_tpl->tpl_vars['record']->value['id']])) {?>
                            <div class="hiddenbox">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderLuckNumbers']->value[$_smarty_tpl->tpl_vars['record']->value['id']], 'tmp');
foreach ($_from as $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->_loop = true;
$__foreach_tmp_3_saved = $_smarty_tpl->tpl_vars['tmp'];
?>
                                <span><?php echo $_smarty_tpl->tpl_vars['tmp']->value['luck_number'];?>
</span>
                                <?php
$_smarty_tpl->tpl_vars['tmp'] = $__foreach_tmp_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['record'] = $__foreach_record_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                    <!---list end--->

                </div>
                <?php
$_smarty_tpl->tpl_vars['partRecord'] = $__foreach_partRecord_1_saved;
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
            <div class="contlist viewpic">
                <?php if (!empty($_smarty_tpl->tpl_vars['displayOrders']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayOrders']->value, 'order');
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_4_saved = $_smarty_tpl->tpl_vars['order'];
?>
                <!---list-->
                <div class="viewlist">
                    <div class="viewpicbox">
                        <a href="javascript:void(0)" target="_blank">
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
                                <label>(第<?php echo $_smarty_tpl->tpl_vars['order']->value['issue'];?>
期)<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value['good']['name'])===null||$tmp==='' ? '' : $tmp);?>
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
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                <!---list end-->

                <div class="xypages down">
                    <a href="javascript:void(0)">下一页</a>
                    <a href="javascript:void(0)" class="on">上一页</a>
                </div>
                <?php }?>
            </div>
                <div class="contlist over">
                    <div class="guize">
                        <div class="guizered">幸运号码<br />计算规则</div>
                        <div class="guizetext">
                            <p><em>1</em>截止该奖品开奖时间点前本站全部奖品的最后50参与时间所代表数值之和；</p>
                            <p><em>2</em>将这50个时间的数值进行求和（得出数值A）（每个时间按时、分、秒、毫秒的顺序组合，如20:15:25.123则为201525123）；</p>
                            <p><em>3</em>数值B为奖品所需人次；；</p>
                            <p><em>4</em>数值A除以数值B得到的余数+原始数10000001，得到最终幸运号码，拥有该幸运号码者，直接获得该奖品；</p>
                            <p><em>5</em>余数是指整数除法中被除数未被除尽部分， 如7÷3 = 2 ......1，1就是余数 ；</p>
                            <p class="on"><em>注</em>消费者在娱乐同时，应该结合自身实际情况进行适当的消费。</p>
                        </div>
                    </div>
                    <div class="listbox">
                        <div class="listth">
                            <span>夺宝时间</span>
                            <label>昵称</label>
                        </div>
                        <div class="listtip">截止该奖品最后夺宝时间【<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['indianaGoodInfo']->value['end_time'],"%Y-%m-%d %H:%i:%s");?>
】最后50条全站参与记录</div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['statPartRecords']->value)) {?>
                        <div class="zuihou">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statPartRecords']->value[0], 'statRow');
foreach ($_from as $_smarty_tpl->tpl_vars['statRow']->value) {
$_smarty_tpl->tpl_vars['statRow']->_loop = true;
$__foreach_statRow_5_saved = $_smarty_tpl->tpl_vars['statRow'];
?>
                            <div class="zuihoulist">
                                <span><?php echo $_smarty_tpl->tpl_vars['statRow']->value['part_date'];?>
</span>
                                <p>
                                    <em><?php echo $_smarty_tpl->tpl_vars['statRow']->value['part_time'];?>
</em>
                                    <i><?php echo $_smarty_tpl->tpl_vars['statRow']->value['part_time_display'];?>
</i>
                                </p>
                                <a href="javascript:void(0)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['statRow']->value['user']['nick_name'];?>
</a>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['statRow'] = $__foreach_statRow_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                        </div>
                        <?php }?>
                        <div class="jisuantext">
                            <label>计算结果</label>
                            <div class="jieguotext">
                                <p>1、求和：7621752908(上面50条参与记录的时间取值相加)</p>
                                <p>2、奖品总需人次：75</p>
                                <p>3、求余：7621752908 % <em>7</em><em>5</em>(奖品所需人次) =<span>8</span> (余数) </p>
                                <p>4、<span>8</span> (余数) + 10000001 = <span>1</span><span>0</span><span>0</span><span>0</span><span>0</span><span>0</span><span>0</span><span>9</span></p>
                                <i>幸运号码：10000009</i>
                            </div>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['statPartRecords']->value[1])) {?>
                        <div class="zuihou noselect">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statPartRecords']->value[1], 'row');
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_6_saved = $_smarty_tpl->tpl_vars['row'];
?>
                            <div class="zuihoulist">
                                <span><?php echo $_smarty_tpl->tpl_vars['row']->value['part_date'];?>
</span>
                                <p>
                                    <em><?php echo $_smarty_tpl->tpl_vars['row']->value['part_time'];?>
</em>
                                </p>
                                <a href="javascript:void(0)" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nick_name'];?>
</a>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                        </div>
                        <?php }?>
                    </div>
                </div>



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
/* {block 'script'} E:\app.xiaomaijr.com\front\views\mall\reward.tpl */
class Block_script_60365816183b749788_88887008 extends Smarty_Internal_Block
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
