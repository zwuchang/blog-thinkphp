<?php /* Smarty version Smarty-3.1.6, created on 2015-05-30 16:23:09
         compiled from "D:/wamp/www/thinkphp/Admin/View\Article\ArticlePublish.html" */ ?>
<?php /*%%SmartyHeaderCode:290745569736d9a1c33-99304178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c35458100c35ff05fca0a465156c5da72bac795' => 
    array (
      0 => 'D:/wamp/www/thinkphp/Admin/View\\Article\\ArticlePublish.html',
      1 => 1432619329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290745569736d9a1c33-99304178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5569736da8e31',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5569736da8e31')) {function content_5569736da8e31($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加文章</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_SITE_SOURCE_URL;?>
css/admin.css">
	<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/jquery-1.11.1.js'></script>
	<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/admin.js'></script>
	<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/ueditor/ueditor.all.js'></script>
	<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/ueditor/ueditor.config.js'></script>
</head>
<body>
		
	<div class='publish'>
		<div class='publish_t'>
			<div class='left'></div>
			<div class='center'>你当前的位置：[文章中心]-[发表文章]</div>
			<div class='right'></div>
		</div>
		<div class='publish_c'>
		
			<form action='<?php echo @__MODULE__;?>
/Article/ArticlePublish' method='post'>
				<div>文章标题：<input type="text" class='changeinputwidth' name="title" id=""></div>
				<script type="text/plain" id="editor" name="content"></script>
				<div><input type="submit" value="发表" name='publish'></div>
			</form>
			
		</div>
		
		
	</div>
</body>
</html><?php }} ?>