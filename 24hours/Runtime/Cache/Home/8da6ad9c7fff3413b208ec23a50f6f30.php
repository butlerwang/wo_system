<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>

<!-- header binge -->


<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-timepicker.min.css" type="text/css" />


<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/responsive-tables.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/elements.js"></script>


<!-- header end -->

<script type="text/javascript" src="<?php echo (C("URL")); ?>js/new/unify.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){

	
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});
	
});
</script>
</head>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>
<body>

<!-- header binge -->


<div class="mainwrapper">
    <div class="header">
        <div class="logo">
            <a href="<?php echo (C("ROOT_INDEX")); ?>dashboard.html"><img src="<?php echo (C("URL")); ?>/images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count">4</span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">工单管理</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">工单管理</li>
                        <li><a href=""><span class="icon-tasks"></span> 添加客户 </a></li>
                        <li><a href=""><span class="icon-tasks"></span> 管理客户 </a></li>
                        <li><a href=""><span class="icon-tasks"></span> 客户类型 </a></li>
                        <li><a href=""><span class="icon-tasks"></span> 关闭的工单 </a></li>
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="<?php echo (C("URL")); ?>/images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5><?php echo (session('username')); ?><small>sz24hours@163.com</small></h5>
                            <ul>
                                <li><a href="<?php echo (C("ROOT_INDEX")); ?>editprofile.html">修改资料</a></li>
                                <li><a href="">帐户设置</a></li>
                                <li><a href="<?php echo (C("ROOT_INDEX")); ?>exit_t.html">退出</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    <div class="leftpanel">
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            
            	<li class="nav-header">总后台管理</li>
                <li class="dropdown"><a href=""><span class="iconfa-user"></span> 客户管理</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_CLIENT")); ?>client.html">添加客户</a></li>
                        <li><a href="<?php echo (C("ROOT_CLIENT")); ?>c_manage.html">管理客户</a></li>
                        <li><a href="<?php echo (C("ROOT_CLIENT")); ?>c_status.html">客户类型/权限</a></li>
                    </ul>
                </li>
                
            	<hr/>
            	
            	<li class="nav-header">工单管理</li>
            	<li class="active"><a href="<?php echo (C("ROOT_INDEX")); ?>dashboard.html"><span class="iconfa-laptop"></span> 后台面板</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>forms.html"><span class="iconfa-pencil"></span> 新工单</a></li>
                <li><a href=""><span class="iconfa-hand-up"></span> 受理中的工单</a></li>
                <li><a href=""><span class="iconfa-briefcase"></span> 已解决的工单</a></li>
                <li><a href=""><span class="iconfa-th-list"></span> 关闭的工单</a></li>
                
            	<hr />
                <li class="active"><a href="<?php echo (C("ROOT_INDEX")); ?>dashboard.html"><span class="iconfa-laptop"></span> 后台面板</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>buttons.html"><span class="iconfa-hand-up"></span> 按钮 &amp; 字体</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-pencil"></span> 表单样式</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_INDEX")); ?>forms.html">个性样式</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>wizards.html">步骤提交样式</a></li>
                        <li><a href="wysiwyg.html">编辑器</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-briefcase"></span> UI元素 &amp; 部件</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_INDEX")); ?>elements.html">组件</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>bootstrap.html">Bootstrap 组件</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>boxes.html">Headers &amp; 盒子</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> 表格</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_INDEX")); ?>table-static.html">静态表</a></li>
                        <li class="dropdown"><a href="<?php echo (C("ROOT_INDEX")); ?>table-dynamic.html">动态表</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>media.html"><span class="iconfa-picture"></span> 上传（精美样式）</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>typography.html"><span class="iconfa-font"></span> 排版</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>charts.html"><span class="iconfa-signal"></span> 图形和图表</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>messages.html"><span class="iconfa-envelope"></span> 消息</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>calendar.html"><span class="iconfa-calendar"></span> 日历</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> 其它页面</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_INDEX")); ?>404.html">404 错误页面</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>editprofile.html">编辑配置文件</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>invoice.html">发票页面</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>discussion.html">讨论页</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->
    </div><!-- leftpanel -->

<!-- header end -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="<?php echo (C("ROOT_INDEX")); ?>dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo (C("ROOT_INDEX")); ?>dashboard.html">后台面板</a> <span class="separator"></span></li>
            <li>客户管理</li>
            
            <li class="right">
                <a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Color Skins</a>
                <ul class="dropdown-menu pull-right skin-color">
                    <li><a href="default">Default</a></li>
                    <li><a href="navyblue">Navy Blue</a></li>
                    <li><a href="palegreen">Pale Green</a></li>
                    <li><a href="red">Red</a></li>
                    <li><a href="green">Green</a></li>
                    <li><a href="brown">Brown</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="pageheader">
            <form action="results.html" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form>
            <div class="pageicon"><span class="iconfa-plus"></span></div>
            <div class="pagetitle">
				<h5 style="height:10px;"></h5>
                <h1>添加类型/权限</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                        <div>
                            <form action="editprofile.html" id='form01' class="editprofileform" method="post">
                               
                                <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">添加类型/权限</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <label>账号：</label>
                                            <input type="text" name="userid" id="userid" class="input-xlarge" value="" />
                                        </p>
                                        <p>
                                            <label>密码：</label>
                                            <input type="password" name="pwd" id="pwd" class="input-xlarge" value="" />
                                        </p>
                                        <p>
                                            <label>确认密码：</label>
                                            <input type="password" name="pwd01" id="pwd01" class="input-xlarge" value="" />
                                        </p>
                                        <p>
                                            <label>负责人：</label>
                                            <input type="text" name="phone" id="phone" class="input-xlarge" value="" />
                                        </p>
                                        <p>
                                            <label>类型：</label>
                                            <select name="u_status">
                                            	<option></option>
                                            	<option></option>
                                            	<option></option>
                                            </select>
                                        </p>
                                        <p>
                                            <label>权限：</label>
                                            <select name="limits">
                                            	<option></option>
                                            	<option></option>
                                            	<option></option>
                                            </select>
                                        </p>
                                        
<!--                                         <p> -->
<!--                                             <input type="checkbox" /> 短信通知 &nbsp;&nbsp;&nbsp;&nbsp; -->
<!--                                             <input type="checkbox" /> Email 通知 -->
<!--                                         </p> -->
                                    </div>
                                </div>
                                
                                <p>
                                	<a href="javascript:void();" class="btn btn-primary" onclick="update_t();"><small>提交信息</small></a>
                                </p>
                            </form>
                        </div><!--span8-->
                    </div><!--row-fluid-->
                  
                  
        		 <!-- footer binge -->
								<div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2015. <a href="http://www.sz24hours.com" target="_blank">www.sz24hours.com.</a> All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://www.sz24hours.com/" target="_blank">24小时网络科技有限公司</a></span>
                    </div>
                </div><!--footer-->
				
				<!-- footer end -->
                
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>