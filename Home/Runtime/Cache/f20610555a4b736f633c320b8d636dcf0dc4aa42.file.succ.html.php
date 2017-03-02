<?php /* Smarty version Smarty-3.1.6, created on 2016-09-18 16:11:28
         compiled from "./Home/Tpl\Video\succ.html" */ ?>
<?php /*%%SmartyHeaderCode:1013357de4c308d92c7-63043951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20610555a4b736f633c320b8d636dcf0dc4aa42' => 
    array (
      0 => './Home/Tpl\\Video\\succ.html',
      1 => 1467963426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013357de4c308d92c7-63043951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57de4c30a1c23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57de4c30a1c23')) {function content_57de4c30a1c23($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>实验资源添加</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    
        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simple.css">

        <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>

        
    </head>
    <body>
    <div id="browser"></div>
 
    <?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<div id="sub-header" class="group_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="">视频库</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <li id="navbarli" class="active"><a href="javascript:void(0)" class="videolist">视频精选</a></li>
                
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="navbar-left">
                <li><a href="__URL__/index/uid/<?php echo $_SESSION['user']['id'];?>
"><i class="icon-list"></i> 我上传的</a></li>
                <li><a href="__URL__/index/collid/<?php echo $_SESSION['user']['id'];?>
"><i class="icon-list"></i> 我收藏的</a></li>
            </ul>
        </div>
    </div>
</div>


        
<div id="main">
    <div class="container">
        <div class="home_module m_movie">
            <div class="container">
                <!-- 左侧 -->
                <div class="col-md-8">

                    <div class="ui three large steps col-md-offset-3 col-md-8 p0 mb20 row" style="float:none">
                        <div class="ui active step">填写信息</div>
                        <div class="ui active step">上传视频</div>
                        <div class="ui active step">等待审核</div>
                    </div>

                    
                        <div class="form-group pt20">
                            <div class="col-md-8  col-md-offset-3 tc">
                                <a href="__URL__/index"><button class="btn btn-primary btn-lg btn-block">视频上传成功，等待审核</button></a>
                            </div>
                        </div>
                    

                </div>

                <!-- 右侧 -->
                <div class="col-md-4">
                    <div class="bg_f5 p20 mt40 f12">
                        上传资源，即表示您已同意<a data-toggle="modal" href="#myModal">上传服务条款</a>，请勿上传垃圾等不合理资源。
                        <br/>
                        <i>如资源上传失败,请与我们管理员联系 996204024@qq.com</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">网上传服务条款</h4>
            </div>
            <div class="modal-body">
                在线物理实验平台郑重提醒您:<br><br>
                为响应国家九部委联合开展深入整治互联网和在线教学的号召，营造一个健康便捷的网络教学环境，给大家一个和谐的家园。<br>
                <ul class="list_pb5 f12 p10">
                    <li>不得上传任何有违国家法律法规的资源。</li>
                    <li>不得上传具有色情内容的资源。</li>
                    <li>不得上传内容低俗，格调不高的资源。</li>
                    <li>不得上传具有色情诱导性内容的资源。</li>
                    <li>不得在标题、简介和标签中出现任何具有低俗色情含义的字眼。</li>
                    <li>不含有涉及版权问题的资源。</li>
                </ul>
                如果您上传了这些内容，我们将一律予以删除，我们希望我们最珍贵的网友们，理解并监督我们。
            </div>
            
        </div>
    </div>
</div>



    <?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
</body></html>
<?php }} ?>