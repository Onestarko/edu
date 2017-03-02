<?php /* Smarty version Smarty-3.1.6, created on 2016-07-10 18:05:32
         compiled from "./Home/Tpl\Users\mymessage.html" */ ?>
<?php /*%%SmartyHeaderCode:2225557821dec256160-78608463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358ec8c85ddf3c7cd2751f35ed06c2b7316ac4d0' => 
    array (
      0 => './Home/Tpl\\Users\\mymessage.html',
      1 => 1468054900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2225557821dec256160-78608463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mymes' => 0,
    'um' => 0,
    'mymes1' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57821dec47778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57821dec47778')) {function content_57821dec47778($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\edu\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('../Public/head2.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                       
<div id="sub-header" class="bq_h">
    <div class="container">
        <div class="navbar-header ">
            <h1><a href="__APP__/Index/index">在线物理实验平台</a></h1>
        </div>
        <div class="col-md-6" style="width:80%;">
            <ul class="navbar-left">
                <li><a href="__APP__/Users/myheart">心情</a></li>
                <li class="active"><a href="__APP__/Users/myedu">HOME</a></li>
                <li><a href="__APP__/Users/settings">修改资料</a></li>
                <li><a href="__APP__/Users/photoalbum">我的相册</a></li>
                <li><a href="__APP__/Users/stranger">查看陌生人</a></li>
                <li><a href="__APP__/Test/myscore">我的考试</a></li>
            </ul>
        </div>
    </div>
</div>

         
<div id="main">
    <div class="container">
        <div class="home_module row">
            <div class="container">
                
                <div class="col-md-7">
                    
                    <div class="tt">
                        <h3><?php echo $_SESSION['user']['username'];?>
的留言板</h3>
                    </div>
                    
                    
                    <ul class="list_pb20 mt10 f12">
                        
                        
                        
                       <?php  $_smarty_tpl->tpl_vars['um'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['um']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mymes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['um']->key => $_smarty_tpl->tpl_vars['um']->value){
$_smarty_tpl->tpl_vars['um']->_loop = true;
?>
								<li>
                                    <div class="clearfix">
                                        <div class="pull-left">
											<a href="__APP__/Users/otheredu/uid/<?php echo $_smarty_tpl->tpl_vars['um']->value['vid'];?>
"><img class="avatar_sm" src="__PUBLIC__/Uploads/users/<?php if ($_smarty_tpl->tpl_vars['um']->value['upic']=='1.jpg'){?>0/0.jpg<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['um']->value['visitor'];?>
/<?php echo $_smarty_tpl->tpl_vars['um']->value['upic'];?>
<?php }?>"></a><br/>
                                        </div>
                                        <div class="t_ml_40">
                                            <a href="__APP__/Users/otheredu/uid/<?php echo $_smarty_tpl->tpl_vars['um']->value['vid'];?>
"><?php echo $_smarty_tpl->tpl_vars['um']->value['visitor'];?>
</a> : 
                                            <?php echo $_smarty_tpl->tpl_vars['um']->value['content'];?>

                                            <span class="c999 f12"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['um']->value['addtime'],"%Y-%m-%d");?>
</span>
                                        </div>
                                    </div>
                                </li>
							<?php } ?>
                        
                    </ul>

                    <div class="tc">
                        
                    </div>
                    
                </div>

                
                <div class="col-md-4 col-sm-offset-1">

                    <div class="g_info clearfix bg_f5 p20 mt50">
                        <div class="g_l_l">
                            <a href="__APP__/Users/myedu"><img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/<?php echo $_SESSION['user']['picture'];?>
" class="avatar_md"></a>
                        </div>

                        <div class="g_board t_ml_60">
                            <h3><a href="__APP__/Users/myedu" style="color:#3458b4;"><?php echo $_SESSION['user']['username'];?>
</a></h3>
                            <p></p>
                        </div>
                    </div>
					<div class="mt30">
                        <div class="tt tt_normal">
                            <h4 class="pb10">今日心情</h4>
                            
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['mymes1']->value){?>
                        <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mymes1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
							<div class="null" style="color:green;">
                                <?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>

                            </div>
                        <?php } ?>
                        <?php }else{ ?>
                            <div class="null">
                                还没有今日心情，去 <a href="__APP__/Users/myheart">发布</a> 吧
                            </div>
						 <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../Public/foot2.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>