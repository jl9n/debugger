<?php /* Smarty version Smarty-3.1.6, created on 2014-03-03 21:59:15
         compiled from "./Home/Tpl\Users\login.html" */ ?>
<?php /*%%SmartyHeaderCode:987453148ab3014c92-33876822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb86b5f52faad6893408a91f10736e2d8252303' => 
    array (
      0 => './Home/Tpl\\Users\\login.html',
      1 => 1393439745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '987453148ab3014c92-33876822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53148ab329cbe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53148ab329cbe')) {function content_53148ab329cbe($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        

        <title>登陆_E-Sch教学网</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
           
        <link rel="stylesheet" type="text/css" href=".__PUBLIC__/css/simple.css">

        <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
        
        
    </head> 
   
    
    <body style="">
    <div id="browser"></div>
    


        <div id="header">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="__APP__/Index/index"><img src="__PUBLIC__/images/logo-bq.png"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse" style="height:50px;line-height:50px">

                        <ul class="nav navbar-nav g_nav" style="margin-top:15px">
                            <li><a href="__APP__/Video/index">视频</a></li>
                            <li><a href="__APP__/Note/index">手记</a></li>
                            <li><a href="__APP__/Library/index">军火库</a></li>
                            <li><a href="__APP__/Message/index">贴吧</a></li>
                            <?php if ($_SESSION['user']){?>
                            <li><a href="__APP__/Test/index">考试</a></li>
                            <?php }else{ ?>
                            <li><a href="javascript:alert('请先登录！')">考试</a></li>
                            <?php }?>
                        </ul>

                        <ul class="nav navbar-nav navbar-right" id="userinfo" style="margin-top:15px">

                            <?php if ($_SESSION['user']){?>
                            <li><a href="__APP__/Message/mynews">提醒(<?php echo $_SESSION['user']['hfnum'];?>
)</a></li>
                            <li class="navbar-nav-user">
                                <a class="user-avatar" href="__APP__/Users/myedu">
                                    <img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" <?php if ($_SESSION['user']['picture']=='1.jpg'){?>src="__PUBLIC__/Uploads/users/0/0.jpg"<?php }else{ ?>src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/s_<?php echo $_SESSION['user']['picture'];?>
"<?php }?> class="avatar_sm">　<?php echo $_SESSION['user']['username'];?>
</a>
                                </a>
                                <div class="dropdown">
                                    <a href="__APP__/Test/index"><i class="icon-user"></i> 考试</a>
                                    <a href="__APP__/Users/settings"><i class="icon-wrench"></i> 设置</a>
                                    <a href="__APP__/Users/loginout"><i class="icon-signout"></i> 退出</a>
                                </div>
                            </li>
                            <?php }else{ ?>
                            <li><a href="__APP__/Index/index">首页</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
<div id="main" class="u_s_page">
    <div class="container">

        <div class="col-md-6 col-md-offset-1">
            <div class="simple_page_inner bg_fff">
                
                <form id="login_form" class="form-horizontal" action="__APP__/Users/dologin" method="post" onsubmit="return doCheck();">
                        <input id="csrf_token" name="csrf_token" type="hidden" value="None">
                        <legend class="tc f30 mb20">欢迎回来</legend>
                        <div class="form-item">
                            <label class="control-label" for="email">邮箱/用户名</label>
                            <div class="form-item-in">
                                <input class="form-control input-lg" id="email" name="email" size="30" type="text" placeholder="用户名/邮箱" datatype="e" errormsg="邮箱格式错误" onblur="checkName()" nullmsg="还没填呢" value="">
                                <span id="tishi1" class="Validform_checktip">请输入正确的用户名/邮箱</span>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="control-label" for="pass">密码</label>
                            <div class="form-item-in">
                                <input class="form-control input-lg" id="pass" name="password" size="30" type="password" placeholder="密码" datatype="*6-16" errormsg="密码范围在6~16位之间" onblur="checkPass()" nullmsg="还没填呢" value="">
                                <span id="tishi2" class="Validform_checktip"></span>
                            </div>
                        </div>

                        <div class="form-item">
                            <input type="submit" id="sub" class="btn btn-block btn-lg btn-success"  value="登 录">
                        </div>
                    </form>
                
            </div>
        </div>

		
		<script type="text/javascript">
			function doCheck(){
				return checkName() && checkPass();
			}
			//验证用户名方法
			function checkName(){
				var name = $("#email").val();
				
				$.ajax({
					data:{'name':name},
					dataType:'text',
					url:'__APP__/Users/checkname',
					type:'post',
					success:function(res){
						if(res=='ok'){
							$("#email").css("background","#fff");
							$("#tishi1").text("用户名/邮箱输入正确！");
							$("#tishi1").css("color","#999");
							return true;
						}else{
							$("#email").css("background","#e76e66");
							$("#tishi1").text("用户名/邮箱输入不正确！");
							$("#tishi1").css("color","#e76e66");
							$("#sub").attr("disabled","1");
							return false;
						}
					},
				});
				
				
				if(name.length==0 || name.trim()==''){

					$("#email").css("background","#e76e66");
					$("#tishi1").text("用户名/邮箱输入不正确！");
					$("#tishi1").css("color","#e76e66");
					$("#sub").attr("disabled","1");
					return false;
				}
				return true;
			}
			
			//验证密码方法
			function checkPass(){
				var name = $("#email").val();
				var pass = $("#pass").val();
				//alert(pass);
				$.ajax({
					data:{'pass':pass,'name':name},
					dataType:'text',
					url:'__APP__/Users/checkpass',
					type:'post',
					success:function(res){
						if(res=='ok'){
							$("#pass").css("background","#fff");
							$("#tishi2").text("密码正确！");
							$("#tishi2").css("color","#999");
							$("#sub").attr("disabled",null);
							return true;
						}else{
							$("#pass").css("background","#e76e66");
							$("#tishi2").text("密码输入错误！");
							$("#tishi2").css("color","#e76e66");
							$("#sub").attr("disabled","1");
							return false;
						}
					},
				});
		
				if(pass.length==0 || pass.trim()==''){

					$("#pass").css("background","#e76e66");
					$("#tishi2").text("密码输入错误！");
					$("#tishi2").css("color","#e76e66");
					$("#sub").attr("disabled","1");
					return false;
				}
				return true;
			}
		</script>
		
		
		
		
		
		
		
		
		
        <div class="col-md-4">
            <div class="simple_page_inner bg_fff">
                <p class="mb30">
                    如果没有注册，请先 <br>
                    <a href="__APP__/Users/index" class=" mt10 btn btn-lg btn-primary">注 册</a>
                </p>
                <dl class="oauth_login">
                    <dt>你还可以用第三方帐号直接登录</dt>
                    <dd class="oauth_weibo"><a href="__APP__/Users/login/sina"><i class="icon icon-weibo"></i> <span>新浪微博登录</span></a></dd>
                    <dd class="oauth_qq"><a href="__APP__/Users/login/qq"><i class="icon icon-qq"></i> <span>QQ帐号登录</span></a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<a id="goTop" href="javascript:void(0)" title="返回顶部" style="display: none;"><i class="icon-angle-up"></i></a>
        <div id="footer">
            <div class="container">
                <div class="col-md-7" style="margin-top:10px;width:500px">
                    <a href="">关于我们</a>
                    <a href="">联系我们</a>
                    <a href="">免责声明</a>
                    <a href="">作品授权</a>
                    <a href="">意见反馈</a>
                </div>
                <div class="col-md-5" style="float:right;font-size:13px;width:500px;margin-top:5px">
                    © 2014 Eschool.com. all rights reserved. 京公网安备11010802012355号
                </div>
            </div>
        </div>

        <div class="modal fade" id="sys-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/application.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/retina.js"></script>
 


 








			
    
</body></html>
<?php }} ?>