<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        
        //content slider
        jQuery('#slidercontent').bxSlider({
            prevText: '',
            nextText: ''
        });
        
        //slim scroll
        jQuery('#scroll1').slimscroll({
             color: '#666',
             size: '10px',
             width: 'auto',
             height: '208px'                  
         });
    });
</script>
</head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count">4</span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Messages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Messages</li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jane</strong> <small class="muted"> - 3 days ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Tanya</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Lee</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li class="viewmore"><a href="messages.html">View More Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">10</span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">New Users</span>
                    </a>
                    <ul class="dropdown-menu newusers">
                        <li class="nav-header">New Users</li>
                        <li>
                            <a href="">
                                <img src="images/photos/thumb1.png" alt="" class="userthumb" />
                                <strong>Draniem Daamul</strong>
                                <small>April 20, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/photos/thumb2.png" alt="" class="userthumb" />
                                <strong>Shamcey Sindilmaca</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/photos/thumb3.png" alt="" class="userthumb" />
                                <strong>Nusja Paul Nawancali</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/photos/thumb4.png" alt="" class="userthumb" />
                                <strong>Rose Cerona</strong>
                                <small>April 18, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/photos/thumb5.png" alt="" class="userthumb" />
                                <strong>John Doe</strong>
                                <small>April 16, 2013</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Statistics</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Statistics</li>
                        <li><a href=""><span class="icon-align-left"></span> New Reports from <strong>Products</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> New Statistics from <strong>Users</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> New Statistics from <strong>Comments</strong> <small class="muted"> - 3 days ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> Most Popular in <strong>Products</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> Most Viewed in <strong>Blog</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li class="viewmore"><a href="charts.html">View More Statistics</a></li>
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5>Juan Dela Cruz <small>- juan@themepixels.com</small></h5>
                            <ul>
                                <li><a href="editprofile.html">Edit Profile</a></li>
                                <li><a href="">Account Settings</a></li>
                                <li><a href="index.html">Sign Out</a></li>
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
            	<li class="nav-header">Navigation</li>
                <li><a href="dashboard.html"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="buttons.html"><span class="iconfa-hand-up"></span> Buttons &amp; Icons</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-pencil"></span> Forms</a>
                	<ul>
                    	<li><a href="forms.html">Form Styles</a></li>
                        <li><a href="wizards.html">Wizard Form</a></li>
                        <li><a href="wysiwyg.html">WYSIWYG</a></li>
                    </ul>
                </li>
                <li class="dropdown active"><a href=""><span class="iconfa-briefcase"></span> UI Elements &amp; Widgets</a>
                	<ul style="display:block">
                    	<li><a href="elements.html">Theme Components</a></li>
                        <li><a href="bootstrap.html">Bootstrap Components</a></li>
                        <li class="active"><a href="boxes.html">Headers &amp; Boxes</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Tables</a>
                	<ul>
                    	<li><a href="table-static.html">Static Table</a></li>
                        <li><a href="table-dynamic.html">Dynamic Table</a></li>
                    </ul>
                </li>

                <li><a href="media.html"><span class="iconfa-picture"></span> Media Manager</a></li>
                <li><a href="typography.html"><span class="iconfa-font"></span> Typography</a></li>
                <li><a href="charts.html"><span class="iconfa-signal"></span> Graph &amp; Charts</a></li>
                <li><a href="messages.html"><span class="iconfa-envelope"></span> Messages</a></li>
                <li><a href="calendar.html"><span class="iconfa-calendar"></span> Calendar</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Other Pages</a>
                	<ul>
                    	<li><a href="404.html">404 Error Page</a></li>
                        <li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="invoice.html">Invoice Page</a></li>
                        <li><a href="discussion.html">Discussion Page</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Three Level Menu Sample</a>
                	<ul>
                    	<li class="dropdown"><a href="">Second Level Menu</a>
                        <ul>
                            <li><a href="">Third Level Menu</a></li>
                            <li><a href="">Another Third Level Menu</a></li>
                        </ul>
                     </li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="elements.html">UI Elements &amp; Widgets</a> <span class="separator"></span></li>
            <li>Headers &amp; Boxes</li>
            
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
                <h1>Headers &amp; Boxes</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                
                <h3>Headers</h3><br />
                
                <div class="row-fluid">
                    <div class="span6">
                        <h4 class="subtitle">This is a subtitle</h4>
                        <h4 class="subtitle2">This is the main title</h4>
                    </div>
                    <div class="span6">
                        <h4 class="subtitle">This is a subtitle</h4>
                        <h4>This Is The Main Title</h4>
                    </div>
                </div><!--row-fluid-->
                
                <br />
                
                <div class="row-fluid">
                    <div class="span6">
                        <h4 class="widgettitle title-primary">Header Primary</h4><br />
                        <h4 class="widgettitle title-danger">Header Danger</h4><br />
                        <h4 class="widgettitle title-warning">Header Warning</h4><br />
                        <h4 class="widgettitle title-success">Header Success</h4><br />
                        <h4 class="widgettitle title-info">Header Info</h4><br />
                        <h4 class="widgettitle title-inverse">Header Inverse</h4><br />
                    </div><!--span6-->
                    
                    <div class="span6">
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            <h4 class="widgettitle title-primary">Header Primary with Dropdown</h4>
                        </div>
                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            <h4 class="widgettitle title-danger">Header Danger with Dropdown</h4>
                        </div>
                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            <h4 class="widgettitle title-warning">Header Warning with Dropdown</h4>
                        </div>
                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            <h4 class="widgettitle title-success">Header Success with Drdopdown</h4>
                        </div>
                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            <h4 class="widgettitle title-info">Header Info with Dropdown</h4>
                        </div>
                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <h4 class="widgettitle title-inverse">Header Inverse with Dropdown</h4>
                        </div>
                    </div>
                </div><!--row-fluid-->
                
                <br />
                <h3>Boxes</h3><br />
                
                <div class="row-fluid">
                    
                    <div class="span6">
                        <div class="widgetbox">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div>
                        
                        <div class="widgetbox box-danger">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-warning">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-success">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-info">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-inverse">
                            <h4 class="widgettitle">Widget Box <a class="close">&times;</a> <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent">
                                Content goes here...
                            </div>
                        </div><!--widgetbox--> 
                        
                    </div><!--span6-->
                    
                    <div class="span6">
                        
                        <div class="widgetbox">                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <h4 class="widgettitle">Widget Box with Dropdown</h4>
                        </div>
                        <div class="widgetcontent">
                            Content goes here...
                        </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-danger">                        
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Widget Box with Dropdown</h4>
                            </div>
                            <div class="widgetcontent">
                                Content goes here...
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-warning">                        
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Widget Box with Dropdown</h4>
                            </div>
                            <div class="widgetcontent">
                                Content goes here...
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-success">                        
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Widget Box with Dropdown</h4>
                            </div>
                            <div class="widgetcontent">
                                Content goes here...
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-info">                        
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Widget Box with Dropdown</h4>
                            </div>
                            <div class="widgetcontent">
                                Content goes here...
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                        <div class="widgetbox box-inverse">                        
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Widget Box with Dropdown</h4>
                            </div>
                            <div class="widgetcontent">
                                Content goes here...
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                        
                    </div><!--span6-->
                </div><!--row-fluid-->
                
                <br />
                
                <div class="row-fluid">
                    <div class="span6">
                        <h3>Slider Box</h3>
                        <br />
                        <ul id="slidercontent">
                            <li>
                                <div class="slide_wrap">
                                    <div class="slide_img"><img src="images/thumbs/image1.png" alt="" /></div>
                                    <div class="slide_content">
                                    	<h4><a href="">Why Won't My Cat Eat?</a></h4>
                                        <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 10, 2013</small>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                        <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide_wrap">
                                  	<div class="slide_img"><img src="images/thumbs/image2.png" alt="" /></div>
                                    <div class="slide_content">
                                    	<h4><a href="">We Are About Color</a></h4>
                                        <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 11, 2013</small>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                        <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide_wrap">
                                  	<div class="slide_img"><img src="images/thumbs/image3.png" alt="" /></div>
                                    <div class="slide_content">
                                    	<h4><a href="">Ancient Technology</a></h4>
                                        <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - April 12, 2013</small>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                        <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide_wrap">
                                  	<div class="slide_img"><img src="images/thumbs/image4.png" alt="" /></div>
                                    <div class="slide_content">
                                    	<h4><a href="">Bird's Nest Soup</a></h4>
                                        <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - April 12, 2013</small>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                        <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!--span6-->
                    
                    <div class="span6">
                        
                        <h3>Slim Scroll</h3>
                        <br />
                        
                        <div id="scroll1" class="mousescroll">
                            <ul class="entrylist">
                                <li>
                                    <div class="entry_wrap">
                                        <div class="entry_img"><img src="images/thumbs/image1.png" alt="" /></div>
                                        <div class="entry_content">
                                            <h4><a href="">Why Won't My Cat Eat?</a></h4>
                                            <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 10, 2013</small>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                            <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="even">
                                    <div class="entry_wrap">
                                        <div class="entry_img"><img src="images/thumbs/image2.png" alt="" /></div>
                                        <div class="entry_content">
                                            <h4><a href="">We Are About Color</a></h4>
                                            <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 10, 2013</small>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                            <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="entry_wrap">
                                        <div class="entry_img"><img src="images/thumbs/image3.png" alt="" /></div>
                                        <div class="entry_content">
                                            <h4><a href="">Ancient Technology</a></h4>
                                            <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 11, 2013</small>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                            <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="even">
                                    <div class="entry_wrap">
                                        <div class="entry_img"><img src="images/thumbs/image4.png" alt="" /></div>
                                        <div class="entry_content">
                                            <h4><a href="">Bird's Nest Soup</a></h4>
                                            <small>Submitted by: <a href=""><strong>themepixels</strong></a> - April 12, 2013</small>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                            <p><button class="btn btn-primary">Approve</button> <button class="btn">Decline</button></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>                        
                        </div><!--#scroll1-->
                    </div><!--span6-->
                </div><!--row-fluid-->
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://themepixels.com/">ThemePixels</a></span>
                    </div>
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>