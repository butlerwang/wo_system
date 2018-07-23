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
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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
                    <ul style="display: block;">
                    	<li><a href="elements.html">Theme Components</a></li>
                        <li class="active"><a href="bootstrap.html">Bootstrap Components</a></li>
                        <li><a href="boxes.html">Headers &amp; Boxes</a></li>
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
            <li><a href="dashboard.html">UI Elements &amp; Widgets</a> <span class="separator"></span></li>
            <li>Bootstrap Components</li>
            
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
                <h1>Bootstrap Components</h1>
            </div>            
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div class="span6">
                        <h4 class="subtitle2">Buttons &amp; Dropdowns</h4>
                        
                        <br />
                        
                        <button class="btn">Default</button> &nbsp; 
                        <button class="btn btn-primary">Primary</button> &nbsp;
                        <button class="btn btn-danger">Danger</button> &nbsp;
                        <button class="btn btn-warning">Warning</button>
                        
                        <br /><br />
                        
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
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div> 
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        
                        <br /><br />
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        
                        <br /><br />
                        <h4 class="subtitle2">Nav List</h4>
                        <br />
                        <ul class="nav nav-list">
                            <li class="nav-header">List header</li>
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Applications</a></li>
                            <li class="nav-header">Another list header</li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                        
                        <br /><br />
                        <h4 class="subtitle2">Pagination</h4>
                        <br />
                        
                        <div class="pagination">
                            <ul>
                                <li class="disabled"><a>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div><!--pagination-->
                            
                        <div class="pagination pagination-large">
                            <ul>
                                <li class="disabled"><a>&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div><!--pagination-->
                            
                        <div class="pagination pagination-mini">
                            <ul>
                                <li class="disabled"><a>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div><!--pagination-->
                            
                        <div class="pagination pagination-centered">
                            <ul>
                                <li class="disabled"><a>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div><!--pagination-->
                            
                        <div class="pagination pagination-right">
                            <ul>
                                <li class="disabled"><a>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div><!--pagination-->
                        
                        <br />
                        <h4 class="subtitle2">Pager</h4>
                        <ul class="pager">
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                            
                        <ul class="pager">
                            <li class="previous"><a href="#"><span>&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span>&rarr;</span></a></li>
                        </ul>
                            
                        <ul class="pager">
                            <li class="previous disabled"><a href="#"><span>&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span>&rarr;</span></a></li>
                        </ul>
                        
                        <br />
                        <h4 class="subtitle2">Basic Nav Bar</h4>
                        <br />
                        <div class="navbar">
                            <div class="navbar-inner">
                                <a href="#" class="brand">Title</a>
                                <ul class="nav">
                                  <li class="active"><a href="#">Home</a></li>
                                  <li><a href="#">Link</a></li>
                                  <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li class="nav-header">Nav header</li>
                                      <li><a href="#">Separated link</a></li>
                                      <li><a href="#">One more separated link</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div><!--navbar-inner-->
                            </div><!--navbar-->
                                                        
                            <div class="navbar">
                                <div class="navbar-inner">
                            	    <form class="navbar-search pull-left">
                                        <input type="text" class="search-query" placeholder="Search">
                                    </form>
                          	</div><!--navbar-inner-->
                            </div><!--navbar-->
                            
                            <div class="navbar">
                                <div class="navbar-inner">
                            	    <form class="navbar-form pull-right">
                              		<input type="text" class="span2">
                              		<button class="btn" type="submit">Submit</button>
                                    </form>
                          	</div><!--navbar-inner-->
                            </div><!--navbar-->
                            
                            <div class="navbar navbar-inverse">
                              <div class="navbar-inner">
                                <a href="#" class="brand">Title</a>
                                <ul class="nav">
                                  <li class="active"><a href="#">Home</a></li>
                                  <li><a href="#">Link</a></li>
                                  <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li class="nav-header">Nav header</li>
                                      <li><a href="#">Separated link</a></li>
                                      <li><a href="#">One more separated link</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div><!--navbar-inner-->
                            </div><!--navbar-->
                            
                            <br />
                            <h4 class="subtitle2">Labels</h4>
                            <br />
                            <span class="label">Default</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-important">Important</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-inverse">Inverse</span>
                            
                            <br /><br />
                            <h4 class="subtitle2">Badges</h4>
                            <br />
                            <span class="badge">1</span>
                            <span class="badge badge-success">2</span>
                            <span class="badge badge-warning">3</span>
                            <span class="badge badge-important">4</span>
                            <span class="badge badge-info">5</span>
                            <span class="badge badge-inverse">6</span>
                        
                        
                    </div><!--span6-->
                    
                    <div class="span6">
                        
                        <h4 class="subtitle2">Single Button Group</h4>
                        
                        <br />
                        
                        <div class="btn-group">
                            <button class="btn">1</button>
                            <button class="btn">2</button>
                            <button class="btn">3</button>
                        </div>
                            
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button class="btn">1</button>
                                <button class="btn">2</button>
                                <button class="btn">3</button>
                                <button class="btn">4</button>
                            </div>
                            
                            <div class="btn-group">
                                <button class="btn">5</button>
                                <button class="btn">6</button>
                                <button class="btn">7</button>
                            </div>
        
                            <div class="btn-group">
                                <button class="btn">8</button>
                            </div>
                        </div><!--btn-toolbar-->
                            
                        <div class="btn-group btn-group-vertical">
                            <button class="btn">1</button>
                            <button class="btn">2</button>
                            <button class="btn">3</button>
                        </div>
                        
                        <br /><br />
                        <h4 class="subtitle2">Basic Tabs</h4>
                        <br />
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                        
                        <br />
                        <h4 class="subtitle2">Basic Pills</h4>
                        <br />
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                        
                        <br />
                        <h4 class="subtitle2">Stacked Tabs</h4>
                        <br />
                        <ul class="nav nav-tabs nav-stacked">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                        
                        <br />
                        <h4 class="subtitle2">Tabbable In Any Direction</h4>
                        <br />
                        <div class="tabbable tabs-below">
                            <div class="tab-content">
                                <div id="A" class="tab-pane">
                                    <p>I'm in Section A.</p>
                            	</div>
                            	<div id="B" class="tab-pane">
                              	    <p>Howdy, I'm in Section B.</p>
                            	</div>
                            	<div id="C" class="tab-pane active">
                                    <p>What up girl, this is Section C.</p>
                            	</div>
                            </div>
                            <ul class="nav nav-tabs">
                            	<li class=""><a data-toggle="tab" href="#A">Section 1</a></li>
                            	<li class=""><a data-toggle="tab" href="#B">Section 2</a></li>
                            	<li class="active"><a data-toggle="tab" href="#C">Section 3</a></li>
                            </ul>
                        </div><!--tabbable-->
                        
                        <br />
                        
                        <div class="tabs-right">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#rA">Section 1</a></li>
                                <li><a data-toggle="tab" href="#rB">Section 2</a></li>
                                <li><a data-toggle="tab" href="#rC">Section 3</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="rA" class="tab-pane active">
                                    <p>I'm in Section A.</p>
                                </div>
                                <div id="rB" class="tab-pane">
                                    <p>Howdy, I'm in Section B.</p>
                                </div>
                                <div id="rC" class="tab-pane">
                                    <p>What up girl, this is Section C.</p>
                                </div>
                            </div><!--tab-content-->
                        </div><!--tabbable tabs-right-->
                        
                        <br />
                        
                        <div class="tabs-left">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#lA">Section 1</a></li>
                                <li><a data-toggle="tab" href="#lB">Section 2</a></li>
                                <li><a data-toggle="tab" href="#lC">Section 3</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="lA" class="tab-pane active">
                                    <p>I'm in Section A.</p>
                                </div>
                                <div id="lB" class="tab-pane">
                                    <p>Howdy, I'm in Section B.</p>
                                </div>
                                <div id="lC" class="tab-pane">
                                    <p>What up girl, this is Section C.</p>
                                </div>
                            </div><!--tab-content-->
                        </div><!--tabs-left-->
                        
                        
                        <br /><br />
                        <h4 class="subtitle2">Progress Bars</h4>
                        <br />
                        <div class="progress progress-primary">
                            <div style="width: 60%;" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-striped">
                            <div style="width: 20%;" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-striped active">
                            <div style="width: 45%" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-info">
                            <div style="width: 20%" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-success">
                            <div style="width: 40%" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-warning progress-striped">
                            <div style="width: 60%" class="bar"></div>
                        </div><!--progress-->
                            
                        <div class="progress progress-danger progress-striped active">
                            <div style="width: 80%" class="bar"></div>
                        </div><!--progress-->
                        
                        
                        <br />
                        <h4 class="subtitle2">Modal Window</h4>
                        <br />
                        <a class="btn btn-primary" href="#myModal" data-toggle="modal">Launch demo modal</a>
                        
                        <br /><br />
                        <h4 class="subtitle2">Tooltip</h4>
                        <br />
                        <ul class="tooltipsample">
                            <li><a data-placement="top" data-rel="tooltip" href="" data-original-title="Tooltip on top" class="btn">Top</a></li>
                            <li><a data-placement="right" data-rel="tooltip" href="" data-original-title="Tooltip on right" class="btn">Right</a></li>
                            <li><a data-placement="bottom" data-rel="tooltip" href="" data-original-title="Tooltip on bottom" class="btn">Bottom</a></li>
                            <li><a data-placement="left" data-rel="tooltip" href="" data-original-title="Tooltip on left" class="btn">Left</a></li>
                        </ul>
                        
                        <br />
                        <h4 class="subtitle2">Popovers</h4>
                        <br />
                        <ul class="popoversample">
                            <li><a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-rel="popover" class="btn" href="#" data-original-title="Popover on top">Top</a></li>
                            <li><a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-rel="popover" class="btn" href="#" data-original-title="Popover on right">Right</a></li>
                            <li><a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-rel="popover" class="btn" href="#" data-original-title="Popover on bottom">Bottom</a></li>
                            <li><a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-rel="popover" class="btn" href="#" data-original-title="Popover on left">Left</a></li>
                        </ul>
                        
                        <br /><br /><br /><br /><br />
                        
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
<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="myModal">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h3 id="myModalLabel">Modal Heading</h3>
    </div>
    <div class="modal-body">
        <h4>Text in a modal</h4>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div><!--#myModal-->

<script type="text/javascript">
    jQuery(document).ready(function(){
                                    
        //Replaces data-rel attribute to rel.
        //We use data-rel because of w3c validation issue
        jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
        
        // tooltip sample
	if(jQuery('.tooltipsample').length > 0)
		jQuery('.tooltipsample').tooltip({selector: "a[rel=tooltip]"});
		
	jQuery('.popoversample').popover({selector: 'a[rel=popover]', trigger: 'hover'});
        
    });
</script>

</body>
</html>