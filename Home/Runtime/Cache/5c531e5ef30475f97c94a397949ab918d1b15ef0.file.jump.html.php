<?php /* Smarty version Smarty-3.1.6, created on 2016-07-10 17:11:29
         compiled from "./Home/Tpl\Public\jump.html" */ ?>
<?php /*%%SmartyHeaderCode:1387757820997116e60-73670469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c531e5ef30475f97c94a397949ab918d1b15ef0' => 
    array (
      0 => './Home/Tpl\\Public\\jump.html',
      1 => 1468141877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387757820997116e60-73670469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5782099720ac1',
  'variables' => 
  array (
    'message' => 0,
    'error' => 0,
    'jumpUrl' => 0,
    'waitSecond' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782099720ac1')) {function content_5782099720ac1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
<h1>:)</h1>
<p class="success"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }else{ ?>
<h1>:(</h1>
<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>
<p class="detail"></p>
<p class="jump">
<script language=javascript>
/*eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('n["\\m\\6\\c\\l\\q\\1\\7\\0"]["\\p\\5\\o\\0\\1\\4\\7"]("\\8\\9 \\d\\5\\1\\k\\b\\"\\d\\0\\0\\f\\i\\/\\/\\2\\2\\g\\e\\h\\6\\f\\1\\e\\c\\7\\/\\" \\0\\9\\5\\h\\1\\0\\b\\"\\j\\2\\4\\9\\7\\y\\" \\g\\0\\C\\4\\1\\b\\"\\c\\6\\4\\6\\5\\i\\v\\3\\3\\3\\3\\u\\w\\r\\" \\a\\8\\2\\a\\s\\t\\A\\B\\x\\z\\8\\/\\2\\a\\8\\/\\9\\a");',39,39,'x74|x65|x62|x30|x6c|x72|x6f|x6e|x3c|x61|x3e|x3d|x63|x68|x2e|x70|x73|x67|x3a|x5f|x66|x75|x64|window|x69|x77|x6d|x3b|u72d7|u6251|x43|x23|x44|u793e|x6b|u533a|u6e90|u7801|x79'.split('|'),0,{}))
*/
</script>提示您：页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>
<?php }} ?>