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
					<li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
							<?php if( $count1 == 0 ): else: ?>
								<span class="badge bg-important">
									<?php echo ($count1); ?>
								</span><?php endif; ?>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <?php echo ($count1); ?> new chats</p>
                            </li>
							<?php if(is_array($data11)): foreach($data11 as $key=>$vo): ?><li>
                                 <a href="__APP__/Chat/chat">
                                    <span><img alt="avatar" src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>"></i></span> 
                                    <?php echo (mb_substr($vo["content"],0,20,utf8)); ?>
                                    <span class="small italic pull-right"><?php echo (format_data($vo["time"])); ?></span>
                                </a>
                            </li><?php endforeach; endif; ?>
                            <li>
                                <a href="__APP__/Chat/chat">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
							<?php if( $count == 0 ): else: ?>
								<span class="badge bg-important">
									<?php echo ($count); ?>
								</span><?php endif; ?>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <?php echo ($count); ?> new messages</p>
                            </li>
							<?php if(is_array($data10)): foreach($data10 as $key=>$vo): ?><li>
                                <a href="__APP__/Message/message">
                                    <span class="photo"><img alt="avatar" src="__PUBLIC__/Admin/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from"><?php echo ($vo["name"]); ?></span>
                                    <span class="time"><?php echo (format_data($vo["time"])); ?></span>
                                    </span>
                                    <span class="message">
                                    <?php echo (mb_substr($vo["message"],0,20,utf8)); ?>
                                    </span>
                                </a>
                            </li><?php endforeach; endif; ?>
                            <li>
                                 <a href="__APP__/Message/message">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
					<li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
							<?php if( $count2 == 0 ): else: ?>
								<span class="badge bg-important">
									<?php echo ($count2); ?>
								</span><?php endif; ?>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <?php echo ($count2); ?> records</p>
                            </li>
							<?php if(is_array($data12)): foreach($data12 as $key=>$vo): ?><li>
                                <a href="__APP__/Chat/chat">
                                    <span>
                                        <img alt="avatar" src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>">
                                    </span>
									<span>
									<?php echo (format_data($vo["time"])); ?>
									</span>
                                </a>
                            </li><?php endforeach; endif; ?>
                            <li class="external">
                                <a href="__APP__/Chat/chat">See All Tasks</a>
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
              <!--overview start--> 	  
		  <!-- Today status end -->
		
		<div class="row">
			<div class="col-md-8 portlets">
              <div class="panel panel-default">
				<div class="panel-heading">
                  <div class="pull-left">Personal Message</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                  <!-- Widget content -->
                  <div class="padd sscroll" style=" overflow:scroll; height:453px;">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
					  <?php if(is_array($data1)): foreach($data1 as $key=>$vo): if( $vo["uid"] == $_SESSION['id']): ?><li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta"><?php echo ($vo["first"]); ?> <?php echo ($vo["last"]); ?><span class="pull-right"><?php echo (format_data($vo["time"])); ?></span></div>
                          <?php echo ($vo["content"]); ?>
                          <div class="clearfix"></div>
                        </div>
                      </li><?php endif; ?>
						<?php if( $vo["uid"] != $_SESSION['id']): ?><!-- Chat by other. Use the class "by-other". -->
                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta"><?php echo (format_data($vo["time"])); ?><span class="pull-right"><?php echo ($vo["first"]); ?> <?php echo ($vo["last"]); ?></span></div>
                          <?php echo ($vo["content"]); ?>
                          <div class="clearfix"></div>
                        </div>
                      </li><?php endif; endforeach; endif; ?>                                                                                 

                    </ul>

                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
                      <form class="form-inline" action="__URL__/do_Message" method='post' >
						<div class="form-group">
							<input style="width:655px;" type="text" name="content" class="form-control" placeholder="Type your message here...">
						</div>
                        <button type="submit" class="btn btn-info">Send</button>
                      </form>


                  </div>
                </div>


              </div> 
              
            </div>
                  <div class="col-lg-4">
                      <!--Project Activity start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>Administrator Records</h1>                                  
                              </div>
                              <div class="col-lg-4">
                                <span class="profile-ava pull-right">
										<?php if(is_array($data9)): foreach($data9 as $key=>$vo): ?><img alt="" class="simple" src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>"><?php endforeach; endif; ?>
                                </span>                                
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
							  <?php if(is_array($data2)): foreach($data2 as $key=>$vo): ?><tr>
								 <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="__PUBLIC__/Admin/img/<?php echo ($vo["filename"]); ?>">
                                    </span>
                                  </td>
								  <td><?php echo ($vo["first"]); ?> <?php echo ($vo["last"]); ?></td>
                                  <td><?php echo (date('Y-m-d-H:i:s',$vo["time"])); ?></td>
                              </tr><?php endforeach; endif; ?>
                              </tbody>
                          </table>
                      </section>
                      <!--Project Activity end-->
                  </div>
              </div><br><br>
		  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Others Messages
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_mobile"></i> Message</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							  <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                 <td><?php echo ($vo["name"]); ?></td>
                                 <td><?php echo (date('Y-m-d-H:i:s',$vo["time"])); ?></td>
                                 <td><?php echo ($vo["email"]); ?></td>
                                 <td><?php echo (mb_substr($vo["message"],0,40,utf8)); ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-success" href="__URL__/profile"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="__URL__/del/id/<?php echo ($vo["id"]); ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr><?php endforeach; endif; ?>
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="__PUBLIC__/Admin/js/jquery.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="__PUBLIC__/Admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="__PUBLIC__/Admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="__PUBLIC__/Admin/js/jquery.scrollTo.min.js"></script>
    <script src="__PUBLIC__/Admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="__PUBLIC__/Admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="__PUBLIC__/Admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="__PUBLIC__/Admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="__PUBLIC__/Admin/js/calendar-custom.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="__PUBLIC__/Admin/js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="__PUBLIC__/Admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="__PUBLIC__/Admin/js/sparkline-chart.js"></script>
    <script src="__PUBLIC__/Admin/js/easy-pie-chart.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="__PUBLIC__/Admin/js/xcharts.min.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery.autosize.min.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery.placeholder.min.js"></script>
	<script src="__PUBLIC__/Admin/js/gdp-data.js"></script>	
	<script src="__PUBLIC__/Admin/js/morris.min.js"></script>
	<script src="__PUBLIC__/Admin/js/sparklines.js"></script>	
	<script src="__PUBLIC__/Admin/js/charts.js"></script>
	<script src="__PUBLIC__/Admin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>