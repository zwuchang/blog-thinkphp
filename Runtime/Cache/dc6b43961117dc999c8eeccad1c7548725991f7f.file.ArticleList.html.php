<?php /* Smarty version Smarty-3.1.6, created on 2015-05-30 13:24:11
         compiled from "D:/wamp/www/thinkphp/Admin/View\Article\ArticleList.html" */ ?>
<?php /*%%SmartyHeaderCode:86215569490b102cf5-06411847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6b43961117dc999c8eeccad1c7548725991f7f' => 
    array (
      0 => 'D:/wamp/www/thinkphp/Admin/View\\Article\\ArticleList.html',
      1 => 1432963447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86215569490b102cf5-06411847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5569490b49b2a',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5569490b49b2a')) {function content_5569490b49b2a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章列表</title>
<link rel="stylesheet" href="<?php echo @ADMIN_SITE_SOURCE_URL;?>
css/admin.css">
<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/jquery-1.11.1.js'></script>
<script src='<?php echo @ADMIN_SITE_SOURCE_URL;?>
js/admin.js'></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
.STYLE4 {
	color: #03515d;
	font-size: 12px;
}
-->
</style>


<script>
var  highlightcolor='#c1ebff';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}
</script>

</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3"><form action='<?php echo @__MODULE__;?>
/Article/ArticleList' method='post'>你当前的位置</span>：[文章中心]-[文章列表]<input type='text' class='search' name='searchKey'><input type='submit' value='搜索'></form></td>
              </tr>
            </table></td>
            <td width="54%"><table border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td width="60"><table width="87%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center">
                      <input type="checkbox" name="checkbox62" value="checkbox" />
                    </div></td>
                    <td class="STYLE1"><div align="center">全选</div></td>
                  </tr>
                </table></td>
                <td width="60"><table width="90%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/22.gif" width="14" height="14" /></div></td>
                    <td class="STYLE1"><div align="center"><a href='<?php echo @__MODULE__;?>
/Article/ArticlePublish'>新增</a></div></td>
                  </tr>
                </table></td>
                <td width="60"><table width="90%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/33.gif" width="14" height="14" /></div></td>
                    <td class="STYLE1"><div align="center"><a href='#'>修改</a></div></td>
                  </tr>
                </table></td>
                <td width="52"><table width="88%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="STYLE1"><div align="center"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/11.gif" width="14" height="14" /></div></td>
                    <td class="STYLE1"><div align="center"><a href='#'>删除<a></div></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="16"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_12.gif">&nbsp;</td>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="b5d6e6" onmouseover="changeto()"  onmouseout="changeback()">
          <tr>
            <td width="3%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center">
              <input type="checkbox" name="checkbox" value="checkbox" />
            </div></td>
            <td width="3%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">序号</span></div></td>
            <td width="32%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">文章标题</span></div></td>
            <td width="20%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">文章内容</span></div></td>
            <td width="12%" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">发表时间</span></div></td>
            <td width="8%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">作者</span></div></td>
            <td width="6%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">点击量</span></div></td>
            <td width="17%" height="22" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/bg.gif" bgcolor="#FFFFFF" class="STYLE1"><div align="center">基本操作</div></td>
          </tr>
      
		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>

          <tr>
            <td height="20" bgcolor="#FFFFFF"><div align="center">
              <input type="checkbox" name="checkbox2" value="checkbox" />
            </div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE1">
              <div align="center"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</div>
            </div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span></div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">
				<a  target='information' href="<?php echo @__MODULE__;?>
/Article/ArticleListOne/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">点此查看全文<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['v']->value['content'], $tmp);?>
</a></span></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><span class="STYLE1"><?php echo $_smarty_tpl->tpl_vars['v']->value['dates'];?>
</span></div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1">Mr Yang</span></div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE1"><?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</span></div></td>
            <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE4"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/edt.gif" width="16" height="16" /><a href='http://<?php echo @HOST;?>
/3/form/edit.php?edit=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>编辑</a><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/del.gif" width="16" height="16" /><a href="<?php echo @__MODULE__;?>
/Article/del/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></span></div></td>
          </tr>
         
          <?php } ?>
		  
		  
		 
		  
		 
		  
		 
		 
        </table></td>
        <td width="8" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="<?php echo @ADMIN_SITE_SOURCE_URL;?>
img/tab/tab_18.gif" width="12" height="35" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="STYLE4"><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value;?>
</td> 
          </tr>
        </table></td>
        
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
<?php }} ?>