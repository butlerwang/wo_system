<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>后台面板</title>

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
                            <h5><?php echo (session('userid')); ?><small>sz24hours@163.com</small></h5>
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
            <?php if($limits == '1'): ?><!-- 管理员 -->
            	<li class="nav-header">总后台管理</li>
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
                
            	<hr/><?php endif; ?>
            
            	<li class="nav-header">工单管理</li>
            	<li class="active"><a href="<?php echo U('Index/dashboard');?>"><span class="iconfa-laptop"></span> 后台面板</a></li>
                <li><a href="<?php echo U('Index/forms');?>"><span class="iconfa-pencil"></span> 新工单</a></li>
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
            <li>控制面板</li>
            <li class="right">
                    <a href="<?php echo (C("ROOT_INDEX")); ?>" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> 皮肤切换</a>
                    <ul class="dropdown-menu pull-right skin-color">
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>default">默认</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>navyblue">海军蓝色</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>palegreen">浅绿色</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>red">红色</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>green">绿色</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>brown">酱紫色</a></li>
                    </ul>
            </li>
        </ul>
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>控制台面板</h5>
                <h1>控制台</h1>
            </div>
        </div><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div id="dashboard-left" class="span8">
                        
                        <h5 class="subtitle">快捷信息</h5>
                        <ul class="shortcuts">
                            <li class="events">
                                <a href="">
                                	<p>25000000个</p>
                                    <span class="shortcuts-icon iconsi-event"></span>
                                    <span class="shortcuts-label">会员统计</span>
                                </a>
                            </li>
                            <li class="products">
                                <a href="">
                                	<strong>250个</strong>
                                    <span class="shortcuts-icon iconsi-cart"></span>
                                    <span class="shortcuts-label">店铺统计</span>
                                </a>
                            </li>
                            <li class="archive">
                                <a href="">
                                	<strong>250个</strong>
                                    <span class="shortcuts-icon iconsi-archive"></span>
                                    <span class="shortcuts-label">商品统计</span>
                                </a>
                            </li>
                            <li class="help">
                                <a href="">
                                	<strong>250单</strong>
                                    <span class="shortcuts-icon iconsi-help"></span>
                                    <span class="shortcuts-label">交易统计</span>
                                </a>
                            </li>
                            <li class="last <?php echo (C("URL")); ?>/images">
                                <a href="">
                                	<strong>250元</strong>
                                    <span class="shortcuts-icon iconsi-<?php echo (C("URL")); ?>/images"></span>
                                    <span class="shortcuts-label">总金额</span>
                                </a>
                            </li>
                        </ul>
                        <br />
                        <h5 class="subtitle">每日统计</h5><br />
                        <div id="chartplace" style="height:300px;"></div>
                        
                        <div class="divider30"></div>
                        
                        <table class="table table-bordered responsive">
                            <thead>
                                <tr>
                                    <th class="head1">Rendering engine</th>
                                    <th class="head0">用户量（本季度）</th>
                                    <th class="head1">商品数量(本季度)</th>
                                    <th class="head0">成交额(本季度)</th>
                                    <th class="head1">订单数量(本季度)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>+50</td>
                                    <td>+95</td>
                                    <td class="center">+55</td>
                                    <td class="center">+6</td>
                                </tr>
                                <tr>
                                   <td>Trident</td>
                                    <td>+50</td>
                                    <td>+95</td>
                                    <td class="center">+55</td>
                                    <td class="center">+6</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>+50</td>
                                    <td>+95</td>
                                    <td class="center">+55</td>
                                    <td class="center">+6</td>
                                </tr>
                            </tbody>
                        </table>
                        <br />
                        <h4 class="widgettitle"><span class="icon-comment icon-white"></span> Recent Comments</h4>
                        <div class="widgetcontent nopadding">
                            <ul class="commentlist">
                                <li>
                                    <img src="<?php echo (C("URL")); ?>/images/photos/thumb2.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h4>
                                        <h5>in <a href="">Sit Voluptatem</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                        <p>
                                            <a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
                                            <a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo (C("URL")); ?>/images/photos/thumb1.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">But I must explain to you how all this mistaken</a></h4>
                                        <h5>in <a href="">At vero eos et accusamus et iusto odio dignissimos</a></h5>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                        <p>
                                            <a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
                                            <a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo (C("URL")); ?>/images/photos/thumb10.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">On the other hand, we denounce with righteous indignation</a></h4>
                                        <h5>in <a href="">These cases are perfectly simple and easy to distinguish</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                        <p>
                                            <a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
                                            <a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li><a href="">View More Comments</a></li>
                            </ul>
                        </div>
                        <br />
                    </div><!--span8-->
                    <div id="dashboard-right" class="span4">
                        
                        <div class="divider15"></div>
                        <div class="alert alert-block">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              <h4>5.2版本升级提示!</h4>
                              <p style="margin: 8px 0">官方研发最新5.2版本，新增sql注入拦截，新增一键导出excel，修复会员中心等等，嗯。。。这里是我们的版本信息了</p>
                        </div><!--alert-->
                        <br />
                        <h5 class="subtitle">官方微博！</h5>
                        <div class="tabbedwidget tab-primary">
                            <ul>
                                <li><a href="#tabs-1" title="新浪微博"><span class="iconfa-user"></span></a></li>
                                <li><a href="#tabs-2" title="腾讯微博"><span class="iconfa-star" ></span></a></li>
                            </ul>
                            <div id="tabs-1" class="nopadding">
								132132
                            </div>
                            <div id="tabs-2" class="nopadding">
								132132
                            </div>
                        </div><!--tabbedwidget-->
                        <br />
                    </div><!--span4-->
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
    jQuery(document).ready(function() {
      // simple chart
		var flash = [[0, 11], [1, 9], [2,12], [3, 8], [4, 7], [5, 3], [6, 1]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
      var css3 = [[0, 6], [1, 1], [2,9], [3, 12], [4, 10], [5, 12], [6, 11]];
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
		var plot = jQuery.plot(jQuery("#chartplace"),
			   [ { data: flash, label: "Flash(x)", color: "#6fad04"},
              { data: html5, label: "HTML5(x)", color: "#06c"},
              { data: css3, label: "CSS3", color: "#666"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#666', borderWidth: 2, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });
		var previousPoint = null;
		jQuery("#chartplace").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		});
		jQuery("#chartplace").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
    });
</script>
</body>
</html>