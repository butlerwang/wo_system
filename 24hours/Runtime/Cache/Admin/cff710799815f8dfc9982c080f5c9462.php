<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>

<link href="<?php echo (C("URL")); ?>baidubianjiqi/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

<!-- header binge -->


<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (C("URL")); ?>css/responsive-tables.css">


<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/bootstrap-timepicker.min.js"></script>
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
<script type="text/javascript" src="<?php echo (C("URL")); ?>js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo (C("URL")); ?>baidubianjiqi/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo (C("URL")); ?>baidubianjiqi/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo (C("URL")); ?>baidubianjiqi/umeditor.min.js"></script>
<script type="text/javascript" src="<?php echo (C("URL")); ?>baidubianjiqi/lang/zh-cn/zh-cn.js"></script>
<style type="text/css">

.comments li:last-child .comment p{margin-top:15px;}

</style>
</head>

<body>

<div class="mainwrapper">
    	
   <!-- header binge -->
	

<div class="mainwrapper">
    <div class="header">
        <div class="logo">
            <a href="<?php echo U('Console/dashboard');?>"><img src="<?php echo (C("URL")); ?>/images/logo.png" alt="" /></a>
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
                            <h5><?php echo (session('userid')); ?><small>sz24hours@163.com</small></h5>
                            <ul>
                                <li><a href="<?php echo U('Index/editprofile');?>">修改资料</a></li>
                                <li><a href="">帐户设置</a></li>
                                <li><a href="<?php echo U('Index/exit_t');?>">退出</a></li>
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
            <?php if($limits == '1'): ?><!-- 管理员 -->
            	<li class="nav-header">总后台管理</li>
<!--             	<li class="active"><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-question-sign"></span> 工单</a></li> -->
                <li class="dropdown <?php echo ($data01["kh_one"]); ?>"><a href=""><span class="iconfa-user"></span> 客户管理</a>
                	<ul <?php echo ($data01["kh_block"]); ?>>
                    	<li <?php echo ($data01["kh_two01"]); ?>><a href="<?php echo U('Admin/client');?>">添加客户</a></li>
                        <li <?php echo ($data01["kh_two02"]); ?>><a href="<?php echo U('Admin/c_manage');?>">管理客户</a></li>
                        <li <?php echo ($data01["kh_two03"]); ?>><a href="<?php echo U('Admin/c_status');?>">客户类型</a></li>
                    </ul>
                </li>
                
                <li class="dropdown <?php echo ($data["sh_one"]); ?>"><a href=""><span class="iconfa-comments"></span> 售后人员管理</a>
                	<ul <?php echo ($data["sh_block"]); ?>>
                    	<li <?php echo ($data["sh_two01"]); ?>><a href="<?php echo U('Admin/service');?>">添加售后人员</a></li>
                        <li <?php echo ($data["sh_two02"]); ?>><a href="<?php echo U('Admin/s_manage');?>">管理售后人员</a></li>
                    </ul>
                </li>
                
                <li class="dropdown <?php echo ($data02["sh_one"]); ?>"><a href=""><span class="iconfa-comments"></span> 工作时间</a>
                	<ul <?php echo ($data02["sh_block"]); ?>>
                    	<li <?php echo ($data02["sh_two01"]); ?>><a href="<?php echo U('Admin/office');?>">上下班时间</a></li>
                        <li <?php echo ($data02["sh_two02"]); ?>><a href="<?php echo U('Admin/office');?>">放假时间</a></li>
                    </ul>
                </li><?php endif; ?>
            
            <?php if($limits == '2'): ?><!-- 售后人员 -->
            	<li class="nav-header">售后后台管理</li>
                <li <?php echo ($data["member02"]); ?>><a href="<?php echo U('Client/pending');?>"><span class="iconfa-pencil"></span> 待处理的工单(<?php echo ($count); ?>)</a></li>
                <li <?php echo ($data["member01"]); ?>><a href="<?php echo U('Client/underway');?>"><span class="iconfa-refresh"></span> 处理中的工单</a></li>
                <li><a href="<?php echo U('Client/resolved');?>"><span class="iconfa-briefcase"></span> 已处理的工单</a></li><?php endif; ?>
            <?php if($limits == '3'): ?><li class="nav-header">工单管理</li>
                <li <?php echo ($data["active01"]); ?>><a href="<?php echo U('Client/forms');?>"><span class="iconfa-pencil"></span> 新工单</a></li>
                <li <?php echo ($data["member02"]); ?>><a href="<?php echo U('Client/pending');?>"><span class="iconfa-pencil"></span> 待处理的工单</a></li>
                <li <?php echo ($data["member01"]); ?>><a href="<?php echo U('Client/underway');?>"><span class="iconfa-refresh"></span> 处理中的工单</a></li>
                <li><a href="<?php echo U('Client/resolved');?>"><span class="iconfa-briefcase"></span> 已处理的工单</a></li>
                <li><a href="<?php echo U('Client/close');?>"><span class="iconfa-th-list"></span> 关闭的工单</a></li><?php endif; ?>
            	<hr/>
            	<li <?php echo ($set["active"]); ?>><a href="<?php echo U('Console/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li>
            	
                
                <li><a href="<?php echo U('Index/buttons');?>"><span class="iconfa-hand-up"></span> 按钮 &amp; 字体</a></li>
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
                <li><a href="<?php echo U('Client/messages');?>"><span class="iconfa-envelope"></span> 消息</a></li>
                <li><a href="<?php echo (C("ROOT_INDEX")); ?>calendar.html"><span class="iconfa-calendar"></span> 日历</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> 其它页面</a>
                	<ul>
                    	<li><a href="<?php echo U('Index/404');?>">404 错误页面</a></li>
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
            <li><a href="<?php echo U('Console/dashboard');?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="<?php echo U('Console/dashboard');?>">后台面板</a> <span class="separator"></span></li>
            <li><a href="<?php echo ($data["url"]); ?>"><?php echo ($data["case"]); ?></a><span class="separator"></span></li>
            <li>工单处理详细页</li>
        </ul>
        
        <div class="pageheader">
            <form action="results.html" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form>
            <div class="pageicon"><span class="iconfa-comments-alt"></span></div>
            <div class="pagetitle">
                <h5 style="height:10px;"></h5>
                <h1>工单处理详细页</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            <div class="row-fluid">
                
                <div class="span9">
                    
                    <h2 class="topictitle"><?php echo ($result_arr["w_title"]); ?></h2>
                    
            <div class="topicpanel">
                <div class="topic-content">
                    <h5><a href=""><strong><?php echo ($result_arr["u_uname"]); ?></strong></a></h5>
                    <p><?php echo ($result_arr["w_issue"]); ?></p>
                    
                    <p class="date"> 发布时间 ：<?php echo (date("Y-m-d",$result_arr["w_puddate"])); ?></p>
                </div><!--topic-content-->
            </div><!--topicpanel-->
            <br />
            
            <?php if($result_arr['wc_sataus'] != 1): if(empty($list)): else: ?>
            			<div style="border:1px solid #ddd;">
				            <h3 class="widgettitle">回复</h3>
			            		
			            	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['limits'] == 2): ?><div style="background:#FF8888;padding:15px;" >
			           				 	<ul class="comments" style="margin-left:15%;"><?php endif; ?>
					            
		                    	<?php if($vo['limits'] == 3): ?><div style="background:#fcfcfc;padding:15px;" >
			           				 	<ul class="comments" style="margin-left:20px;" ><?php endif; ?>	
		<!--                     	 style="background:#fcfcfc;border:1px solid #ddd;" -->
					                    <li>
					                        <div class="comment">
					                            <div class="commentauthor">
					                                	
					                                <strong><?php echo ($vo["uname"]); ?></strong> <span class="commenttime"></span>
					                                
					                               	<?php if($data['limits'] == 3 and $vo['limits'] == 2): ?>- <a href="#reply" class="commentreply">追加</a><?php endif; ?>
					                                <?php if($data['limits'] == 2 and $vo['limits'] == 3): ?>- <a href="#reply" class="commentreply">回复</a><?php endif; ?>
					                            </div>
					                            <div style="margin:20px 20px;" class="zhiding">
						                            <?php echo ($vo["g_reply"]); ?>
						                            <p style="color:#999;"> 
					                            	<?php if($vo['limits'] == 2): ?>追加时间 ：<?php endif; ?>
					                                <?php if($vo['limits'] == 3): ?>回复时间 ：<?php endif; ?>
					                            	<?php echo (date("Y-m-d",$vo["repdate"])); ?></p>
					                            </div>
					                        </div>
					                    </li>
						            </ul>
						            
					            </div><?php endforeach; endif; else: echo "" ;endif; ?>
				            
				            <p class="btn btn-block">已显示全部</p>
				            <a href="" class="btn btn-block">查看更多</a>
				       </div>
		            
		            <br /><br /><br /><?php endif; ?>   
            	     
            	<form action="" method="post">
            	
		            <h4 class="widgettitle">
		     
		              	<?php if($data['limits'] == 2): ?>发布新回复<?php endif; ?>
		            	
		              	<?php if($data['limits'] == 3): ?>发布新追加<?php endif; ?>
		              	
		            </h4>
		            <div class="replypanel">
		           		 <a name="reply"></a>  
		                <div class="topic-content">
		                
		              <?php if($data['limits'] == 2): ?><h5><a href=""><strong><?php echo ($result_arr["s_uname"]); ?></strong></a></h5><?php endif; ?>  
		              
		              <?php if($data['limits'] == 3): ?><h5><a href=""><strong><?php echo ($result_arr["u_uname"]); ?></strong></a></h5><?php endif; ?>  
		              
	                    <p>
	                    	<script type="text/plain" id="myEditor" style="width:100%;height:240px;"></script>
	                    </p>
   							 
						</script>
						
	                    <br /><br />
	                    <button class="btn btn-success">
								<?php if($data['limits'] == 2): ?>回复<?php endif; ?>
				            	
				              	<?php if($data['limits'] == 3): ?>追加<?php endif; ?>
						</button>
		                </div><!--topic-content-->
		            </div><!--replypanel-->
		            
	            </form>
	            
	         <?php else: ?>
	         <div style="height:200px"></div><?php endif; ?>
          </div><!--span9-->
                
                
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
<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
    um.addListener('blur',function(){
        $('#focush2').html('编辑器失去焦点了')
    });
    um.addListener('focus',function(){
        $('#focush2').html('')
    });
    //按钮的操作
    function insertHtml() {
        var value = prompt('插入html代码', '');
        um.execCommand('insertHtml', value)
    }
    function isFocus(){
        alert(um.isFocus())
    }
    function doBlur(){
        um.blur()
    }
    function createEditor() {
        enableBtn();
        um = UM.getEditor('myEditor');
    }
    function getAllHtml() {
        alert(UM.getEditor('myEditor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('myEditor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('myEditor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用umeditor')方法可以设置编辑器的内容");
        UM.getEditor('myEditor').setContent('欢迎使用umeditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UM.getEditor('myEditor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UM.getEditor('myEditor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UM.getEditor('myEditor').selection.getRange();
        range.select();
        var txt = UM.getEditor('myEditor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UM.getEditor('myEditor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UM.getEditor('myEditor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UM.getEditor('myEditor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UM.getEditor('myEditor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            domUtils.removeAttributes(btn, ["disabled"]);
        }
    }
</script>
</body>
</html>