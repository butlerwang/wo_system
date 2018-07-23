<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>


<link rel="stylesheet" href="<?php echo (C("URL")); ?>prettify/prettify.css" type="text/css" />
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
                                <li><a href="<?php echo (C("ROOT_INDEX")); ?>index.html">退出</a></li>
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
                <li class="dropdown"><a href=""><span class="iconfa-user"></span> 关于客户</a>
                	<ul>
                    	<li><a href="<?php echo (C("ROOT_INDEX")); ?>editprofile.html">添加客户</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>editprofile.html">管理客户</a></li>
                        <li><a href="<?php echo (C("ROOT_INDEX")); ?>editprofile.html">客户类型</a></li>
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
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="dashboard.html">UI Elements &amp; Widgets</a> <span class="separator"></span></li>
            <li>Theme Components</li>
            
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
            <div class="pageicon"><span class="iconfa-briefcase"></span></div>
            <div class="pagetitle">
                <h5>UI Elements &amp; Widgets</h5>
                <h1>Theme Components</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                
                <div class="row-fluid">
                    <div class="span6">
                        <h4 class="subtitle2">Growl Notifications</h4>
                        <br />
                        <a id="growl" class="btn"><small>Basic growl</small></a> &nbsp;
                   	<a id="growl2" class="btn"><small>Long live growl message</small></a>
                        
                        <br /><br />
                        <h4 class="subtitle2">Alert Boxes</h4>
                        <br />
                        <a class="btn alertboxbutton"><small>Basic Alert</small></a> &nbsp;
                        <a class="btn confirmbutton"><small>Confirm Box</small></a> &nbsp;
                        <a class="btn promptbutton"><small>Prompt Box</small></a> &nbsp;
                        <a class="btn alerthtmlbutton"><small>Dialog with HTML support</small></a>
                        
                        <br /><br />
                        
                        <a class="btn btn-danger alertdanger"><small>Alert Danger</small></a> &nbsp;
                        <a class="btn btn-warning alertwarning"><small>Alert Warning</small></a> &nbsp;
                        <a class="btn btn-success alertsuccess"><small>Alert Success</small></a> &nbsp;
                        <a class="btn btn-info alertinfo"><small>Alert Info</small></a> &nbsp;
                        <a class="btn btn-inverse alertinverse"><small>Alert Inverse</small></a> &nbsp;
                        
                    </div><!--span6-->
                    
                    <div class="span6">
                        <h4 class="subtitle2">Ajax Loaders</h4>
                        <br />
                        <div class="loaders">
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader1.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader2.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader3.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader4.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader8.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader9.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader5.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader6.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader7.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader10.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader11.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader12.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader13.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader14.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader15.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader16.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader17.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader18.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader19.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader20.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader21.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader22.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader23.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader24.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader25.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader26.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader27.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader28.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader29.gif" alt="" />
                            <img src="<?php echo (C("URL")); ?>images/loaders/loader30.gif" alt="" />                            
                        </div><!--loaders-->
                    </div><!--span6-->
                </div><!--row-fluid-->
                
                <br />
                
                <div class="row-fluid">
                    <div class="span12">
                        <h4 class="subtitle2">Sliders</h4>
                        <br />
                        <div class="pargroup">
                            <div class="par">
                                <h6>Normal Slider</h6>
                                <div id="slider"></div>
                            </div>
                            <div class="par">
                                <h6>Snap To Increments</h6>
                                <p class="pull-right">Withdrawal: <strong><span id="amount" class="color333"></span></strong></p>
                                <div id="slider2"></div>
                            </div>
                            
                            <div class="par">
                                <h6>Range Slider</h6>
                                <p class="pull-right">Price Range: <strong><span id="amount2" class="color333"></span></strong></p>
                                <div id="slider3"></div>
                            </div>
                                    
                            <div class="par">
                                <h6>Fixed Minimum</h6>
                                <p class="pull-right">Maximum price: <strong><span id="amount4" class="color069"></span></strong></p>
                                <div id="slider4"></div>
                            </div>
                                    
                            <div class="par">
                                <h6>Fixed Maximum</h6>
                                <p class="pull-right">Maximum price: <strong><span id="amount5" class="color333"></span></strong></p>
                                <div id="slider5"></div>
                            </div>
                        </div><!--pargroup-->
                                
                    </div><!--span12-->
                    
                </div><!--row-fluid-->
                
                <br />
                <h4 class="subtitle2">Tabbed Widgets</h4>
                <br />
                <div class="row-fluid">
                    <div class="span6">
                        <div class="tabbedwidget">
                            <ul>
                                <li><a href="#tabs-1">Tab 1</a></li>
                                <li><a href="#tabs-2">Tab 2</a></li>
                                <li><a href="#tabs-3">Tab 3</a></li>
                            </ul>
                            <div id="tabs-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="tabs-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="tabs-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="tabbedwidget tab-primary">
                            <ul>
                                <li><a href="#a-1">Tab 1</a></li>
                                <li><a href="#a-2">Tab 2</a></li>
                                <li><a href="#a-3">Tab 3</a></li>
                            </ul>
                            <div id="a-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="a-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="a-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-primary&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        <div class="tabbedwidget tab-danger">
                            <ul>
                                <li><a href="#b-1">Tab 1</a></li>
                                <li><a href="#b-2">Tab 2</a></li>
                                <li><a href="#b-3">Tab 3</a></li>
                            </ul>
                            <div id="b-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="b-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="b-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-danger&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="tabbedwidget tab-inverse">
                            <ul>
                                <li><a href="#c-1">Tab 1</a></li>
                                <li><a href="#c-2">Tab 2</a></li>
                                <li><a href="#c-3">Tab 3</a></li>
                            </ul>
                            <div id="c-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="c-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="c-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-inverse&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        
                    
                    </div><!--span6-->
                    
                    <div class="span6">
                                                
                        <div class="tabbedwidget tab-warning">
                            <ul>
                                <li><a href="#d-1">Tab 1</a></li>
                                <li><a href="#d-2">Tab 2</a></li>
                                <li><a href="#d-3">Tab 3</a></li>
                            </ul>
                            <div id="d-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="d-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="d-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-warning&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="tabbedwidget tab-success">
                            <ul>
                                <li><a href="#e-1">Tab 1</a></li>
                                <li><a href="#e-2">Tab 2</a></li>
                                <li><a href="#e-3">Tab 3</a></li>
                            </ul>
                            <div id="e-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="e-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="e-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-success&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="tabbedwidget tab-info">
                            <ul>
                                <li><a href="#f-1">Tab 1</a></li>
                                <li><a href="#f-2">Tab 2</a></li>
                                <li><a href="#f-3">Tab 3</a></li>
                            </ul>
                            <div id="f-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="f-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="f-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-info&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="tabbedwidget tab-white">
                            <ul>
                                <li><a href="#g-1">Tab 1</a></li>
                                <li><a href="#g-2">Tab 2</a></li>
                                <li><a href="#g-3">Tab 3</a></li>
                            </ul>
                            <div id="g-1">
                                Your content goes here for tab 1
                            </div>
                            <div id="g-2">
                                Your content goes here for tab 2
                            </div>
                            <div id="g-3">
                                Your content goes here for tab 3 
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;tabbedwidget tab-white&quot;&gt;&lt;ul&gt;...&lt;/ul&gt;&lt;/div&gt;</pre>
                    
                    </div><!--span6-->                    
                </div><!--row-fluid-->
                
                <br />
                <h4 class="subtitle2">Accordion Widgets</h4>
                <br />
                <div class="row-fluid">
                    <div class="span6">
                        <div class="accordion">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                                                
                        <div class="accordion accordion-primary">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-primary&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="accordion accordion-danger">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-danger&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="accordion accordion-inverse">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-inverse&quot;&gt;...&lt;/div&gt;</pre>
                    
                    </div><!--span6-->
                    
                    <div class="span6">
                        
                        <div class="accordion accordion-warning">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-warning&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="accordion accordion-success">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-success&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="accordion accordion-info">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-info&quot;&gt;...&lt;/div&gt;</pre>
                        <br />
                        
                        <div class="accordion accordion-white">
                            <h3><a href="#">Section 1</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Section 2</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Section 3</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                            </div>
                            <h3><a href="#">Section 4</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                            </div>
                        </div><!--#accordion-->
                        
                        <pre class="prettyprint linenums">&lt;div class=&quot;accordion accordion-white&quot;&gt;...&lt;/div&gt;</pre>
                        
                    </div><!--span6-->
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