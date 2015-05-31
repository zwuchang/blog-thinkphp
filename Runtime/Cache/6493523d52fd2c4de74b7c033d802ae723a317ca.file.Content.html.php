<?php /* Smarty version Smarty-3.1.6, created on 2015-05-30 13:22:30
         compiled from "D:/wamp/www/thinkphp/Admin/View\Manager\Content.html" */ ?>
<?php /*%%SmartyHeaderCode:2521755694916a3c5e6-03107508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6493523d52fd2c4de74b7c033d802ae723a317ca' => 
    array (
      0 => 'D:/wamp/www/thinkphp/Admin/View\\Manager\\Content.html',
      1 => 1432617251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2521755694916a3c5e6-03107508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55694916b9565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55694916b9565')) {function content_55694916b9565($_smarty_tpl) {?><!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>单篇内容</title>
</head>
<style>
	.single_content .title h3{
		padding:0px;
		margin:0px;
	}
	.single_content .author_info{
		padding-top:5px;
		font-style:italic;
		font-size:14px;
		color:#999;
		margin:0;
		padding-bottom:20px;
	}
	
	.single_content .content{
		font-size:15px;
		word-break:break-all
	}
</style>
<body>
	
	<div class='single_content'>
		<div class='title'><h3><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h3></div>
		<div class='author_info'>作者：Mr Yang 发表时间：<?php echo $_smarty_tpl->tpl_vars['info']->value['dates'];?>
, 点击量：<?php echo $_smarty_tpl->tpl_vars['info']->value['hits'];?>
</div>
		<div class='content'><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</div>
		
	</div>
	
</body>
</html><?php }} ?>