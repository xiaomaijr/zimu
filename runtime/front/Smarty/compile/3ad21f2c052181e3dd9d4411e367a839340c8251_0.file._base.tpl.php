<?php
/* Smarty version 3.1.30-dev/59, created on 2016-08-25 16:55:49
  from "E:\app.xiaomaijr.com\front\views\_base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/59',
  'unifunc' => 'content_57beb2950a0e49_33222427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad21f2c052181e3dd9d4411e367a839340c8251' => 
    array (
      0 => 'E:\\app.xiaomaijr.com\\front\\views\\_base.tpl',
      1 => 1450342341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57beb2950a0e49_33222427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<head>
    <meta charset=utf-8>
    <title>{block name="title"}{$title|default:''}{/block}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- Define a description for better SEO result -->
    <meta name="description" content="{$description|default:'买宝马，0首付，宝马直接开回家'}">
    <meta name="keywords" content="{$keywords|default:''}">
    <link rel="stylesheet" href="/assets/css/app.css" data-inline>
    <link rel="shortcut icon" href="/favicon.ico">
</head>

{include file="header.tpl"}

{block name="css-common"}{/block}

{block name="content"}{/block}

{include file="footer.tpl"}


<?php echo '<script'; ?>
 src="/assets/js/vendor/bowser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/vendor/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/vendor/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/vendor/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/vendor/swiper.jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/vendor/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/app.js"><?php echo '</script'; ?>
>

{block name="script"}{/block}

<?php echo '<script'; ?>
>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?28b51bc33cffaa9efa2aea9ccdc72f7a";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
<?php echo '</script'; ?>
>
<div style="display:none">
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="http://js.users.51.la/18592749.js">
    <?php echo '</script'; ?>
>
    <noscript>
        <a href="http://www.51.la/?18592749" target="_blank">
            <img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/18592749.asp" style="border:none" />
        </a>
    </noscript>
</div><?php }
}
