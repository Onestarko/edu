<?php /* Smarty version Smarty-3.1.6, created on 2016-09-18 16:11:53
         compiled from "./Admin/Tpl\Video\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2884257de4c49cd6353-92327204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a30ec5933b5ee475b26a1e5b4bdf449110bc902d' => 
    array (
      0 => './Admin/Tpl\\Video\\edit.html',
      1 => 1454382011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2884257de4c49cd6353-92327204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57de4c49e965b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57de4c49e965b')) {function content_57de4c49e965b($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/update/navTabId/listvideo/callbackType/closeCurrent" class="pageForm required-validate" 
        onsubmit="return validateCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>视频名：</dt>
                <dd><input type="text" class="required"  style="width:100%" name="videoname" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['videoname'];?>
"/></dd>
            </dl>
            <dl>
				<dt>视频状态：</dt>
                <dd>
                    <select name="status" class="combox">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==1){?>selected<?php }?>>新添加</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==2){?>selected<?php }?>>在线</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['vo']->value['status']==3){?>selected<?php }?>>下线</option>
                    </select>
                </dd>
            </dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

<?php }} ?>