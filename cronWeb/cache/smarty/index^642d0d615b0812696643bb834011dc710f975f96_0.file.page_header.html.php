<?php /* Smarty version 3.1.27, created on 2016-09-26 16:20:56
         compiled from "/mnt/outsource/timer/cronWeb/application/views/common/page_header.html" */ ?>
<?php
/*%%SmartyHeaderCode:23241624157e8da6812a051_15010169%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642d0d615b0812696643bb834011dc710f975f96' => 
    array (
      0 => '/mnt/outsource/timer/cronWeb/application/views/common/page_header.html',
      1 => 1474877659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23241624157e8da6812a051_15010169',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e8da681c8214_07547572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e8da681c8214_07547572')) {
function content_57e8da681c8214_07547572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23241624157e8da6812a051_15010169';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link href="/public/tree/bootstrap.css" rel="stylesheet">
    <link href="/public/tree/bootstrap-responsive.css" rel="stylesheet">
    <link href="/public/tree/base.css" rel="stylesheet">
    <link href="/public/tree/sweet-alert.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="/public/tree/jquery.js"><?php echo '</script'; ?>
>
  	<?php echo '<script'; ?>
 src="/public/tree/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/tree/sweet-alert.min.js"><?php echo '</script'; ?>
>
  	<style type="text/css">body{font-family: 微软雅黑;}</style>
    <title>计划任务系统</title>
  </head>
  <body style="padding:10px;">

<div id="navbar-example" class="navbar navbar-static">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="brand" href="/">计划任务系统</a>

        <ul class="nav pull-right">
          <li id="fat-menu" class="dropdown">
            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo @constant('U_REALNAME');?>

              <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/">
                  返回主菜单
                </a>
              </li>
              <?php if (@constant('U_ROLE') == 2) {?>
              <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/user/index/">
                  用户管理
                </a>
              </li>
              <?php }?>
              <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/index/?did=<?php echo @constant('UID');?>
">
                  我的任务
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/index/alarm/?did=<?php echo @constant('UID');?>
">
                  我的报警日志
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/login/logout/">
                  退出登陆
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</div><?php }
}
?>