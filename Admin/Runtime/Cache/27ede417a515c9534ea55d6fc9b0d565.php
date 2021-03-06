<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Jason_Administrator</title>

    <!-- Bootstrap CSS -->    
    <link href="__PUBLIC__/Admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="__PUBLIC__/Admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="__PUBLIC__/Admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="__PUBLIC__/Admin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="__PUBLIC__/Admin/css/owl.carousel.css" type="text/css">
	<link href="__PUBLIC__/Admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="__PUBLIC__/Admin/css/fullcalendar.css">
	<link href="__PUBLIC__/Admin/css/widgets.css" rel="stylesheet">
    <link href="__PUBLIC__/Admin/css/style.css" rel="stylesheet">
    <link href="__PUBLIC__/Admin/css/style-responsive.css" rel="stylesheet" />
	<link href="__PUBLIC__/Admin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="__PUBLIC__/Admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="__PUBLIC__/Admin/js/html5shiv.js"></script>
      <script src="__PUBLIC__/Admin/js/respond.min.js"></script>
      <script src="__PUBLIC__/Admin/js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
			
            <a href="index.html" class="logo">Jason <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important"><?php echo ($count); ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <?php echo ($count); ?>new messages</p>
                            </li>
							<?php if(is_array($data10)): foreach($data10 as $key=>$vo): ?><li>
                                <a href="__APP__/Message/message">
                                    <span class="photo"><img alt="avatar" src="__PUBLIC__/Admin/img/avatar-mini.jpg"></span>
                                    <span class="subject">
									<?php echo ($vo["count"]); ?>
                                    <span class="from"><?php echo ($vo["name"]); ?></span>
                                    <span class="time"><?php echo (date('Y-m-d-H:i:s',$vo["time"])); ?></span>
                                    </span>
                                    <span class="message">
                                    <?php echo (mb_substr($vo["message"],0,20,utf8)); ?>
                                    </span>
                                </a>
                            </li><?php endforeach; endif; ?>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
						<?php if(is_array($data9)): foreach($data9 as $key=>$vo): ?><li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>">
                            </span>
                            <span class="username"><?php echo ($vo["first"]); ?> <?php echo ($vo["last"]); ?></span>
                            <b class="caret"></b>
                        </a><?php endforeach; endif; ?>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="__APP__/About/about"><i class="icon_profile"></i> About Me</a>
                            </li>
                            <li>
                                <a href="__APP__/Resume/resume"><i class="icon_mail_alt"></i> Resume</a>
                            </li>
                            <li>
                                <a href="__APP__/Project/project"><i class="icon_clock_alt"></i> Projects</a>
                            </li>
                            <li>
                                <a href="__APP__/Message/message"><i class="icon_chat_alt"></i> Message</a>
                            </li>
                            <li>
                                <a href='__APP__/Login/do_logout' ><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
	<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="__APP__/Index/index">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
					<a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Resume</span>
						  <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
					  <ul class="sub">
					      <li><a class="" href="__APP__/Resume/resume">Check Resume</a></li>
                          <li><a class="" href="__APP__/Resume/modify">Modify Resume</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
					<a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>About Me</span>
						  <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
					  <ul class="sub">
                          <li><a class="" href="__APP__/About/about">Check About</a></li>
						  <li><a class="" href="__APP__/About/modify">Modify About</a></li>
                          
                      </ul>
                  </li>
				  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Projects</span>
						  <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="__APP__/Project/project">Check Pj</a></li>
						  <li><a class="" href="__APP__/Project/add">Add Pj</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>Contact</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="__APP__/Contact/contact">Check Contact</a></li>
						  <li><a class="" href="__APP__/Contact/modify">Modify Contact</a></li>
                          
                      </ul>
                  </li>
				  <li>
					<a href="__APP__/Message/message">
                          <i class="icon_documents_alt"></i>
                          <span>Message</span>
                      </a>
                  </li>
				  <li>
					<a href="__APP__/Chat/chat">
                          <i class="icon_documents_alt"></i>
                          <span>Administrators</span>
                      </a>
                  </li>                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="__APP__/Index/index">Home</a></li>
						<li><i class="icon_document_alt"></i>Contact</li>
						<li><i class="fa fa-files-o"></i>Update</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Contact Update
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" action="__URL__/update" method='post' >
											  <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" name="email" value="<?php echo ($data["email"]); ?>" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Address</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control"  name="address" required><?php echo ($data["address"]); ?></textarea>
                                          </div>
                                      </div>
									   <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">blog_title</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control"  name="blog_title" required><?php echo ($data["blog_title"]); ?></textarea>
                                          </div>
                                      </div>
									   <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">link</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control"  name="link" required><?php echo ($data["link"]); ?></textarea>
                                          </div>
                                      </div>
									  <div class="form-group">
                                                  <label class="control-label col-sm-2">content</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="content" rows="6"><?php echo ($data["content"]); ?></textarea>
                                                  </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="__PUBLIC__/Admin/js/jquery.js"></script>
    <script src="__PUBLIC__/Admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="__PUBLIC__/Admin/js/jquery.scrollTo.min.js"></script>
    <script src="__PUBLIC__/Admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="__PUBLIC__/Admin/js/jquery.validate.min.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="__PUBLIC__/Admin/assets/ckeditor/ckeditor.js"></script>
    <!-- custom form validation script for this page-->
    <script src="__PUBLIC__/Admin/js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="__PUBLIC__/Admin/js/scripts.js"></script>    


  </body>
</html>